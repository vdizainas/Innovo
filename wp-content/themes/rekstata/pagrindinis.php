<?php 
/* Template Name: Pagrindinis */
get_header(); ?>

<section class="hmpg-section-one" style="background: url(<?php echo get_correct_image_link_thumb(get_field('pagrindine_nuotrauka'), 'main-slide-img'); ?>) no-repeat;">
    <div class="hmpg-section-one-over"></div>
    <div class="container">
        <div class="hmpg-section-one-content">
            <div class="hmpg-section-one-title-shadow"><?php _e('Rekreacinė', 'theme'); ?>
                <h1 class="hmpg-section-one-title">
                    <?php _e('Rekreacinė statyba', 'theme'); ?>
                </h1>
            </div>
            <div class="hmpg-section-one-after-title"><?php _e('Statome žmogui. Miestui. Valstybei.', 'theme'); ?></div>
            <div class="hmpg-section-one-btn"><a href="#"><?php _e('Plačiau', 'theme'); ?></a></div>
        </div>
    </div>
</section>

<section class="hmpg-services-section">
    <div class="container">
        <div class="hmpg-services-title">
            <?php _e('Paslaugos', 'theme'); ?>
            <span><?php _e('Paslaugos', 'theme'); ?></span>
        </div>
        <div class="hmpg-services-content">
            <div class="services-item" style="background: url('<?php echo get_the_post_thumbnail_url(9, 'large'); ?>') no-repeat;">
                <a href="<?php echo get_permalink('9'); ?>">
                    <div class="services-item-over"></div>
                    <?php /*
                    <div class="services-item-text"><?php _e('explore the future', 'theme'); ?></div>
                    */ ?>
                    <div class="services-item-title"><?php _e('Nuoma', 'theme'); ?></div>
                    <div class="services-item-btn"><i class="fas fa-plus">cvxcvxc</i></div>
                </a>
            </div>
            <?php $args = array( "post_type" => "paslaugos", 'order' => 'DESC', "posts_per_page" => 5 );
            $post_query = new WP_Query($args);
            if($post_query->have_posts() ) : while($post_query->have_posts() ) : $post_query->the_post();?>
                <div class="services-item" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>') no-repeat;">
                    <a href="<?php the_permalink(); ?>">
                        <div class="services-item-over"></div>
                        <?php /*
                        <div class="services-item-text"><?php _e('explore the future', 'theme'); ?></div>
                        */ ?>
                        <div class="services-item-title"><?php the_title(); ?></div>
                        <div class="services-item-btn"><i class="fas fa-plus">zxczxczx</i></div>
                    </a>
                </div>
            <?php endwhile; ?>
            <?php endif; 
            wp_reset_postdata(); ?>
        </div>
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

<?php get_footer(); ?>