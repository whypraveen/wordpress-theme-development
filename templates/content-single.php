<?php while (have_posts()) : the_post(); ?>
    <?php $cat = get_the_category(); ?>
    <article class="featuredimage">
        <div class="container-fluid pad0">
            <div class="container blog-main">
                <div class="row">
                    <div class="item">
                        <?php if (has_post_thumbnail()): ?>
                        <?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                        <img class="img-responsive" src="<?php echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
                        <?php else: ?>
                        <img class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/images/featured-blog-inner.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="blog-header with-img carousel-caption text-center">
                            <h1><?php the_title(); ?></h1>
                            <p class="byline author vcard"><a href="<?php echo get_category_link($cat[0]->term_id) ?>" class="fn"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo $cat[0]->cat_name; ?></a> <time class="updated"><i class="fa fa-calendar" aria-hidden="true"></i><?= get_the_date(); ?></time></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-12 blog-wraper pad0">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="container-fluid formsec hide">
            <div class="container">
                <div class="col-xs-12 text-center form-wraper">
                    <h3>All Inquiries Welcome</h3>
                    <?php //comments_template('/templates/comments.php'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
