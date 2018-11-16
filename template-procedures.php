<?php
/**
 * Template Name: Procedures
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-12 text-center img-hover pad0">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <?php get_template_part('templates/content', 'page'); ?>
                    </div>
                    <?php if (have_rows('procedure')): ?>
                        <?php $m = 1; ?>
                        <?php $cnt = count(get_field('procedure')); ?>
                        <?php while (have_rows('procedure')): the_row(); ?>
                            <div class="col-xs-12 col-sm-4 img-thumb text-center <?php echo ($cnt == 10 && $cnt == $m) ? ('div-center') : (''); ?>">
                                <a>
                                    <div class="img-wraper">
                                        <img src="<?php the_sub_field('teaser_image'); ?>" class="img-responsive" alt="<?php the_sub_field('title'); ?>" />
                                        <div class="carousel-caption">
                                            <p><?php the_sub_field('title'); ?></p>
                                            <a href="#" class="btn-xl" data-toggle="modal" data-target="#modal_<?php echo $m; ?>">READ MORE</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php $m++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php if (have_rows('procedure')): ?>
    <?php $p = 1; ?>
    <?php $cnt = count(get_field('procedure')); ?>
    <?php while (have_rows('procedure')): the_row(); ?>
        <div id="modal_<?php echo $p; ?>" class="modal in modal-inner proce" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" <?php echo (get_sub_field('header_image')) ? ('style="background-image: url(' . get_sub_field('header_image') . ');min-height: 233px;background-size: cover;background-repeat: no-repeat;background-position: top center;"') : (''); ?>>
                        <button type="button" class="close" data-dismiss="modal"><!--&times;-->X</button>
                    </div>
                    <div class="modal-body">
                        <?php if (get_sub_field('options') == 'tab'): ?>
                            <?php //if (have_rows('tab')): ?>
                            <?php $i = 0; ?>
                            <ul class="nav nav-tabs nav-justified">
                                <?php while (have_rows('tab')): the_row(); ?>
                                    <li class="<?php echo ($i == 0) ? ('active') : (''); ?> pad0">
                                        <a data-toggle="tab" href="#tab_<?php echo $i; ?>"><?php the_sub_field('title'); ?></a>
                                    </li>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </ul>
                            <div class="tab-content">
                                <?php $i = 0; ?>
                                <?php while (have_rows('tab')): the_row(); ?>
                                    <div id="tab_<?php echo $i; ?>" class="tab-pane fade <?php echo ($i == 0) ? ('in active') : (''); ?>">
                                        <?php if (get_sub_field('heading')): ?>
                                            <h4><?php the_sub_field('heading'); ?></h4>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('2_column')): ?>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 info">
                                                <div class="roller">
                                                    <?php the_sub_field('description'); ?>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 text-center info" style="margin-top:90px;">
                                                <div class="roller">
                                                    <?php the_sub_field('description_ii'); ?>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info">
                                                <div class="roller">
                                                    <?php if (get_sub_field('description')): ?>
                                                        <?php the_sub_field('description'); ?>
                                                    <?php endif; ?>
                                                </div>    
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php elseif (get_sub_field('options') == 'youtube'): ?>
                            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                                <div class="embed-responsive embed-responsive-4by3" id="thevideo">
                                    <iframe src="<?php the_sub_field('youtube_embed_url'); ?>?rel=0" frameborder="0" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 info">
                                <div class="roller">
                                    <h4><?php the_sub_field('title'); ?></h4>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info">
                                <div class="roller">
                                    <h4 class="text-center"><?php the_sub_field('title'); ?></h4>
                                    <?php the_sub_field('content'); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="modal-footer">
                        <?php if ($p != 1): ?>
                            <a class="btn-xl pull-left" data-dismiss="modal" data-toggle="modal" href="#modal_<?php echo $p - 1; ?>">Prev</a>
                        <?php endif; ?>
                        <?php if ($cnt != $p): ?>
                            <a class="btn-xl pull-right" data-dismiss="modal" data-toggle="modal" href="#modal_<?php echo $p + 1; ?>">Next</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $p++; ?>
    <?php endwhile; ?>
<?php endif; ?>