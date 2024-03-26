<?php 
/* Template Name: Kontaktai */
get_header(); ?>

<div class="single-service-page-title-wrap">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="page-title-text">
            <?php the_title(); ?>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<section class="contacts-section">
    <div class="container">
        <div class="contacts-content">
            <div class="contacts-map"><div id="contacts-map-wrap"></div></div>
            <div class="contacts-right">
                <div class="contacts-top">
                    <div class="contacts-top-item">
                        <div class="contacts-top-item-title"><?php _e('kontaktai', 'theme'); ?></div>
                        <div class="contacts-top-item-details"><?php the_field('kontaktai_detales'); ?></div>
                    </div>
                    <div class="contacts-top-item">
                        <div class="contacts-top-item-title"><?php _e('rekvizitai', 'theme'); ?></div>
                        <div class="contacts-top-item-details"><?php the_field('rekvizitai_detales'); ?></div>
                    </div>
                </div>
                <div class="contacts-form-title"><?php _e('Kontaktų forma', 'theme'); ?></div>
                <div class="contacts-form-wrap">
                    <?php echo do_shortcode('[contact-form-7 id="97" title="Kontaktai forma"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>