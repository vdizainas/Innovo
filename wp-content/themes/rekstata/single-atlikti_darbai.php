<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); $currentID = get_the_ID();
$taxIds = get_the_terms($post->ID, 'kategorija');
if ( is_array( $taxIds ) ):
foreach ( $taxIds as $taxId) {
        $thisId = $taxId->term_id;
    }
endif;
?>

<div class="page-title-wrap single-work-title-wrap" style="background: url('<?php echo get_the_post_thumbnail_url($post->ID, 'main-slide-img'); ?>') no-repeat;">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="single-work-page-title-text">
            <?php the_title(); ?>
        </div>
    </div>
</div>

<section class="single-our-work-section">
    <div class="container">
        <div class="single-ow-btns">
            <div class="single-ow-prev">
                <?php
                // get_posts in same custom taxonomy
                $postlist_args = array(
                    'posts_per_page'  => -1,
                    'orderby'         => 'date',
                    'order'           => 'ASC',
                    'post_type'       => 'atlikti_darbai',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kategorija',
                            'field' => 'term_id',
                            'terms' => $thisId,
                        ))
                ); 
                $postlist = get_posts( $postlist_args );
                
                // get ids of posts retrieved from get_posts
                $ids = array();
                foreach ($postlist as $thepost) {
                    $ids[] = $thepost->ID;
                }
                
                // get and echo previous and next post in the same taxonomy        
                $thisindex = array_search($post->ID, $ids);
                $previd = $ids[$thisindex-1];
                $nextid = $ids[$thisindex+1];
                if ( !empty($previd) ) {
                    echo '<a rel="prev" href="' . get_permalink($previd). '"></a>';
                }
                elseif ( empty( $previd ) ) {
                    $first_post = get_posts( array(
                        'posts_per_page'   => 1,
                        'order' => 'DESC',
                        'orderby'  => 'date',
                        "post_type" => "atlikti_darbai",
                        //'post__not_in' => array($currentID),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'kategorija',
                                'field' => 'term_id',
                                'terms' => $thisId,
                            ))
                    ) ); ?>
                    <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>"></a>
                <?php }                


                /*
                if ( get_previous_post_link() && get_next_post_link() ) {
                    //echo previous_post_link( '%link', '' );
                    //echo previous_post_link( '%link', $in_same_term = true, $taxonomy = 'kategorija' );
                } else if ( !get_previous_post_link() && get_next_post_link() ) {
                    $first_post = get_posts( array(
                        'posts_per_page'   => 1,
                        'order' => 'DESC',
                        'orderby'  => 'post_date',
                        "post_type" => "atlikti_darbai",
                        'post__not_in' => array($currentID),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'kategorija',
                                'field' => 'term_id',
                                'terms' => $thisId,
                            ))
                    ) ); ?>
                    <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>"></a>
                <?php } else if ( get_previous_post_link() && !get_next_post_link() ) { 
                    //echo previous_post_link( '%link', '' );
                    //echo previous_post_link( '%link', 'Previous post in category', true, ' ', 'post_format' );
                    //echo previous_post_link( '%link', '', true );
                } */ ?>
            </div>
            <div class="single-ow-next">
                <?php
                    if ( !empty($nextid) ) {
                        echo '<a rel="next" href="' . get_permalink($nextid). '"></a>';
                    } 
                    elseif ( empty($nextid) ) {
                        $first_post = get_posts( array(
                            'posts_per_page'   => 1,
                            'order' => 'ASC',
                            'orderby'  => 'date',
                            "post_type" => "atlikti_darbai",
                            //'post__not_in' => array($currentID),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'kategorija',
                                    'field' => 'term_id',
                                    'terms' => $thisId,
                                ))
                        ) ); ?>
                        
                        <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>"></a>
                        
                        <?php //echo '<a rel="next" href="' . get_permalink($previd). '">nera-next</a>'; ?>
                    <?php } /*
                    elseif ( !empty($nextid) && !empty($previd) ) {
                            echo '<a rel="next" href="' . get_permalink($nextid). '">yra-abu</a>';
                        } 
                    elseif ( empty($nextid) && empty($previd) ) {
                            echo '<a rel="next" href="' . get_permalink($nextid). '">nera-nieko</a>';
                        }*/
                    ?>
                <?php /*
                if ( get_previous_post_link() && get_next_post_link() ) {
                    //echo next_post_link( '%link', '' );
                    //echo next_post_link( '%link', $in_same_term = true, $taxonomy = 'kategorija' );
                } else if ( !get_previous_post_link() && get_next_post_link() ) {
                    //echo next_post_link( '%link', 'Next post in category', true, ' ', 'post_format' ); 
                    //echo next_post_link( '%link', $in_same_term = true, $taxonomy = 'kategorija' );
                } else if ( get_previous_post_link() && !get_next_post_link() ) { 
                    $first_post = get_posts( array(
                        'posts_per_page'   => 1,
                        'order' => 'ASC',
                        'orderby'  => 'post_date',
                        "post_type" => "atlikti_darbai",
                        'post__not_in' => array($currentID),
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'kategorija',
                                'field' => 'term_id',
                                'terms' => $thisId,
                            ))
                    ) ); ?>
                    <a href="<?php echo get_permalink( $first_post[0]->ID ); ?>"></a>
                <?php } */ ?>
            </div>
        </div>
        <div class="single-ow-content">
            <div class="single-ow-gallery">
                <?php $images = get_field('galerija');
                if( $images ): ?>
                    <ul class="single-ow-gallery-main">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <a href="<?php echo esc_url($image['url']); ?>" class="fancybox" rel="gallery">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="gallery" />
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; 
                if( $images ): ?>
                    <ul class="single-ow-gallery-nav">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="gallery" />
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="single-ow-right">
                <?php if( get_the_content() ) { ?>
                    <div class="single-ow-content-text"><?php the_content(); ?></div>
                <?php } ?>
                <?php if( have_rows('info_apie_projekta') ): ?>
                <div class="single-ow-content-about"><?php _e('Informacija apie projektą', 'theme'); ?></div>
                <?php while ( have_rows('info_apie_projekta') ) : the_row(); ?>
                    <div class="single-ow-content-about-item">
                        <div class="single-about-item-title"><?php the_sub_field('projekto_info_pavadinimas'); ?></div>
                        <div class="single-about-item-info"><?php the_sub_field('projekto_info_tekstas'); ?></div>
                    </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<?php get_footer(); ?>