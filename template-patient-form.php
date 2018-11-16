<?php
/**
 * Template Name: Patient Form
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php //get_template_part('templates/page', 'header'); ?>

    <section>
        <div class="container-fluid pad0 patient-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?php get_template_part('templates/content', 'page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; ?>
