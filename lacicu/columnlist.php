<div class="columnContainer"> 
<ul>
  <?php
    $wp_query = new WP_Query();
    $param = array(
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'orderby' => 'date', //ID順に並び替え
        'order' => 'DESC'
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
  ?>
  <li class="column">
    <?php if (has_post_thumbnail()) : ?>
		  <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(array( 360, 300 ) ); ?>
			  </a>
    <?php else : ?>
		  <a href="<?php the_permalink(); ?>">
			  <img src="<?php bloginfo('template_url'); ?>/img/square.png" alt="デフォルト画像" />
		  </a>
    <?php endif ; ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	  <p>
			<?php the_excerpt(); ?>
	  </p>
</li>
  <?php endwhile; endif; ?>
  </ul>

	<?php 
    $count_posts = wp_count_posts();
    $posts = $count_posts->publish;
	if (3 < $posts):
	?>
	<div class="topColumnListMoreParent">
<div class="topColumnListMore">
<a href="/column">MORE</a>
</div>
</div>
	<?php endif; ?>
	
</div>


