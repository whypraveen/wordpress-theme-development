<footer>
    <?php if (have_rows('footer', 5)): ?>
    <div class="container-fluid pad0 footertop">
        <img class="img-responsive footer-wave" alt="wave" src="<?php echo get_template_directory_uri(); ?>/assets/images/footerafter.png"/>
        <ul class="list-inline">
            <?php while (have_rows('footer', 5)): the_row(); ?>
                <li><img class="img-responsive" src="<?php the_sub_field('image'); ?>"></li>
            <?php endwhile; ?>
        </ul> 
    </div>
    <?php endif; ?>
    <div class="container-fluid footbottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-11  col-lg-9 margauto">
                    <?php if(have_rows('social', 35)): ?>
                    <div class="col-xs-12 col-sm-3 pad0 text-center">
                        <ul class="list-inline socialicon">
                            <?php while (have_rows('social', 35)): the_row(); ?>
                            <li><a style="background-color: <?php the_sub_field('color'); ?>" href="<?php the_sub_field('link'); ?>" target="_blank"><i class="fa <?php the_sub_field('icon'); ?>" aria-hidden="true"></i></a></li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    
                    <div class="col-xs-12 col-sm-9 copyright">
                        <ul class="list-inline">
                            <li><a href="<?php the_permalink(37); ?>">Sitemap</a></li>
                            <li><a> Copyright Dr. Peter Loisides <?php echo date('Y'); ?>. All Rights Reserved.</a></li>
                            <li><a href="https://techyscouts.com/" target="_blank"><span class="glyphicon glyphicon-heart-empty"></span>// Techyscouts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--enf of footbottom-->
</footer>