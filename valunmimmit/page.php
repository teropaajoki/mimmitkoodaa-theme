<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 */

get_header(); ?>

	<section class="main-content">

		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<p>TÄMÄ ON page.php</p>
				<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h1>
				<?php the_content() ?>
			</article>
		<?php endwhile; ?>

	</section>

<?php get_sidebar(); ?>

<?php get_footer();
