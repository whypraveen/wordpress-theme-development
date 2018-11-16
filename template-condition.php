<?php
/**
 * Template Name: Conditions
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <article class="featuredimage">
        <div class="container-fluid footbottom">
            <div class="container pad0 condition">
                <div class="row">
                    <div class="item text-center">
                        <?php get_template_part('templates/content', 'page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-12 text-center img-hover pad0">
                    <?php
                    $args = array(
                        'sort_order' => 'asc',
                        'sort_column' => 'menu_order',
                        'child_of' => 9,
                        'post_type' => 'page',
                        'post_status' => 'publish'
                    );
                    $pages = get_pages($args);
                    ?>
                    <?php foreach ($pages as $page): ?>
                        <?php if (get_field('parent', $page->ID)): ?>
                            <div class="col-xs-12 col-sm-4 img-thumb text-center">
                                <a>
                                    <div class="img-wraper">
                                        <img src="<?php the_field('teaser_image', $page->ID); ?>" class="img-responsive" alt="<?php echo $page->post_title; ?>">
                                        <div class="carousel-caption">
                                            <p><?php echo $page->post_title; ?></p>
                                            <a href="<?php echo get_page_link($page->ID); ?>" class="btn-xl">VIEW</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
