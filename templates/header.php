<header>
    <div class="container-fluid pad0 headbg">
                <?php if (get_theme_mod('theme_logo')) : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><img alt="<?php bloginfo('name'); ?>" class="img-responsive site-logo" src="<?php echo esc_url(get_theme_mod('theme_logo')); ?>"/></a>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img alt="<?php bloginfo('name'); ?>" class="img-responsive site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"/></a>
                <?php endif; ?>
                    <img class="img-responsive" alt="wave" src="<?php echo get_template_directory_uri(); ?>/assets/images/headerbottom.png"/>
    </div>
    <div class="container-fluid pad0  navigation">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                </div>
                <div class="container">
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <?php
                        if (has_nav_menu('primary_navigation')) :
                            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
                        endif;
                        ?>
                        <ul class="nav navbar-nav navbar-right social">
                            <li><a href="tel:310.829.0039"><span class="fa fa-phone"></span> 310.829.0039</a></li>
                            <li class="pad0"><a href="<?php the_permalink(305); ?>" class="btn-xl">PATIENT FORMS </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>