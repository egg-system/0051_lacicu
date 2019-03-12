<?php get_header(); ?> 
<title>Willbe</title>
<div id="topPage">
	<div class="contents">
		<div class="mainBigcontainer">
			
			<!-- Willbeの強み -->
			<div class="willbeStrength fadein">
				<h2>Will beの強み</h2>
				<hr>
				<div class="strengthContainer">									
					<div class="strength1">
						<div><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/icon01.png" alt=""></div>
						<div class="strengthSmallText">
							small step
						</div>
						<div class="strengthText">
						本当のスモールステップで<br>「分かる」を実感する						
						</div>
					</div>
					<div class="strength2">
						<div><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/icon02.png" alt=""></div>
						<div class="strengthSmallText">
							terative learning
						</div>
						<div class="strengthText">
						「基礎」の「反復復習」で<br>「基本」を身につける
						</div>
					</div>
					<div class="strength3">
						<div><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/icon03.png" alt=""></div>
						<div class="strengthSmallText">
							habituation
						</div>
						<div class="strengthText">
						自分のペースで学んで<br>無理なく習慣化
						</div>
					</div>
				</div>
				<div class="willbeBtn">
						<a href="/aboutwillbe">WHAT'S Willbe？＞</a>
				</div>
			</div>

			<!-- News -->
			<div class="newsWrap">
				<div class="newsInner">
					<div class="newsHead news_TopPage"><span>NEWS</span><br>お知らせ</div>
					<?php get_template_part('newslist'); ?>
				</div>
			</div>

			<!-- 塾長コラム -->
			<div class="columnTop"><span>COLUMN</span><br>
				<h2>塾長コラム</h2>			
				<?php get_template_part('columnlist'); ?>
			</div>
			
			<!-- Googleマップ -->
			<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.7279982203845!2d134.3715381152338!3d34.76244408041874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35545f3c5c78b133%3A0xd8c779aeefbac05!2z44CSNjc4LTAyNTgg5YW15bqr55yM6LWk56mC5biC5Y-k5rWc55S677yS77yQ77yT!5e0!3m2!1sja!2sjp!4v1550381552151" frameborder="0" style="border:0" allowfullscreen class="googlemap"></iframe>
			</div>

    </div>
  </div>
</div> 
<?php get_footer(); ?> 