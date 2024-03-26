<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); $currentID = get_the_ID(); ?>

<div class="page-title-wrap" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'main-slide-img'); ?>') no-repeat;">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="single-serv-page-title-text">
            <?php echo wp_trim_words( get_the_title(), 1 ); ?>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<section class="single-services-section">
    <div class="container">
        <div class="single-serv-title"><?php the_title(); ?></div>
        <div class="single-serv-content"><?php the_content(); ?></div>
        <?php if( have_rows('paslaugos_savybes') ): ?>
        <div class="single-serv-features">
        <?php while ( have_rows('paslaugos_savybes') ) : the_row(); ?>
            <div class="single-serv-feat-item">
                <div class="single-serv-feat-item-logo">
                    <img src="<?php $image = wp_get_attachment_image_src( get_sub_field('paslaugos_savybes_ikona'), 'medium' ); echo $image[0]; ?>" alt="logo">
                </div>
                <div class="single-serv-feat-item-text"><?php the_sub_field('paslaugos_savybes_tekstas'); ?></div>
            </div>
        <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php $images = get_field('galerija_pas'); ?>
        <?php if( $images ): ?>
            <div class="sing-serv-gal">
                <ul class="sing-serv-gal-ul">
                    <?php foreach( $images as $image ): ?>
                        <li>
                            <a href="<?php echo esc_url($image['url']); ?>" class="fancybox" rel="gallery">
                                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="gallery" />
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>
