<?php
/*
Plugin Name: Imba Information Plugin
Plugin URI: https://www.imbaseo.se/
Description: This plugin give the user the ability to get in contact with the website author.
Version: 1.0.0
Author: Mikael
Author URI: https://www.imbaseo.se/
License: GPLv2 or later
Text Domain: Imba
*/
// $wpdb->show_errors(); $wpdb->print_error();
error_reporting(E_ERROR | E_PARSE);

add_action('admin_menu' , function(){
    add_menu_page('Imba','Imba','manage_options', 'Imba_admin', 'Imba_ufg', 'dashicons-admin-users','2');
});

function Imba_ufg(){ include 'imba.php'; }


add_action('wp_dashboard_setup', function(){
    global $wp_meta_boxes;
    wp_add_dashboard_widget('imba-SEO', 'imba-SEO', function(){ include 'imba-seo.php'; });
});



/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
        "id"     => "imba-seo",
        "title"  => __( "Imba Webb Admin", "text_domain" ),
        "href"   => "#",
    );
    $wp_admin_bar->add_menu($args);

}, 999 );



/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "kundzonen",
        "title"  => __( "Imba kundzonen", "text_domain" ),
        "href"   => "imbaseo.se/login",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "seo",
        "title"  => __( "Imba Sökmotoroptimering", "text_domain" ),
        "href"   => "imbaseo.se/sokmotoroptimering",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "sociala-medier",
        "title"  => __( "Imba Sociala Medier", "text_domain" ),
        "href"   => "imbaseo.se/sociala-medier",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "webbutveckling",
        "title"  => __( "Imba Webbutveckling", "text_domain" ),
        "href"   => "imbaseo.se/webbutveckling",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "webbutveckling",
        "title"  => __( "Imba Webbutveckling", "text_domain" ),
        "href"   => "imbaseo.se/webbutveckling",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "om",
        "title"  => __( "Om oss", "text_domain" ),
        "href"   => "imbaseo.se/om-oss",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

/* -- Admin Top Bar Menus -- */
add_action( "wp_before_admin_bar_render", function(){
    global $wp_admin_bar;

    $args = array(
      'parent' => 'imba-seo',
        "id"     => "kontakt",
        "title"  => __( "Kontakta oss", "text_domain" ),
        "href"   => "imbaseo.se/kontakta-oss",
        'meta' => array(
          'target' => '_blank',
      )
    );
    $wp_admin_bar->add_menu($args);

}, 999 );

?>
<?php
/* Powered By Haysky Code Generator: KEY
[["admin_page","Imba,kontakt"],["submit","Index File"]]
*/
?>
