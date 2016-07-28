<?php get_header();?>

<section class="well1">
<div class="container">

			
<?php while ( have_posts() ) : the_post(); ?>
	

				<?php the_content(); ?>

<?php

endwhile;
get_footer();  ?>