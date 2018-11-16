<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// ** Add Logo to upload using Customizer ** //
function themeslug_theme_customizer( $wp_customize ) {
  $wp_customize->add_section( 'theme_logo_section' , array(
    'title'       => __( 'Logo', 'themelogo' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
  ));

  $wp_customize->add_setting( 'theme_logo' );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo', array(
    'label'    => __( 'Logo', 'themelogo' ),
    'section'  => 'theme_logo_section',
    'settings' => 'theme_logo',
  )));
}
add_action( 'customize_register', 'themeslug_theme_customizer' );
// ** Add Logo to upload using Customizer ** //

//** WP Admin Style **//
function my_login_logo()
{
     ?>
     <style type="text/css">
     .login:before { background: url(http://wordpress.ysupport.net/drloisides/wp-content/themes/peter-loisides/assets/images/headerbottom.png) no-repeat center top transparent !important;
    position: absolute;
    content: "";
    top: -16px;
    height: 143px;
    width: 100%;}
     .login:after{ background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footerafter.png) no-repeat center top transparent !important;position:absolute;content:"";bottom:-10px;height:133px;width:100%;}
	.login form { background: rgba(224, 26, 34, 0.9) !important; box-shadow: 0 3px 12px rgba(0, 0, 0, 0.72) !important;position: relative;z-index: 99999; }
	.login #backtoblog a, .login #nav a { color: #fff !important; }
     .login h1{ background-color: #fff; display:none; }
	.login label { color: #D6D6D6 !important; }
	#login{    padding: 10% 0 0 !important;}
	.login #login_error, .login .message {border-left: 4px solid #e01a22 !important;}
        #loginform:before {
               background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logoicon.png) no-repeat center top transparent !important;
               height: 100px !important;
               background-color: transparent;
	       content: " ";
		display: block;
		border-bottom: 2px dashed #D6D6D6;
		margin-bottom: 15px;
		padding-bottom: 20px;
         }
	 #loginform .submit .button-primary {
		border: 0px !important;
		box-shadow: none !important;
		text-shadow: none !important;
		height: initial;

		background: #faae43 !important;
		background-image: -webkit-linear-gradient(top, #faae43, #e68600) !important;
		background-image: -moz-linear-gradient(top, #faae43, #e68600) !important;
		background-image: -ms-linear-gradient(top, #faae43, #e68600) !important;
		background-image: -o-linear-gradient(top, #faae43, #e68600) !important;
		background-image: linear-gradient(to bottom, #faae43, #e68600) !important;
		-webkit-border-radius: 5 !important;
		-moz-border-radius: 5 !important;
		border-radius: 5px !important;
		font-family: Arial !important;
		color: #ffffff !important;
		font-size: 20px !important;
  		padding: 5px 20px 5px 20px !important;
  		text-decoration: none !important;
	}
	#loginform .submit .button-primary:hover {
		background: #e68600 !important;
  background-image: -webkit-linear-gradient(top, #e68600, #faae43) !important;
  background-image: -moz-linear-gradient(top, #e68600, #faae43) !important;
  background-image: -ms-linear-gradient(top, #e68600, #faae43) !important;
  background-image: -o-linear-gradient(top, #e68600, #faae43) !important;
  background-image: linear-gradient(to bottom, #e68600, #faae43) !important;
  text-decoration: none !important;
	}
         body {
             background-color: #F9C475 !important;
             background: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-3.jpg) center center transparent !important;
	     background-size: cover !important;
         }
        
     </style>
     <?php
}
add_action('login_enqueue_scripts', 'my_login_logo');
//** WP Admin Style **//

function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);
show_admin_bar(FALSE);


/* * Allow HTML tags in the_excerpt() * */
function wpse_allowedtags()
{
    // Add custom tags to this string
    return '<script>,<style>,<br>,<em>,<i>,<ul>,<ol>,<li>,<video>,<audio>,<h1>,<h2><h3>,<h4>,<p>';
}


if (!function_exists('wpse_custom_wp_trim_excerpt')) :

    function wpse_custom_wp_trim_excerpt($wpse_excerpt) {
        global $post;
        $raw_excerpt = $wpse_excerpt;
        if ('' == $wpse_excerpt) {

            $wpse_excerpt = get_the_content('');
            $wpse_excerpt = strip_shortcodes($wpse_excerpt);
            $wpse_excerpt = apply_filters('the_content', $wpse_excerpt);
            $wpse_excerpt = str_replace(']]>', ']]>', $wpse_excerpt);
            $wpse_excerpt = strip_tags($wpse_excerpt, wpse_allowedtags()); /* IF you need to allow just certain tags. Delete if all tags are allowed */

            //Set the excerpt word count and only break after sentence is complete.
            $excerpt_word_count = 50;
            $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count);
            $tokens = array();
            $excerptOutput = '';
            $count = 0;

            // Divide the string into tokens; HTML tags, or words, followed by any whitespace
            preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $wpse_excerpt, $tokens);

            foreach ($tokens[0] as $token) {

                if ($count >= $excerpt_word_count && preg_match('/[\,\;\?\.\!]\s*$/uS', $token)) {
                    // Limit reached, continue until , ; ? . or ! occur at the end
                    $excerptOutput .= trim($token);
                    break;
                }

                // Add words to complete sentence
                $count++;

                // Append what's left of the token
                $excerptOutput .= $token;
            }

            $wpse_excerpt = trim(force_balance_tags($excerptOutput));

            $excerpt_end = ' <a href="' . esc_url(get_permalink()) . '">' . '&nbsp;&raquo;&nbsp;' . sprintf(__('Read more about: %s &nbsp;&raquo;', 'wpse'), get_the_title()) . '</a>';
            $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);

            //$pos = strrpos($wpse_excerpt, '</');
            //if ($pos !== false)
            // Inside last HTML tag
            //$wpse_excerpt = substr_replace($wpse_excerpt, $excerpt_end, $pos, 0); /* Add read more next to last word */
            //else
            // After the content
            //$wpse_excerpt .= $excerpt_end; /*Add read more in new paragraph */

            return $wpse_excerpt;
        }
        return apply_filters('wpse_custom_wp_trim_excerpt', $wpse_excerpt, $raw_excerpt);
    }

endif;

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'wpse_custom_wp_trim_excerpt');