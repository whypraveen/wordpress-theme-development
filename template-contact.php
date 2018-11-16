<?php

/**
 * Template Name: Contact
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>
    
    <section>
        <div class="container-fluid">
            <div class="container">
                <div class="col-xs-12 pad0 info">
                    <?php get_template_part('templates/content', 'page');  ?>
                    <?php if (have_rows('contact_details')): ?>
                    <div class="col-xs-12 col-sm-6 contact-info">
                        <div class="info-wraper">
                            <h3 class="text-center">Contact Information</h3>
                            <ul class="list-unstyled">
                                <?php while (have_rows('contact_details')): the_row(); ?>
                                <li>
                                    <i class=" col-xs-2 col-sm-2 col-md-2 col-lg-2 fa <?php the_sub_field('icon'); ?> pad0 text-center"></i>
                                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 pad0">
                                        <a <?php echo (get_sub_field('icon') == 'fa-phone')?('href="tel:'.get_sub_field(text).'"'):((get_sub_field('icon') == 'fa-envelope')?('href="mailto:'.get_sub_field('text').'"'):('')); ?>><?php the_sub_field('text'); ?></a>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>  
                    </div>
                    <div class="col-xs-12 col-sm-6 map">
                        <div id="googleMap"><?php echo do_shortcode('[put_wpgm id=1]'); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container-fluid formsec">
            <div class="container">
                <div class="col-xs-12 text-center form-wraper">
                    <h3>All Inquiries Welcome</h3>
                    <?php echo do_shortcode('[contact-form-7 id="57" title="Contact form 1" html_class="form-inline"]'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
