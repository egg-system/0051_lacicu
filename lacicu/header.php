<head>

	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu.css" type="text/css" />

	<!-- ファビコン設定 -->
	<link rel="shortcut icon" href="/wp/wp-content/uploads/2019/02/logo01-128.ico">

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
		
	<?php if (wp_is_mobile()) : ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hamburger-menu.js"></script>
	<?php endif; ?>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<?php wp_head(); ?>
<nav>
	<div id="logo">
<!-- 		<a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/studyGymLogo.png" alt="" class="topStudyGymLogo"/></a> -->
		<a href="/"><img src="/wp/wp-content/uploads/2019/02/logo_01.png" alt="LOGO" class="topStudyGymLogoo"/></a>
	</div>
	<div class="head_menu">
		<?php wp_nav_menu( array('menu' => 'menu1' )); ?>
	</div>
</nav>
<!-- トップページ向け -->
<?php  if ( is_front_page()) : ?>
<div id="sliderWrap">
	<!--<div id="topPhrase">
		<p>夢に、</p><p>もっと近く</p>
		<p>
			<span>
				大学受験に強いは訳がある。<br>
				最短ルートで志望校合格に導きます
			</span>
		</p>
	</div> -->
  <ul id="slider">
  <li class="slide-item courseprice-elementary"><a href="https://willbe-ako.com/course/#courseprice"><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/Willbe_topC_1300-600.png" alt="" class="topImages"/></a></li>
	  <li class="slide-item courseprice-middle"><a href="https://willbe-ako.com/course/#courseprice-middle"><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/Willbe_topB_1300-600.png" alt="" class="topImages"/></a></li>
   <li class="slide-item courseprice-high"><a href="https://willbe-ako.com/course/#courseprice-high"><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/Willbe_topA_1300-600.png" alt="" class="topImages"/></a></li>
  </ul>
  <ul id="thumbnail-list">
  	<li class="thumbnail-item thumbnail-current courseprice-elementary">
		<a href="https://willbe-ako.com/course/#courseprice"><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/slideNav1.jpg"></a>
	</li>
  	<li class="thumbnail-item courseprice-middle">
		<a href="https://willbe-ako.com/course/#courseprice-middle"><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/slideNav2.jpg"></a>
	 </li>
  	<li class="thumbnail-item courseprice-high">
		<a href="https://willbe-ako.com/course/#courseprice-high"><img src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/slideNav3.jpg"></a>
	</li>
  </ul>
</div>
<!-- トップページ以外 -->
<!-- aboutStudygymページ -->
<?php elseif( is_page( 'AboutWillbe' ) ) : ?>
	<div class="aboutWillbeHeader">
	<div class="headerInner">
<!-- Courseページ -->
<?php elseif( is_page( 'course' ) ) : ?>
	<div class="aboutCourseHeader">
	<div class="headerInner">
<!-- contactページ -->
<?php elseif( is_page( 'contact' ) ) : ?>
	<div class="aboutContactHeader">
	<div class="headerInner">
<?php elseif( is_page( 'flow' ) ) : ?>
	<div class="aboutFlowHeader">
	<div class="headerInner">
<!-- それ以外 -->
<?php else : ?>
<!--
		<div class="aboutHeader">
	<div class="aboutHeaderInner">
-->
<?php endif; ?>

	</div>
</div>
</head>