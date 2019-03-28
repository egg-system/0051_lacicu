<?php
/**
 * Template Name: column-template */
?>
<div id="column-list">

<?php get_header(); ?>

<div class="mainBigcontainer">
<div class="columnContainer"> 
<ul>
<?php
$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 9,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
	<li class="column">
	  <span class="square">
    <?php if (has_post_thumbnail()) : ?>
		  <a href="<?php the_permalink(); ?>">
        <?php //the_post_thumbnail(array( 360, 300 ) ); ?>
        <?php the_post_thumbnail('large'); ?>
			  </a>
    <?php else : ?>
		  <a href="<?php the_permalink(); ?>">
			  <img src="<?php bloginfo('template_url'); ?>/img/square.png" alt="デフォルト画像" />
		  </a>
    <?php endif ; ?>
	  </span>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	  <p>
		  <?php the_excerpt(); ?>
	  </p>
	</li>
<?php endwhile; endif; ?>
</ul>
<div class="topColumnListMoreParent">
<?php
if ($the_query->max_num_pages > 1) {
	echo paginate_links(array(
		'base' => get_pagenum_link(1) . '%_%',
		'format' => 'page/%#%/',
		'current' => max(1, $paged),
		'total' => $the_query->max_num_pages
	));
}
?>
</div>
<?php wp_reset_postdata(); ?>
	
</div>
</div>

<?php get_footer(); ?> 
	</div>
