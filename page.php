<?php while (have_posts()) : the_post(); ?>
    <?php if (is_page(31)): ?>
    <?php get_template_part('templates/page', 'header'); ?>
    <?php endif; ?>
    <section>
        <div class="container-fluid">
            <div class="container">
                <?php if (is_page(7)): ?>
                    <div class="col-xs-12 text-center practice">
                        <?php get_template_part('templates/content', 'page'); ?>
                    </div>
                <?php else: ?>
                    <div class="col-xs-12">
                        <div class="col-xs-12 ">
                            <?php get_template_part('templates/content', 'page'); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (get_field('meet_our_team') && have_rows('team_member')): ?>
                    <hr style="clear:both;">
                    <div class="col-xs-12 pad0 practice ">
                        <div class="col-xs-12 col-sm-6">
                            <?php the_field('meet_our_team'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6 text-center">
                            <?php $p = 1; ?>
                            <?php while (have_rows('team_member')): the_row(); ?>
                                <div class="col-xs-12 col-sm-6 img-thumb text-center">
                                    <a>
                                        <div class="img-wraper">
                                            <img src="<?php the_sub_field('image'); ?>" class="img-responsive img-circle" alt="<?php the_sub_field('title'); ?>">
                                        </div>
                                        <p class="team-name"><?php the_sub_field('title'); ?></p>
                                        <a href="#" class="btn-xl" data-toggle="modal" data-target="#myModal_<?php echo $p; ?>">VIEW BIO</a>
                                    </a>
                                </div>
                                <?php $p++; ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (have_rows('awards')): ?>    
                    <hr style="clear:both;">
                    <div class="col-xs-12 text-center practice">
                        <h3><?php the_field('heading'); ?></h3>
                        <ul class="list-inline bottom-list">
                            <?php while (have_rows('awards')): the_row(); ?>
                                <li>
                                    <a>
                                        <img class="img-responsive" src="<?php the_sub_field('image'); ?>" alt="<?php bloginfo('name'); ?>">
                                        <p class="brand-name"><small><?php the_sub_field('text'); ?></small></p>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if (have_rows('tab')): ?>
                    <div class="col-xs-12 tab-wraper">
                        <div class="col-xs-12 tab-row">
                            <ul class="nav nav-tabs center">
                                <?php $i = 0; ?>
                                <?php while (have_rows('tab')): the_row(); ?>
                                    <li class="<?php echo ($i == 0) ? ('active') : (''); ?> pad0">
                                        <a data-toggle="tab" href="#tab_<?php echo $i; ?>"><?php the_sub_field('title'); ?></a>
                                    </li>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 tab-content">
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
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php if (have_rows('team_member')): ?>
    <?php $p = 1; ?>
    <?php $cnt = count(get_field('team_member')); ?>
    <?php while (have_rows('team_member')): the_row(); ?>
        <div id="myModal_<?php echo $p; ?>" class="modal in modal-inner" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><!--&times;-->X</button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center thumb">
                            <img src="<?php the_sub_field('image'); ?>" class="img-responsive img-circle" alt="<?php the_sub_field('title'); ?>" >
                            <?php if (have_rows('social')): ?>
                                <ul class="list-inline socialmodal text-center">
                                    <?php while (have_rows('social')): the_row(); ?>
                                        <li><a style="background-color: <?php the_sub_field('color'); ?>" href="<?php the_sub_field('link'); ?>" target="_blank"><i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i></a></li>
                                    <?php endwhile; ?>
                                </ul> 
                            <?php endif; ?>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-left info">
                            <div class="roller">
                                <h3><?php the_sub_field('title'); ?></h3>
                                <?php the_sub_field('bio'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php if ($p != 1): ?>
                            <a class="btn-xl pull-left" data-dismiss="modal" data-toggle="modal" href="#myModal_<?php echo $p - 1; ?>">Prev</a>
                        <?php endif; ?>
                        <?php if ($cnt != $p): ?>
                            <a class="btn-xl pull-right" data-dismiss="modal" data-toggle="modal" href="#myModal_<?php echo $p + 1; ?>">Next</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $p++; ?>
    <?php endwhile; ?>
<?php endif; ?>

