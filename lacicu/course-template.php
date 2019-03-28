<?php
/**
 * Template Name: course-template */
?>

<?php get_header(); ?>
<div id="courseTemplate">
  <div class="tabs">
    <input id="courseprice" type="radio" name="tab_item" checked onclick="funcCourseprice()">
    <label class="tab_item" for="courseprice"><img id="courseprice_pic" src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/elementary_active.png"></label>
    <input id="courseprice-middle" type="radio" name="tab_item" onclick="funcCoursepriceMiddle()">
    <label class="tab_item" for="courseprice-middle"><img id="courseprice-middle_pic" src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/middle.png"></label>
    <input id="courseprice-high" type="radio" name="tab_item" onclick="funcCoursepriceHigh()">
    <label class="tab_item" for="courseprice-high"><img id="courseprice-high_pic" src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/high.png"></label>

    <div class="tab_content" id="courseprice_content">
      <div class="tab_content_description">
        <div class="c-txtsp">
          <?php
            $my_post = get_page_by_title ( 'コースの紹介・料金（小学生コース）' );
            echo apply_filters ( 'courseprice-elementary', $my_post -> post_content );
          ?>
        </div>
      </div>
    </div>

    <div class="tab_content" id="courseprice-middle_content">
      <div class="tab_content_description">
        <div class="c-txtsp">
          <?php // 指定の固定ページの本文を抽出
          $my_post = get_page_by_title ( 'コースの紹介・料金（中学生コース）' );
          echo apply_filters ( 'courseprice-middle', $my_post -> post_content );
          ?>
        </div>
      </div>
    </div>

    <div class="tab_content" id="courseprice-high_content">
      <div class="tab_content_description">
        <div class="c-txtsp">			
          <?php // 指定の固定ページの本文を抽出
          $my_post = get_page_by_title ( 'コースの紹介・料金（高校生コース）' );
          echo apply_filters ( 'courseprice-high', $my_post -> post_content );
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?> 

<style>

/*タブ切り替え全体のスタイル*/
#courseTemplate{
  width: 75%;
  margin: 0 auto;
}

#courseTemplate .tabs {
　margin-top: 200px;
  padding-bottom: 40px;
  background-color: #fff;  
}

/*タブのスタイル*/
#courseTemplate .tab_item {
width: 32%;
  margin: 0 auto;
  margin-right: 2px;
  display: block;
  float: left;
  vertical-align: top;
  transition: all 0.2s ease;
}
	#courseTemplate .tab_item img{
		width: 100%
	}
	
#courseTemplate .tab_item:hover {
  opacity: 0.75;
}

/*ラジオボタンを全て消す*/
#courseTemplate input[name="tab_item"] {
  display: none;
}

/*タブ切り替えの中身のスタイル*/
#courseTemplate  .tab_content {
  display: none;
  padding: 40px 40px 0;
  clear: both;
  overflow: hidden;
}

/*選択されているタブのコンテンツのみを表示*/
#courseTemplate #courseprice:checked ~ #courseprice_content,
#courseTemplate #courseprice-middle:checked ~ #courseprice-middle_content,
#courseTemplate #courseprice-high:checked ~ #courseprice-high_content {
  display: block;
}

.aboutCourseHeader {
  width: 100%;
  height: 540px;
  background-image: url(https://willbe-ako.com/wp/wp-content/uploads/2019/02/Willbe_03_top.png);
  background-repeat: no-repeat;
  background-size: cover;
}
	
.coursePrice{
  font-size:14px;
}
	.courceDetailsTable{
		font-size:14px;
	}
.coursePriceTitle h2 {
  display: inline;
}
.enTitle{
  margin-left: 20px;
  font-size:15px;
}
.courceDescriptionTable{
  font-size:13px;
margin-left:20px;
}
.courceDescription{
  font-size:13px;
text-align:left;
}
.membershipFeeArea{
	margin-top: 20px;
}
.membershipFeeTable {
font-size: 20px;
padding: 20px 20px 20px 0px;
}
.membershipDescription {
	font-size:13px;
}

.courseArea {
	margin: 50px 0;
}
.courceMainTitle {
  font-size:19px;		
	margin-bottom: 10px;
}
.courceSubTitle{
  font-size:15px;
  margin-top: 40px;
  margin-bottom: 10px;
}

.courceTitle{
  font-size:17px;
  margin-top: 30px;
	margin-bottom: 10px;
	font-weight:bold;
}
.courceDetailTable{
	padding: 10px;
}
.courceDetails{
  margin-right: 50px;
  display: inline-block;
  vertical-align: middle;
}
	.courceParagraph a {
		color: #2ECCFA;
	}
.courseAndCharge {
  width: 100%;
  margin: 0 auto;
  margin-bottom: 50px;
} 
.courseAndChargeTable {
  width: 100%;
  margin: 0 auto;
  font-size:14px;
  border-collapse:collapse;
}
.courseAndChargeTable th {
  text-align: center;
  width: 240px;
  height: 40px;
  box-sizing: border-box;
}
.courseAndChargeTable td {
  height: 40px;
  padding: 15px 0;
  box-sizing: border-box;
  text-align: center;
}
.courseAndChargeTable2 {
  border-bottom: 1px solid #CDCDCD;
}
.courseAndChargeTable4 {
  border-bottom: 1px solid #CDCDCD;
}
.courseAndChargeTable5 {
  border-bottom: 1px solid #CDCDCD;
}
.courseAndChargeTable6 {
  border-bottom: 1px solid #CDCDCD;
}
/*小学生コース*/
#courseprice_content .enTitle, #courseprice_content .circleYellow{
  color: #FFCC00;
}
#courseprice_content .courseAndChargeTable th {
  background: #FFCC00;
}
#courseprice_content .courceImg{
	margin-top: 20px;
}
/*中学生コース*/
#courseprice-middle_content .enTitle, #courseprice-middle_content .circleGreen{
  color: #009999;
}
#courseprice-middle_content .courseAndChargeTable th {
  background: #009999;
}
#courseprice-middle_content .greenParagraph{
color: #009999;
}
.courceTitleMiddle{
font-size: 17px;
margin-top: 30px;
margin-bottom: 10px;
}
/*高校生コース*/
#courseprice-high_content .enTitle, #courseprice-high_content .circlePink{
  color: #FF82B2;
}
#courseprice-high_content .courseAndChargeTable th {
  background: #FF82B2;
}
.pinkParagraph{
color: #FF82B2;
}
.courseTrainingPlan {
    width: 70%;
    height: 100px;
    border: 1px solid #333333;
    line-height: 100px;
    margin-bottom: 50px;
    padding-left: 30px;
    box-sizing: border-box;
    display: flex;
}
.whatsJyukencompass {
    width: 250px;
    margin-left: 30px;
    transform: translateY(24px);
    cursor: pointer;
}
	.courseTrainingPlanArea{
    margin-top: 100px;		
	}
.sokudoku{
width: 65%;
margin: 0;
}
.underlines {
  border-bottom: 1px solid #CDCDCD;
}

/* tablet  */
@media only screen and (min-width: 481px) and (max-width: 1024px) {
	.aboutCourseHeader {
		height: 350px;
	}
	.courseTrainingPlan {
		width: 100%;
		font-size: 12px;
		line-height: 100px;
		height: 100px;
		display: block;
	}
	.whatsJyukencompass {
		width: 200px;
		margin-left: 10px;
		transform: translateY(15px);
	}
	.courseAndChargeTable {
		font-size: 10px;
	}
	.courseAndChargeTable th {
		font-size: 10px;
	}
	.courseAndChargeTable td {
		font-size: 10px;
	}
}
/* smartphone */
@media screen and (max-width: 480px) {
	#courseTemplate{
		width: 85%;
	}
	.aboutCourseHeader {
		height: 150px;
	}
	#courseTemplate .tab_content {
		padding: 20px 0px 0px 0px;
	}
	.courceDetails{
		margin-right: initial;
	}
	.courseTrainingPlan {
		width: 100%;
		text-align: center;
		padding-left: 0;
		font-size: 12px;
		line-height: 40px;
		height: 100px;
		display: block;
	}
	.whatsJyukencompass {
		width: 200px;
		margin-left: 0px;
		transform: translateY(0px);
	}
	.courseAndChargeTable {
		font-size: 10px;
	}
	.courseAndChargeTable th {
		font-size: 10px;
	}
	.courseAndChargeTable td {
		font-size: 10px;
	}
	.sokudoku{
		width: 80%;
	}
}
</style>
