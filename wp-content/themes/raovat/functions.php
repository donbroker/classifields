<?php


add_theme_support( 'post-thumbnails' );
/**
 * Register widget area.
 *
 * @since Rao vat 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function raovat_widgets_init() {
  register_sidebar(
    array(
      'name'          => __( '[Left] Vùng danh mục rao vặt', 'raovat' ),
      'id'            => 'sidebar-0',
      'description'   => __( 'Add widgets here to appear in your sidebar.', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  // register_sidebar(
  //   array(
  //     'name'          => __( 'Vùng trên danh mục rao vặt', 'raovat' ),
  //     'id'            => 'sidebar-1',
  //     'description'   => __( 'Add widgets here to appear in your sidebar 1.', 'raovat' ),
  //     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  //     'after_widget'  => '</aside>',
  //     'before_title'  => '<h4 class="widget-title">',
  //     'after_title'   => '</h4>'
  //   )
  // );
  register_sidebar(
    array(
      'name'          => __( '[QC][Left]  Vùng dưới danh mục rao vặt', 'raovat' ),
      'id'            => 'sidebar-2',
      'description'   => __( 'Add widgets here to appear in your sidebar 2.', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s text-center">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Right] Vùng đứng yên bên phải', 'raovat' ),
      'id'            => 'sidebar-3',
      'description'   => __( 'Add widgets here to appear in your sidebar 3.', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s text-center">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Right] Vùng chạy bên phải', 'raovat' ),
      'id'            => 'sidebar-4',
      'description'   => __( 'Thêm hình ảnh quảng cáo bên phải', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="js-qc-scroling widget %2$s text-center">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][left] Vùng chạy bên trái', 'raovat' ),
      'id'            => 'sidebar-5',
      'description'   => __( 'Thêm hình ảnh quảng cáo bên trái', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="js-qc-scroling widget %2$s text-center">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Top][left] Vùng top bên trái', 'raovat' ),
      'id'            => 'sidebar-6',
      'description'   => __( 'Thêm hình ảnh quảng cáo trên top(dưới menu) bên trái', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Top][Right] Vùng top bên phải', 'raovat' ),
      'id'            => 'sidebar-7',
      'description'   => __( 'Thêm hình ảnh quảng cáo bên trên top(dưới menu) phải', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Center] Vùng quảng cáo giữa 1', 'raovat' ),
      'id'            => 'sidebar-center-1',
      'description'   => __( 'Thêm hình quảng cáo vào giữa trang index 1', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="hidden-xs widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Center] Vùng quảng cáo giữa 2', 'raovat' ),
      'id'            => 'sidebar-center-2',
      'description'   => __( 'Thêm hình quảng cáo vào giữa trang index 1', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="hidden-xs widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[Right] Up tin vip', 'raovat' ),
      'id'            => 'sidebar-right-1',
      'description'   => __( 'Đặt image liên kết link up tin vip', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[Footer] Danh sách ngân hàng liên kết', 'raovat' ),
      'id'            => 'sidebar-foofer-1',
      'description'   => __( 'Đặt logo và link liên kết ngân hàng', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s col-lg-1 col-md-1 col-sm-1">',
      'after_widget'  => '</aside>',
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[Footer] Thông tin công ty', 'raovat' ),
      'id'            => 'sidebar-foofer-2',
      'description'   => __( 'Viết thông tin về công ty dưới dạng HTML', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[Footer] Vùng đặt logo công ty', 'raovat' ),
      'id'            => 'sidebar-foofer-3',
      'description'   => __( 'đặt logo công ty', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[QC][Top][Top] Hình qc trên đầu trang', 'raovat' ),
      'id'            => 'sidebar-top-1',
      'description'   => __( 'Đặt hình quảng cáo trên đầu trang, bên cạnh logo', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[Search]Tìm kiếm', 'raovat' ),
      'id'            => 'sidebar-search-1',
      'description'   => __( 'Đặt widget search', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
  register_sidebar(
    array(
      'name'          => __( '[LK]Liên kết trang', 'raovat' ),
      'id'            => 'sidebar-lk-1',
      'description'   => __( 'Đặt widget liên kêt trang', 'raovat' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>'
    )
  );
}
add_action( 'widgets_init', 'raovat_widgets_init' );


function add_theme_scripts() {
  if ( !is_admin() ) {

  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/CZSale.css', array(), '1.1', 'all');
  wp_enqueue_style( 'customs', get_template_directory_uri() . '/css/customs.css', array(), '1.1', 'all');

  wp_enqueue_script( 'jquery_', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', array ());
  wp_enqueue_script( 'boostrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ());
  wp_enqueue_script( 'slide_', get_template_directory_uri() . '/js/jquery.slides.min.js', array ());
  wp_enqueue_script( 'matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', array ());
  wp_enqueue_script( 'fixed_scroll', get_template_directory_uri() . '/js/jquery-scrolltofixed-min.js', array ());
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/CZSale.js', array ());
  wp_enqueue_script( 'customs', get_template_directory_uri() . '/js/customs.js', array ());


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// menu
//
register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'raovat' ),
  'second'  => __( 'Second Menu', 'raovat' ),
  'third'  => __( 'Third Menu', 'raovat' ),
  // 'menu-footer-1'  => __( 'Footer Menu 1', 'raovat' ),
  // 'menu-footer-2'  => __( 'Footer Menu 2', 'raovat' ),
  // 'menu-footer-3'  => __( 'Footer Menu 3', 'raovat' ),
) );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}
// end menu

//
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}


// The code below you can paste in your theme functions.php or create
// new plugin and paste the code there.
add_filter("adverts_currency_list", "add_adverts_currency");
/**
 * Add new currency to the list
 *
 * @var $list Array list of currencies
 * @return Array updated list of currencies
 */
function add_adverts_currency($list) {

    $list[] = array(
        "code"=>"VND", // ISO 4217 currency code, see http://en.wikipedia.org/wiki/ISO_4217
        "sign"=>"đ", // currency prefix or postfix
        "label"=>"Việt nam đồng" // currency long name
    );

    return $list;
}

// post view
require 'functions/post_views.php';
require 'functions/numeric_bootstrap_posts_nav.php';

function get_hang_sao($postID){
    $count_key = 'hang_sao';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return 0;
    }
    return (int)$count;
}


function get_image_demo($w, $h, $text = null){
  if($text){
    echo '<img src="https://placeholdit.imgix.net/~text?txtsize=26&amp;txt='.$text.'&amp;w='.$w.'&amp;h='.$h.'">';
  }else{
    echo '<img src="https://placeholdit.imgix.net/~text?txtsize=26&amp;txt='.$w.'%C3%97'.$h.'&amp;w='.$w.'&amp;h='.$h.'">';
  }
}


// phan trang
//attach our function to the wp_pagenavi filter
add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );

//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';

    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li><a",$out);
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li><span",$out);
    $out = str_replace("</span>","</span></li>",$out);
    $out = str_replace("</div>","",$out);

    return '<div class="pagination pagination-centered">
            <ul>'.$out.'</ul>
        </div>';
}
// end phan trang
//
function my_unregister_widgets() {
    unregister_widget( 'bcn_widget' );
    unregister_widget( 'theme-my-login' );
    unregister_widget( 'TheChampVerticalCounter' );
    unregister_widget( 'TheChampHorizontalCounter' );
    unregister_widget( 'TheChampVerticalSharing' );
    unregister_widget( 'TheChampHorizontalSharing' );
    unregister_widget( 'TheChampLogin' );
}
add_action( 'widgets_init', 'my_unregister_widgets', 11 );

function unregister_default_widgets() {
     unregister_widget('WP_Widget_Pages');
     unregister_widget('WP_Widget_Calendar');
     unregister_widget('WP_Widget_Archives');
     // unregister_widget('WP_Widget_Links');
     unregister_widget('WP_Widget_Meta');
     // unregister_widget('WP_Widget_Search');
     // unregister_widget('WP_Widget_Text');
     unregister_widget('WP_Widget_Categories');
     unregister_widget('WP_Widget_Recent_Posts');
     unregister_widget('WP_Widget_Recent_Comments');
     unregister_widget('WP_Widget_RSS');
     unregister_widget('WP_Widget_Tag_Cloud');
     unregister_widget('WP_Nav_Menu_Widget');
 }
 add_action('widgets_init', 'unregister_default_widgets', 11);

// wpadverts function
require 'functions/wpadverts_customs_function.php';

?>
