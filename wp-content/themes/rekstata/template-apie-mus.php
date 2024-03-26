<?php 
/* Template Name: Apie mus */
get_header(); ?>

<div class="page-title-wrap" style="background: url(<?php echo get_correct_image_link_thumb(get_field('virsutine_foto'), 'main-slide-img'); ?>) no-repeat;">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="page-title-text">
            <?php the_title(); ?>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<?php /*
<section class="about-us-one">
    <div class="container">
        <div class="about-us-one-sm"><?php _e('GERIAUSIAI APIE MUS KALBA KLIENTAI', 'theme'); ?></div>
        <div class="about-us-one-title">
            <?php _e('Klientai apie mus', 'theme'); ?>
            <span><?php _e('Klientai apie mus', 'theme'); ?></span>
        </div>
        <div class="about-us-one-slide">
            <?php if( have_rows('klientu_atsiliepimai') ):
            while ( have_rows('klientu_atsiliepimai') ) : the_row(); ?>
                <div class="about-us-one-slide-item">
                    <div class="about-us-slide-item-pos"><?php the_sub_field('kliento_pozicija'); ?></div>
                    <div class="about-us-slide-item-name"><?php the_sub_field('kliento_vardas'); ?></div>
                    <div class="about-us-slide-item-text"><?php the_sub_field('kliento_atsiliepimas'); ?></div>
                </div>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="about-us-one-btn"><a href="<?php the_field('klientu_atsiliepimai_nuoroda'); ?>" target="_blank"><?php _e('ATSILIEPIMAI', 'theme'); ?></a></div>
    </div>
</section>
*/ ?>

<section class="about-us-two">
    <div class="container">
        <div class="about-us-two-title"><?php _e('Istorija apie įmonę', 'theme'); ?></div>
        <div class="about-us-two-text"><?php the_field('istorija_apie_imone_tekstas'); ?></div>
    </div>
</section>

<section class="hmpg-advantages-section">
    <div class="container">
        <div class="hmpg-advantages-content">
            <div class="advantages-item">
                <div class="advantages-title-bg">
                    <?php /*
                    <div class="advantages-bg-text"><?php _e('explore the future', 'theme'); ?></div>
                    */ ?>
                    <div class="advantages-bg-title"><?php _e('Mūsų privalumai šiandien', 'theme'); ?></div>
                </div>
            </div>
            <div class="advantages-item">
                <div class="advantages-item-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Group-83.svg" alt="logo"></div>
                <div class="advantages-item-small-text"><?php the_field('privalumas_pirmas_trumpas_tekstas', 'options'); ?></div>
                <div class="advantages-item-about"><?php the_field('privalumas_pirmas_pagrindinis_tekstas', 'options'); ?></div>
            </div>
            <div class="advantages-item">
                <div class="advantages-item-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Group-83.svg" alt="logo"></div>
                <div class="advantages-item-small-text"><?php the_field('privalumas_antras_trumpas_tekstas', 'options'); ?></div>
                <div class="advantages-item-about"><?php the_field('privalumas_antras_pagrindinis_tekstas', 'options'); ?></div>
            </div>
            <div class="advantages-item">
                <div class="advantages-item-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Group-83.svg" alt="logo"></div>
                <div class="advantages-item-small-text"><?php the_field('privalumas_trecias_trumpas_tekstas', 'options'); ?></div>
                <div class="advantages-item-about"><?php the_field('privalumas_trecias_pagrindinis_tekstas', 'options'); ?></div>
            </div>
            <div class="advantages-item">
                <div class="advantages-item-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Group-83.svg" alt="logo"></div>
                <div class="advantages-item-small-text"><?php the_field('privalumas_ketvirtas_trumpas_tekstas', 'options'); ?></div>
                <div class="advantages-item-about"><?php the_field('privalumas_ketvirtas_pagrindinis_tekstas', 'options'); ?></div>
            </div>
            <div class="advantages-item">
                <div class="advantages-item-logo"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Group-83.svg" alt="logo"></div>
                <div class="advantages-item-small-text"><?php the_field('privalumas_penktas_trumpas_tekstas', 'options'); ?></div>
                <div class="advantages-item-about"><?php the_field('privalumas_penktas_pagrindinis_tekstas', 'options'); ?></div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-three">
    <div class="container">
        <div class="about-us-three-title"><?php _e('Sertifikatai ir užsakovų pažymos', 'theme'); ?></div>
        <?php $images = get_field('sertifikatai_ir_uzsakovu_pazymos');
        if( $images ): ?>
            <ul class="about-us-three-content">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo esc_url($image['url']); ?>" class="fancybox" rel="gallery">
                            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="gallery" />
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>