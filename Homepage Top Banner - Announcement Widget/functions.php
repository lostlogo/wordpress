// Homepage Notice Banner
register_sidebar( array(
    'name'         => __( 'Notice Banner', 'fltext' ),
    'id'           => 'very-top-home',
    'description'  => __( 'Notice Banner - All Site', 'fltext' ),
    'before_widget'=> '<div id="%1$s" class="widget-notice">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title'  => '',
) );
