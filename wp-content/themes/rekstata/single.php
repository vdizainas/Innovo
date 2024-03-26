<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); $currentID = get_the_ID(); ?>



<?php endwhile; ?>
<?php get_footer(); ?>
