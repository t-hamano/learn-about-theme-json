<?php
/**
 * Plugin Name: Learn about theme.json
 *
 * @package learn-about-theme-json
 */

// // テーマの theme.json のデータをフィルタリングして、マージンのみを有効化する
// function learn_about_theme_json_add_margin( $theme_json ) {
// 	$new_data = array(
// 		'version'  => 3,
// 		'settings' => array(
// 			'spacing' => array(
// 				'margin' => true,
// 			),
// 		),
// 	);
// 	return $theme_json->update_with( $new_data );
// }
// add_filter( 'wp_theme_json_data_theme', 'learn_about_theme_json_add_margin' );
