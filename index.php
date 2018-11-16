<article class="featuredimage">
    <div class="container-fluid pad0">
        <div class="container blog-main">
	    <div class="row">
		<div class="item">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-feature.jpg" alt="">
		    <div class="carousel-caption text-center">
			<h1>STAY UPDATED</h1>
		    </div>
		</div>
	    </div>
        </div>
    </div>
</article>


<section>
    <div class="container-fluid">
        <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
                <?php _e('Sorry, no results were found.', 'sage'); ?>
            </div>
            <?php get_search_form(); ?>
        <?php endif; ?>
        <div class="container">
            <?php $i = 1; ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $cat = get_the_category(); ?>
                <?php if ($i % 2 != 0): ?>
                    <div class="col-xs-12 blog-wraper pad0">
                        <div class="col-xs-12 blog-header text-center">
                            <a href="<?php the_permalink(); ?>" class="blog-title"><h2><?php the_title(); ?></h2></a>
                            <p class="byline author vcard"><a href="<?php echo get_category_link($cat[0]->term_id) ?>" class="fn"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo $cat[0]->cat_name; ?></a> <time class="updated"><i class="fa fa-calendar" aria-hidden="true"></i><?= get_the_date(); ?></time></p>
                            <?php the_excerpt(); ?>
                            <a class="btn-xl" href="<?php the_permalink(); ?>">READ MORE</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-xs-12 blog-wraper">
                        <div class="bgopacity">
                            <?php if (get_field('image')): ?>
                                <img class="img-responsive" src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
                            <?php else: ?>
                                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-post1.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="blog-header with-img carousel-caption text-center">
                            <a href="<?php the_permalink(); ?>" class="blog-title"><h2><?php the_title(); ?></h2></a>
                            <p class="byline author vcard"><a href="<?php echo get_category_link($cat[0]->term_id) ?>" class="fn"><i class="fa fa-folder-open" aria-hidden="true"></i><?php echo $cat[0]->cat_name; ?></a> <time class="updated"><i class="fa fa-calendar" aria-hidden="true"></i><?= get_the_date(); ?></time></p>
                            <?php the_excerpt(); ?>
                            <a class="btn-xl" href="<?php the_permalink(); ?>">READ MORE</a>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>

            <div class="col-xs-12 pad0">
                <?php
                $links = paginate_links(array(
                    'prev_text' => __('Prev'),
                    'next_text' => __('Next'),
                    'type' => 'array',
                    'end_size' => 3,
                    'mid_size' => 3));
                ?>
                <?php if ($links): ?>
                    <ul class="pagination">
                        <?php foreach ($links as $link): ?>
                            <li><?php echo $link; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>