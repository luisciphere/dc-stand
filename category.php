<?php
/**
 * The template for displaying Category Archive pages.
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<section class="well1">
<div class="container">

			<div class="head_8 blue_1 center">Полезные статьи</div>

<ul class="articles">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
	
		<li>

			<a href="<?php the_permalink(); ?>">
			<?php
			if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
				echo get_the_post_thumbnail($post->ID,'medium');
				}
				the_title(); ?>
			</a>
		</li>
	<?php endwhile; ?>
	<?php endif; ?>

</ul>
</div><!-- #content -->
</div><!-- #container -->
<?php get_footer(); ?>