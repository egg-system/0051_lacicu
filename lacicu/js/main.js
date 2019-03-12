$(document).ready(function(){
  var slider = "#slider"; // スライダー
  var thumbnailItem = "#thumbnail-list .thumbnail-item"; // サムネイル画像アイテム
  
  // サムネイル画像アイテムに data-index でindex番号を付与
  $(thumbnailItem).each(function(){
   var index = $(thumbnailItem).index(this);
   $(this).attr("data-index",index);
  });
  
  // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
  // 「slickスライダー作成」の前にこの記述は書いてください。
  $(slider).on('init',function(slick){
   var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
   $(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
  });

  //slickスライダー初期化  
  $(slider).slick({
    autoplay: true,
    arrows: false,
    fade: true,
    infinite: true //これはつけましょう。
  });
  //サムネイル画像アイテムをクリックしたときにスライダー切り替え
  $(thumbnailItem).on('click',function(event){
    var index = $(this).attr("data-index");
    $(slider).slick("slickGoTo",index,false);
	  console.log(event.currentTarget.children);
	let currentItemUrl = event.currentTarget.children[0].href;
	window.location.href = currentItemUrl;
  });
  
  //サムネイル画像のカレントを切り替え
  $(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
    $(thumbnailItem).each(function(){
      $(this).removeClass("thumbnail-current");
    });
    $(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
  });
	// メニューの飛び先を#から無効にする
	//document.getElementById("menu-item-1687").getElementsByTagName("a")[0].href= "javascript:void(0)";
 });

// コンテンツ ふわっと出現
$(function(){
  $(window).scroll(function (){
    $('.fadein').each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll - elemPos + 540 > 0){
        $(this).addClass('scrollin');
      }
    });
  });
});

$(window).load(function(){
	// 画面遷移時
	var hash = location.hash;
	var listId = "";
	$('ul.sub-menu li').click(function(){
		var listId = $(this).attr('id')	
		if ((hash != "" && listId != "") || (hash == "" && listId != "")) {
			console.log("listId優先");
			if (listId == 'menu-item-129') {
				$("#courseprice").prop('checked', false);
				$("#courseprice-middle").prop('checked', false);
				$("#courseprice-high").prop('checked', true);
				funcCoursepriceHigh();
			} else if (listId == 'menu-item-128') {
				$("#courseprice").prop('checked', false);
				$("#courseprice-middle").prop('checked', true);
				$("#courseprice-high").prop('checked', false);
				funcCoursepriceMiddle();
			} else {
				$("#courseprice").prop('checked', true);
				$("#courseprice-middle").prop('checked', false);
				$("#courseprice-high").prop('checked', false);
				funcCourseprice();
			}
		}
	});
	if (hash != "" && listId == ""){
		console.log("hash優先:" + hash);
		if (hash == '#courseprice-high') {
			$("#courseprice").prop('checked', false);
			$("#courseprice-middle").prop('checked', false);
			$("#courseprice-high").prop('checked', true);
			funcCoursepriceHigh();
		} else if (hash == '#courseprice-middle') {
			$("#courseprice").prop('checked', false);
			$("#courseprice-middle").prop('checked', true);
			$("#courseprice-high").prop('checked', false);
			funcCoursepriceMiddle();
		} else {
			$("#courseprice").prop('checked', true);
			$("#courseprice-middle").prop('checked', false);
			$("#courseprice-high").prop('checked', false);
			funcCourseprice();
		}
	}
});

var elementary = "https://willbe-ako.com/wp/wp-content/uploads/2019/02/elementary.png";
var middle = "https://willbe-ako.com/wp/wp-content/uploads/2019/02/middle.png";
var high = "https://willbe-ako.com/wp/wp-content/uploads/2019/02/high.png";

function funcCourseprice() {
  document.getElementById("courseprice_pic").src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/elementary_active.png";
  document.getElementById("courseprice-middle_pic").src=middle;
  document.getElementById("courseprice-high_pic").src=high;
}
function funcCoursepriceMiddle() {
  document.getElementById("courseprice_pic").src=elementary;
  document.getElementById("courseprice-middle_pic").src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/middle_active.png";
  document.getElementById("courseprice-high_pic").src=high;
}
function funcCoursepriceHigh() {
  document.getElementById("courseprice_pic").src=elementary;
  document.getElementById("courseprice-middle_pic").src=middle;
  document.getElementById("courseprice-high_pic").src="https://willbe-ako.com/wp/wp-content/uploads/2019/02/high_active.png";
}