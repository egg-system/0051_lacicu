<?php

function register_stylesheet() {
  wp_register_style('style', get_template_directory_uri().'/style.css');
}

function add_stylesheet() {
  register_stylesheet(); 
  wp_enqueue_style('style', '', array(), '1.0', false);
}

/**
 * アイキャッチ画像を有効化
 */
add_theme_support( 'post-thumbnails');

// 実体がなくとも、有効化される
add_theme_support( 'title-tag');

/**
 * 外観−メニュー　　を有効化
 */


add_theme_support('menus');

/**
 * 外観−ウィジェット　　を有効化
 */
class My_Widget extends WP_Widget {

	/**
	 * ウィジェット名などを設定
	 */
	public function __construct() {
		// widget actual processes
	}

	/**
	 * ウィジェットの内容を出力
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
	}

	/**
	 * 管理用のオプションのフォームを出力
	 *
	 * @param array $instance ウィジェットオプション
	 */
	public function form( $instance ) {
		// 管理用のオプションのフォームを出力
	}

	/**
	 * ウィジェットオプションの保存処理
	 */
	public function update( $new_instance, $old_instance ) {
		// ウィジェットオプションの保存処理
	}
}

// ウィジェットでサイドバーを有効化
if ( function_exists('register_sidebar') ){
   register_sidebar();
}


?>
