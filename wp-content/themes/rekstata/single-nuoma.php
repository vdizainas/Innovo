<?php get_header();
 ?>
<?php while ( have_posts() ) : the_post(); $pageId = get_the_ID(); ?>

<div class="page-title-wrap single-work-title-wrap" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'main-slide-img'); ?>') no-repeat;">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="single-work-page-title-text">
            <?php the_title(); ?>
        </div>
    </div>
</div>

<section class="single-rent-item-section">
    <div class="container">
        <div class="single-rent-title-text">
            <?php _e('Kalendorius', 'theme'); ?>
            <span><?php _e('Kalendorius', 'theme'); ?></span>
        </div>
        <div class="single-rent-content">
            <div class="single-rent-calendar"></div>
            <div class="single-rent-right">
                <div class="single-rent-product">
                    <div class="single-rent-product-top">
                        <div class="single-rent-product-title"><?php _e('PRODUKTAS', 'theme'); ?></div>
                        <div class="single-rent-product-top-item"><?php _e('DIENA', 'theme'); ?></div>
                        <div class="single-rent-product-top-item"><?php _e('SAVAITĖ', 'theme'); ?></div>
                        <div class="single-rent-product-top-item"><?php _e('MĖNESIS', 'theme'); ?></div>
                    </div>
                    <div class="single-rent-product-details">
                        <div class="single-rent-product-details-title"><?php the_field('produkto_kp'); ?></div>
                        <div class="single-rent-product-details-item"><?php the_field('dienos_kaina'); echo '€'; ?></div>
                        <div class="single-rent-product-details-item"><?php the_field('savaites_kaina'); echo '€'; ?></div>
                        <div class="single-rent-product-details-item"><?php the_field('menesio_kaina'); echo '€'; ?></div>
                    </div>
                </div>
                <div class="single-rent-delivery">
                    <div class="single-rent-title"><?php _e('PRISTATYMAS', 'theme'); ?></div>
                    <div class="single-rent-delivery-text"><?php the_field('pristatymas'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>