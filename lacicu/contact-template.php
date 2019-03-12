<?php
/**
 * Template Name: contact-template */
?>

<?php get_header(); ?>
	<div id="contact" class="main-content">
		<?php if (have_posts()) { ?>
			<?php while (have_posts()	) : the_post(); endwhile; ?>
			<?php the_content(); ?>
		<?php } ?>
	</div>
<?php get_footer(); ?> 