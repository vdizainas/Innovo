<?php 
/* Template Name: Atlikti darbai */
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
<div class="our-work-filter">
    <div class="container">
        <ul class="our-work-filter-list">
            <li class="our-work-filter-all"><?php _e('Visi', 'theme'); ?></li>
            <?php $terms = get_terms( 'kategorija', 'orderby=count&hide_empty=1' );
            foreach ( $terms as $term ) {
                $term_link = get_term_link( $term );
                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
            } ?>
        </ul>
    </div>
</div>
*/ ?>

<div class="our-work-content">
    <div class="container">
        <div class="our-work-content-wrap">
            <?php $terms = get_terms( 'kategorija', 'orderby=count&hide_empty=1' );
            if ( is_array($terms) ) {
                $i = 0;
                foreach ( $terms as $term ) {
                $i++;
                $term_link = get_term_link( $term );
                $idForThisTax = $term->term_id;
                $first_post = get_posts( array(
                    'posts_per_page'   => 1,
                    'order' => 'DESC',
                    'orderby'  => 'post_date',
                    "post_type" => "atlikti_darbai",
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kategorija',
                            'field' => 'term_id',
                            'terms' => $idForThisTax,
                        ))
                ) ); 
                if ( $i % 2 != 0 ) { ?>
                    <div class="our-work-item">
                        <div class="our-work-item-left-img" style="background: url(<?php echo get_correct_image_link_thumb(get_field('kategorijos_nuotrauka', $term->taxonomy.'_'.$term->term_id ), 'large'); ?>) no-repeat;"></div>
                        <div class="our-work-item-right-content">
                            <div class="our-work-item-right-content-text">
                                <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>" class="our-work-item-right-title"><?php echo $term->name; ?></a>
                                <div class="our-work-item-right-about">
                                    <?php echo wp_trim_words( get_field('aprasymas_kat', $term->taxonomy.'_'.$term->term_id), 50 ); ?>
                                </div>
                                <div class="our-work-item-right-btn">
                                    <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>"><?php _e('Plačiau', 'theme'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="our-work-item">
                        <div class="our-work-item-left-content">
                            <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>" class="our-work-item-left-title"><?php echo $term->name; ?></a>
                            <div class="our-work-item-left-about">
                                <?php echo wp_trim_words( get_field('aprasymas_kat', $term->taxonomy.'_'.$term->term_id), 50 ); ?>
                            </div>
                            <div class="our-work-item-left-btn">
                                <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>"><?php _e('Plačiau', 'theme'); ?></a>
                            </div>
                        </div>
                        <div class="our-work-item-right-img" style="background: url(<?php echo get_correct_image_link_thumb(get_field('kategorijos_nuotrauka', $term->taxonomy.'_'.$term->term_id ), 'large'); ?>) no-repeat;"></div>
                    </div>
                <?php }?>
                <?php }
            } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>