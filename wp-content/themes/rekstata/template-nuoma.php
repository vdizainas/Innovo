<?php 
/* Template Name: Nuoma */
get_header(); ?>

<div class="page-title-wrap" style="background: url(<?php echo get_correct_image_link_thumb(get_field('virsutine_nuotrauka'), 'main-slide-img'); ?>) no-repeat;">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="page-title-text">
            <?php the_title(); ?>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<section class="rent-section">
    <div class="container">
        <div class="rent-content">
            <?php $args = array( "post_type" => "nuoma", "posts_per_page" => -1 );
            $post_query = new WP_Query($args);
            if($post_query->have_posts() ) : while($post_query->have_posts() ) : $post_query->the_post(); ?>
                <div class="rent-item">
                    <div class="rent-item-img" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'main-slide-img'); ?>') no-repeat;"></div>
                    <div class="rent-item-right">
                        <div class="rent-item-right-text">
                            <div class="rent-item-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <?php /*
                            <div class="rent-item-about"><?php echo wp_trim_words( get_the_content(), 20 ); ?></div>
                            */ ?>
                            <div class="rent-item-btn">
                                <a href="<?php the_permalink(); ?>"><?php _e('Kalendorius', 'theme'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; 
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>