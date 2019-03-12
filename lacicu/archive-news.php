<?php get_header(); ?>

<div class="mainBigcontainer">
<div class="columnContainer"> 

	<div class="newsListTable1row newsListTablerow"><span>NEWS</span><br>お知らせ</div>
	
<table class="newsTableArea">
	<hr class="newsListTableLine">
<?php
$paged = (int) get_query_var('paged');
$args = array(
	'posts_per_page' => 5,
	'paged' => $paged,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'news',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
	<tr class="newsListTable">
	<td class="newsListTable2row"><?php the_time('Y.m.d'); ?></td>
	 <td class="newsListTable3row"><?php the_title(); ?><a href="<?php the_permalink(); ?>"> ＞</a></td>
	</tr>
<?php endwhile; endif; ?>
</table>

<div class="topColumnListMoreParent">
<?php
$big = 999999999; // 最大値を指定
 
echo paginate_links( array( // ページネーションを表示
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ), //URLの生成ルールを決める
    'format' => '?paged=%#%', //ページネーションの構造を指定
    'current' => max( 1, get_query_var('paged') ), //現在のページ番号を指定
    'total' => $the_query->max_num_pages //全体のページ数を指定（$the_queryの部分にはクエリ名を入れる）
) );
?>
</div>

</div>
</div>

<?php get_footer(); ?> 

<style>
/** ニュース一覧 **/
.newsTableArea {
	width: 85%;
  max-width: 1200px;
	margin: auto;
	margin-bottom: 100px;
    border-top: initial;
}
.newsTableLine {
  border-top: 1px solid #CDCDCD;
}
.newsTable1row {
  width: 30%;
  height: 65px;
  font-size: 18px;
}
	.newsListTablerow{
		width: 40%;
	}
.newsTable2row {
  width: 15%;
  border-bottom: 1px dashed #CDCDCD;
  font-size: 16px;
  text-align: center;
}
.newsTable3row {
  width: 50%;
  border-bottom: 1px dashed #CDCDCD;
  font-size: 17px;
}
.newsTable3row a{
	float: right;
	color: black;
	text-decoration: none;
}

.newsListTable1row {
  width: 40% !important;
  height: 85px;
  font-size: 30px;
}
.newsListTable1row span{
  width: 30%;
  height: 85px;
  font-size: 14px;
}

.newsListTable2row {
  width: 15%;
  border-bottom: 1px dotted #CDCDCD;
  font-size: 16px;
  text-align: center;
}
.newsListTable3row {
  width: 50%;
  border-bottom: 1px dotted #CDCDCD;
  font-size: 17px;
}
.newsListTable3row a{
	float: right;
	color: black;
	text-decoration: none;
}
.newsListTable{
	margin: 10 0;
	height: 85px;
}
</style>