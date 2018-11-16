<?php

/**
 * Template Name: SiteMap
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <section>
        <div class="container-fluid sitemap innerpages greenbg">
            <div class="container pad0">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad0 site">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad0 services margauto">
                        <ul class="list-inline homemap">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        </ul>
                        <div class="col-xs-10 col-sm-12 col-md-12 col-lg-12 bordertop"></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad0">
                            <ul class="list-inline ">
                                <li><a href="<?php the_permalink(7); ?>">About</a></li>
                                <li><a href="<?php the_permalink(305); ?>">New Patient</a></li>
                                <li><a href="<?php the_permalink(9); ?>">Conditions</a>
                                    <ul class="track one">
                                        <li><a href="<?php the_permalink(11); ?>">Prostatitis</a></li>
                                        <li><a href="<?php the_permalink(13); ?>">Benign Prostatic Hyperplasia</a></li>
                                        <li><a href="<?php the_permalink(15); ?>">Testosterone Deficiency (Hypogonadism)</a></li>
                                        <li><a href="<?php the_permalink(17); ?>"> Urinary Incontinence</a></li>
                                        <li><a href="<?php the_permalink(19); ?>">Cancer</a></li>
                                        <li><a href="<?php the_permalink(21); ?>">Hydrocele</a></li>
                                        <li><a href="<?php the_permalink(23); ?>">Spermatocele</a></li>
                                        <li><a href="<?php the_permalink(25); ?>">Kidney Stones</a></li>
                                        <li><a href="<?php the_permalink(27); ?>">Varicocele</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php the_permalink(29); ?>">Procedures</a></li>
                                <li><a href="<?php the_permalink(33); ?>">Blog</a></li>
                                <li><a href="<?php the_permalink(35); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
