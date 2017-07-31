<?php

/* 
* Basic Child theme setup
*/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
	    get_stylesheet_directory_uri() . '/style.css',
	    array( $parent_style ),
	    wp_get_theme()->get('Version')
	);
}



/*
* Custom 'products' type
*/
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'products',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'products'),
  	  'supports' => array( 'title', 'editor', 'custom-fields' )
    )
  );
}
function na_remove_slug( $post_link, $post, $leavename ) {

    if ( 'products' != $post->post_type || 'publish' != $post->post_status ) {
        return $post_link;
    }

    $post_link = str_replace( '/' . $post->post_type . '/', '/', $post_link );

    return $post_link;
}
add_filter( 'post_type_link', 'na_remove_slug', 10, 3 );
function na_parse_request( $query ) {

    if ( ! empty( $query->query['name'] ) ) {
        $query->set( 'post_type', array( 'post', 'products', 'page' ) );
    }
}
add_action( 'pre_get_posts', 'na_parse_request' );



/* 
* Include the Google Analytics Tracking Code (ga.js)
*/
function google_analytics_tracking_code(){
  ?>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-103015653-1', 'auto');
      ga('send', 'pageview');
    </script>
  <?php 
}
add_action('wp_head', 'google_analytics_tracking_code');

/**
* Facebooke use open standard from OFC? lauaghable they duplicated it and call it opengraphinstead
*/
function display_facebook_og(){
  global $post;
  $img_array=get_field('design_image');
  //echo '<meta property="og:url" content="'.get_permalink($post->ID).'"/>';
  echo '<meta property="og:image" content="'.$img_array["sizes"]["medium"].'"/>';
}
add_action('wp_head', 'display_facebook_og');


/**
* Print info
*/
function extraInfo(){
  

    $charity="charity";
    if(get_field('charity_name') && get_field('charity_link')){
      $charity='<a href="' . get_field('charity_link') . '">' . get_field('charity_name') . '</a>';
    }
    ?>

          <div class="additional">
            <img src="/wp-content/themes/illustratr-child/noun_15259_cc.png" width="16"/>&nbsp;
            <?php echo get_field('charity_level') .'% profits to ' . $charity ?>
            <br/>
            Available as: 
            <?php
              foreach(get_field('styles') as $style){
                if($style == 'hoodie') {
                  $url = "/wp-content/themes/illustratr-child/noun_69059_cc.png"; 
                  $price = get_field('hoodie_price');
                }elseif($style == 't-shirt') {
                  $url = "/wp-content/themes/illustratr-child/noun_69068_cc.png"; 
                  $price = get_field('t-shirt_price');
                }elseif($style == 'sticker') {
                  $url = "/wp-content/themes/illustratr-child/noun_998165_cc.png"; 
                  $price = get_field('sticker_price');
                }else {
                  $url="";$price="";
                }
                if($url) echo '<img src="' . $url . '" width="16" alt="'.$style.'" title="'.$style.'"/>';
                if($price) echo '$<span itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="priceCurrency" content="USD" /><span  itemprop="price">' . $price . '</span></span>&nbsp;';

              }
              
            ?>
          </div>
    <?php
}



?>