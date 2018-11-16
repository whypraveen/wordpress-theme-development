<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php //get_template_part('templates/page', 'header'); ?>
    <section>
        <div class="container-fluid pad0">
            <div class="container pad0">
                <div class="row text-center">
                    <?php get_template_part('templates/content', 'page'); ?>
                    <?php if (have_rows('slider')): ?>
                        <?php $i = 1; ?>
                        <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php while (have_rows('slider')): the_row(); ?>
                                <div class="item <?php echo ($i == 1) ? ('active') : (''); ?>" style="background-image: url(<?php the_sub_field('image'); ?>)">
                                        <div class="col-xs-12 col-sm-9 text-center margauto">
                                            <h2><?php the_sub_field('heading'); ?></h2>
                                            <?php /*if (get_sub_field('image')): ?>
                                                <img alt="<?php the_sub_field('heading'); ?>" class="img-responsive brand-img" src="<?php the_sub_field('image'); ?>"/>
                                            <?php endif;*/ ?>
                                            <?php if (get_sub_field('content')): ?>    
                                                <?php the_sub_field('content'); ?>    
                                            <?php endif; ?>
                                            <?php if (get_sub_field('button_text')): ?>    
                                            <a class="btn-xl" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('button_text'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php $i++; ?>
                                <?php endwhile; ?>

                                <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                                    <span >Prev</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                                    <span>Next</span>
                                </a>
                                <!--Indicators-->
                                <ol class="carousel-indicators">
                                    <?php $i = 0; ?>
                                    <?php while (have_rows('slider')): the_row(); ?>
                                        <li data-target="#myCarousel3" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i == 0) ? ('active') : (''); ?>"></li>
                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </ol>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
