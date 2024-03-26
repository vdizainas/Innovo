<?php 
/* Template Name: Karjera */
get_header(); ?>

<div class="page-title-wrap career-page-title">
    <div class="page-title-over"></div>
    <div class="container">
        <div class="page-title-text">
            <?php the_title(); ?>
            <span><?php the_title(); ?></span>
        </div>
    </div>
</div>

<section class="career-section">
    <div class="container">
        <div class="career-main-text"><?php the_field('pagrindinis_tekstas'); ?></div>
        <div class="career-content">
            <div class="career-about"><?php the_field('karjera_aprasymas'); ?></div>
            <div class="career-btn">
                <a href="mailto:<?php the_field('email', 'options'); ?>"><?php _e('siųsti cv', 'theme'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>