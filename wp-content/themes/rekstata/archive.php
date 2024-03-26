<?php get_header(); ?>
<?php while ( have_posts() ) : the_post();?>
                
<?php the_post_thumbnail( 'thumbnail' );?>
<?php echo get_the_author();?>
<?php echo get_the_date(); ?>
<?php echo get_the_time(); ?>
<?php the_title(); ?>
<?php the_content(); ?>

<?php endwhile; ?>
<?php the_posts_pagination();?>

<?php get_footer(); ?>
