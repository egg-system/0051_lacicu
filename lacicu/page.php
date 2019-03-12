<?php get_header(); ?>
	<?php if (have_posts()) { ?>
		<?php while (have_posts()	) : the_post(); endwhile; ?>
		<?php the_content(); ?>
	<?php } ?>
<?php get_footer(); ?> 