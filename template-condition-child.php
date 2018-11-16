<?php
/**
 * Template Name: Conditions-Child
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <section>
        <div class="container-fluid">
            <div class=" container">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pad0 hidden-xs">
                    <aside>
                        <h3>Conditions</h3>
                        <?php
                        $args = array(
                            'sort_order' => 'asc',
                            'sort_column' => 'menu_order',
                            'child_of' => 9,
                            'post_type' => 'page',
                            'post_status' => 'publish'
                        );
                        $pagess = get_pages($args);
                        ?>
                        <ul class="list-unstyled ">
                            <?php foreach ($pagess as $pag): ?>
                                <li class="<?php echo ($post->ID == $pag->ID) ? ('active') : (''); ?>">
                                    <a href="<?php echo get_page_link($pag->ID); ?>"><span><?php echo $pag->post_title; ?></span></a>
                                </li>
                            <?php endforeach; ?>

                        </ul> 
                    </aside>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 condition">
                    <section>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <?php get_template_part('templates/content', 'page'); ?>
                        </div>
                        <?php if (have_rows('tab')): ?>
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
                                        <?php if (get_sub_field('content')): ?>
                                            <?php the_sub_field('content'); ?>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('option') == 'youtube' && get_sub_field('youtube')): ?>
                                            <div class="embed-responsive embed-responsive-4by3" id="thevideo">
                                                <iframe src="https://www.youtube.com/embed/<?php the_sub_field('youtube'); ?>?rel=0" frameborder="0" allowfullscreen=""></iframe>
                                            </div>
                                        <?php endif; ?> 
                                        <?php if (get_sub_field('option') == 'collapsible' && have_rows('collapsible')): ?>
                                            <?php $n = 0; ?>
                                            <div class="panel-group" id="accordion">
                                                <?php while (have_rows('collapsible')): the_row(); ?>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <a class="accordion-toggle <?php echo ($n == 0) ? ('') : ('collapsed'); ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>_<?php echo $n; ?>">
                                                                <h3 class="panel-title"><?php the_sub_field('title'); ?></h3>
                                                            </a>
                                                        </div>
                                                        <div id="collapse_<?php echo $i; ?>_<?php echo $n; ?>" class="panel-collapse collapse <?php echo ($n == 0) ? ('in') : (''); ?>"  aria-expanded="true">
                                                            <div class="panel-body">
                                                                <?php the_sub_field('description'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php $n++; ?>
                                                <?php endwhile; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('option') == 'slider' && have_rows('slider')): ?>
                                            <?php $j = 0; ?>
                                            <div id="carousel-example-generic_<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <?php while (have_rows('slider')): the_row(); ?>
                                                        <li data-target="#carousel-example-generic_<?php echo $i; ?>" data-slide-to="<?php echo $j; ?>" class="<?php echo ($j == 0) ? ('active') : (''); ?>"></li>
                                                        <?php $j++; ?>
                                                    <?php endwhile; ?>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <?php $j = 0; ?>
                                                    <?php while (have_rows('slider')): the_row(); ?>
                                                        <div class="item <?php echo ($j == 0) ? ('active') : (''); ?>">
                                                            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('caption'); ?>">
                                                            <div class="carousel-caption">
                                                                <h2><?php the_sub_field('caption'); ?></h2>
                                                            </div>
                                                        </div>
                                                        <?php $j++; ?>
                                                    <?php endwhile; ?>
                                                </div>

                                                <!-- Controls -->
                                                <a class="left carousel-control" href="#carousel-example-generic_<?php echo $i; ?>" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#carousel-example-generic_<?php echo $i; ?>" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </section>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pad0 hidden-sm hidden-md hidden-lg">
                    <aside>
                        <h3>Conditions</h3>
                        <?php
                        $args = array(
                            'sort_order' => 'asc',
                            'sort_column' => 'menu_order',
                            'child_of' => 9,
                            'post_type' => 'page',
                            'post_status' => 'publish'
                        );
                        $pagess = get_pages($args);
                        ?>
                        <ul class="list-unstyled ">
                            <?php foreach ($pagess as $pag): ?>
                                <li class="<?php echo ($post->ID == $pag->ID) ? ('active') : (''); ?>">
                                    <a href="<?php echo get_page_link($pag->ID); ?>"><span><?php echo $pag->post_title; ?></span></a>
                                </li>
                            <?php endforeach; ?>

                        </ul> 
                    </aside>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
