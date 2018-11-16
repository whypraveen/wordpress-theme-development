<?php

use Roots\Sage\Titles; ?>

<article class="featuredimage">
    <div class="container-fluid pad0">
        <div class="container blog-main">
            <div class="row">
                <div class="item">
                    <?php if (has_post_thumbnail()): ?>
                        <?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
                        <img class="img-responsive" src="<?php echo $large_image_url[0]; ?>" alt="<?= Titles\title(); ?>">
                    <?php else: ?>
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-feature.jpg" alt="<?= Titles\title(); ?>">
                    <?php endif; ?>
                        <div class="carousel-caption <?php echo (is_page(31))?(''):('text-center'); ?>">
                        <?php if (is_page(31)): ?>
                            <div class="col-xs-12 col-sm-6 text-left pad0">
                                <h2><?= Titles\title(); ?></h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right pad0">
                                <a class="btn-xl btn-amazon" href="#">BUY NOW AT <img alt="amozon-logo" class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/amazon.png"></a>
                            </div>
                        <?php else: ?>
                            <h2><?= Titles\title(); ?></h2>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>