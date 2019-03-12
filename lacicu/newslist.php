<table class="newsTable fadein">
  <?php $post_count = 1; ?>

<?php
    $wp_query = new WP_Query();
    $param = array(
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'post_type' => 'news', //カスタム投稿タイプの名称を入れる
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'date', //ID順に並び替え
        'order' => 'DESC'
    );
    $wp_query->query($param);
    if($wp_query->have_posts()): while($wp_query->have_posts()) : $wp_query->the_post();
  ?>
  <tr>
	<td class="newsTable1row"><a href="<?php the_permalink(); ?>"><span>＞</span><?php the_time('Y.m.d'); ?></a></td>
    <td class="newsTable2row"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
  </tr>
  <?php $post_count++; ?>
  <?php endwhile; endif; ?>
</table>
