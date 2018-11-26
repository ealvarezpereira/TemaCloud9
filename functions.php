<?php
function twentyseventeenchild_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Footer Kayku', 'twentyseventeen-child' ),
		'id'            => 'barraquique',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen-child' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section align="left">',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyseventeenchild_widgets_init' );

function register_my_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Menu Footer' ),
      'extra-menu' => __( 'Menu Extra' )
    )
  );
}
add_action( 'init', 'register_my_menus' );