<?php get_header(); ?>
カテゴリー一覧
<div class="contribution">
<div class="contributionContainer">
<?php
if (have_posts()) : while (have_posts()) : the_post();
?>
	<div class="contributionHead">			
        <!-- 日時を表示 -->
		<span><?php the_time('Y/m/d'); ?></span>
        <!--  カテゴリをカンマ区切りで表示 -->
        <span class="contributionCategory"><?php the_category(', '); ?></span>
	</div>
        <h1><?php the_title(); ?></h1>
<!-- 	アイキャッチ画像を表示するテンプレートタグ -->
		<?php //the_post_thumbnail('thumbnail'); ?>
		<?php the_post_thumbnail('large'); ?>
		<!--  投稿本文を表示 -->
        <div class="entry"><?php the_content(); ?></div>
<?php endwhile; else: ?>
      <p>記事が見つかりませんでした。</p>
<?php endif; ?>

<div class="contributionPostLink">
<span class="previous"><?php previous_post_link('%link', '＜ 前の記事へ'); ?></span>
<span class="next"><?php next_post_link('%link', '次の記事へ ＞'); ?></span>
</div>

</div>
</div>
<?php get_footer(); ?> 