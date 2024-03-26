<?php get_header(); ?>

<div class="single-service-page-title-wrap">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="page-title-text archive-page-title">
            <?php echo wp_trim_words( single_cat_title("", false) , 1 ); ?>
            <span><?php echo single_cat_title("", false); ?></span>
        </div>
    </div>
</div>

<div class="our-work-filter">
    <div class="container">
        <ul class="our-work-filter-list">
            <li><a href="<?php echo get_permalink('11'); ?>"><?php _e('Visi', 'theme'); ?></a></li>
            <?php $terms = get_terms( 'kategorija', 'orderby=count&hide_empty=1' );
            foreach ( $terms as $term ) {
                $term_link = get_term_link( $term );
                if ( single_cat_title("", false) == $term->name ) {
                    echo '<li><a href="' . esc_url( $term_link ) . '" class="our-work-filter-all">' . $term->name . '</a></li>';
                } else {
                echo '<li><a href="' . esc_url( $term_link ) . '">' . $term->name . '</a></li>';
                }
            } ?>
        </ul>
    </div>
</div>

<div class="our-work-content">
    <div class="container">
        <div class="our-work-content-wrap">
            <?php
                $termsThis = get_queried_object()->term_id;
                $args = array( "post_type" => "atlikti_darbai", "posts_per_page" => -1, 'tax_query' => array(
                array(
                    'taxonomy' => 'kategorija',
                    'field' => 'term_id',
                    'terms' => $termsThis,
                )) );
                $post_query = new WP_Query($args);
                if($post_query->have_posts() ) : while($post_query->have_posts() ) : $post_query->the_post(); ?>
                    <div><?php the_title(); ?></div>
                <?php endwhile; ?>
                <?php endif; 
                wp_reset_postdata();
            ?>

            <?php /*
            <?php $i = 0; while ( have_posts() ) : the_post(); $i++; 
                if ( $i % 2 != 0 ) { ?>
                    <div class="our-work-item">
                        <div class="our-work-item-left-img" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'main-slide-img'); ?>') no-repeat;"></div>
                        <div class="our-work-item-right-content">
                            <div class="our-work-item-right-content-text">
                                <a href="<?php the_permalink(); ?>" class="our-work-item-right-title"><?php the_title(); ?></a>
                                <div class="our-work-item-right-about">
                                    <?php echo wp_trim_words( get_the_content(), 50 ); ?>
                                </div>
                                <div class="our-work-item-right-btn">
                                    <a href="<?php the_permalink(); ?>"><?php _e('Plačiau', 'theme'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="our-work-item">
                        <div class="our-work-item-left-content">
                            <a href="<?php the_permalink(); ?>" class="our-work-item-left-title"><?php the_title(); ?></a>
                            <div class="our-work-item-left-about">
                                <?php echo wp_trim_words( get_the_content(), 50 ); ?>
                            </div>
                            <div class="our-work-item-left-btn">
                                <a href="<?php the_permalink(); ?>"><?php _e('Plačiau', 'theme'); ?></a>
                            </div>
                        </div>
                        <div class="our-work-item-right-img" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'main-slide-img'); ?>') no-repeat;"></div>
                    </div>
                <?php }?>
            <?php endwhile; ?>
            */ ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
