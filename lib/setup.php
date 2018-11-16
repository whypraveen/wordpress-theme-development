<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/bootstrap', Assets\asset_path('styles/bootstrap.min.css'), false, null);
  wp_enqueue_style('sage/style', Assets\asset_path('styles/style.css'), false, null);
  if(is_page(37)):
  wp_enqueue_style('sage/sitemap', Assets\asset_path('styles/sitemap.css'), false, null);    
  endif;
  wp_enqueue_style('sage/css', get_stylesheet_directory_uri().'/style.css', false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/bootstrapjs', Assets\asset_path('scripts/bootstrap.min.js'), ['jquery'], null, true);
  wp_enqueue_script('sage/cusjs', Assets\asset_path('scripts/custom.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);

/* * Custom Navigation* */
class Roots_Nav_Walker extends \Walker_Nav_Menu
{

	function check_current($classes)
	{
		return preg_match('/(current[-_])|active|dropdown/', $classes);
	}

	function start_lvl(&$output, $depth = 0, $args = array())
	{
		$output .= "\n<ul class=\"dropdown-menu\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		$item_html = '';
		parent::start_el($item_html, $item, $depth, $args);

		if ($item->is_dropdown && ($depth === 0))
		{
			//$item_html = str_replace('<a', '<a class="dropdown-toggle" data-toggle="dropdown" data-target="#"', $item_html);
			$item_html = str_replace('<a', '<a', $item_html);
			if ($args->menu->slug != "footer-menu")
				$item_html = str_replace('</a>', '</a>', $item_html);
		}
		elseif (stristr($item_html, 'li class="divider'))
		{
			$item_html = preg_replace('/<a[^>]*>.*?<\/a>/iU', '', $item_html);
		}
		elseif (stristr($item_html, 'li class="dropdown-header'))
		{
			$item_html = preg_replace('/<a[^>]*>(.*)<\/a>/iU', '$1', $item_html);
		}
		elseif ($depth === 0 && $args->menu->slug != "footer-menu")
		{
			$item_html = str_replace('</a>', '</a>', $item_html);
		}

		$item_html = apply_filters('roots_wp_nav_menu_item', $item_html);
		$output .= $item_html;
	}

	function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
	{
		//** Remove Default classes **//
		/*if (in_array('current-menu-item', $element->classes))
			$element->classes = array('active');
		elseif (in_array('menu-item-has-children', $element->classes))
			$element->classes = array('');
		else
			$element->classes = array('');*/
		//** Remove Default classes **//

		$element->is_dropdown = ((!empty($children_elements[$element->ID]) && (($depth + 1) < $max_depth || ($max_depth === 0))));

		if ($element->is_dropdown)
		{
			$element->classes[] = 'dropdown';
		}

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}

}

/**
 * Clean up wp_nav_menu_args
 *
 * Remove the container
 * Use Roots_Nav_Walker() by default
 */
function roots_nav_menu_args($args = '')
{
	$roots_nav_menu_args['container'] = false;

	if (!$args['items_wrap'])
	{
		$roots_nav_menu_args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
	}

	if (current_theme_supports('bootstrap-top-navbar') && !$args['depth'])
	{
		$roots_nav_menu_args['depth'] = 2;
	}

	if (!$args['walker'])
	{
		$roots_nav_menu_args['walker'] = new Roots_Nav_Walker();
	}

	return array_merge($args, $roots_nav_menu_args);
}

add_filter('wp_nav_menu_args', __NAMESPACE__ . '\\roots_nav_menu_args');
/* * Custom Navigation End* */