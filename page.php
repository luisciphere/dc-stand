<?php
/**
 * The template for displaying all pages
 */
?>
<?php get_header(); ?>
		<!-- section -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article class="" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php //edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2>Страница не найдена</h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
<?php get_footer(); ?>