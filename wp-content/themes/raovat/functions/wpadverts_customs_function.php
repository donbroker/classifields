<?php

// change location input to selection
// 
 add_filter("adverts_form_load", "locations_to_dropdown");
  function locations_to_dropdown( $form ) {
      if($form["name"] != "advert") {
          return $form;
      }

      $locations_ = get_categories([
        'hide_empty' => false,
        'taxonomy' => 'advert_location',
        'post_type' => 'advert',
        ]);
      $locations = array();
      foreach ($locations_ as $location) {
        array_push($locations, array("value" => $location->name, "text" => $location->name, "depth" => 0));
      }

      foreach($form["field"] as $k => $field) {
          if($field["name"] == "adverts_location") {
              $field["type"] = "adverts_field_select";
              $field["max_choices"] = 1;
              $field["empty_option"] = 1;
              $field["empty_option_text"] = "Chọn nơi đăng";
              $field["options"] = $locations;
              $form["field"][$k] = $field;
              break;
          }
      }

      return $form;
  }


// add taxonomy location into admin site
 // =======================================================
 add_action( 'init', 'create_location' );

  function create_location() {
    $labels = array(
    'name'              => _x( 'Quản lý Tỉnh/Thành phố', 'taxonomy general name' ),
    'singular_name'     => _x( 'Tỉnh/Thành phố', 'taxonomy singular name' ),
    'search_items'      => __( 'Tìm kiếm' ),
    'all_items'         => __( 'Tất cả' ),
    'parent_item'       => __( 'Trực thuộc' ),
    'parent_item_colon' => __( 'Trực thuộc:' ),
    'edit_item'         => __( 'Thay đổi' ),
    'update_item'       => __( 'Thay đổi' ),
    'add_new_item'      => __( 'Thêm mới Tỉnh/Thành phố' ),
    'new_item_name'     => __( 'Tên mới' ),
    'menu_name'         => __( 'Tỉnh/Thành phố' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'advert-location' ),
  );
    
    register_taxonomy( 'advert_location', 'advert', apply_filters('adverts_register_taxonomy', $args, 'advert_location') );
  } 

  //===============================
  // Search ads by category
add_filter( 'adverts_form_load', 'search_by_category_form_load' );
add_filter( 'adverts_list_query', 'search_by_category_query' );
/**
 * Adds category dropdown into search form in [adverts_list].
 * 
 * @param array $form Search form scheme
 * @return array Customized search form scheme 
 */
function search_by_category_form_load( $form ) {
    
    if( $form['name'] != 'search' ) {
        return $form;
    }
    $form['field'][] = array(
        "name" => "advert_category",
        "type" => "adverts_field_select",
        "order" => 10,
        "label" => __("Category", "adverts"),
        "max_choices" => 1,
        "class" => 'form-control',
        "options" => array(),
        "options_callback" => "adverts_taxonomies",
        "meta" => array(
            "search_group" => "visible",
            "search_type" => "half" 
        )
    );
    
    return $form;
}
/**
 * Adds tax_query param to WP_Query
 * 
 * The tax_query is added only if it is in $_GET['advert_category']
 * 
 * @param array $args WP_Query args
 * @return array Modified WP_Query args
 */
function search_by_category_query( $args ) {
    
    if( ! adverts_request( "advert_category" ) ) {
        return $args;
    }
    
    $args["tax_query"] = array(
        array(
            'taxonomy' => 'advert_category',
            'field'    => 'term_id',
            'terms'    => adverts_request( "advert_category" ),
        ),
    );
    
    return $args;
}
// end Search ads by category

// Search ads by location
add_filter( 'adverts_form_load', 'search_by_location_form_load' );
/**
 * Adds location dropdown into search form in [adverts_list].
 * 
 * @param array $form Search form scheme
 * @return array Customized search form scheme 
 */
function search_by_location_form_load( $form ) {
    
    if( $form['name'] != 'search' ) {
        return $form;
    }

    $locations_ = get_categories([
      'hide_empty' => false,
      'taxonomy' => 'advert_location',
      'post_type' => 'advert',
      ]);

    $locations = array();
    array_push($locations, array("value" => '', "text" => '', "depth" => 0));
    foreach ($locations_ as $location) {
      array_push($locations, array("value" => $location->name, "text" => $location->name, "depth" => 0));
    }

    $form['field'][] = array(
        "name" => "location",
        "type" => "adverts_field_select",
        "order" => 10,
        "label" => __("Location", "adverts"),
        "max_choices" => 1,
        "class" => 'form-control',
        "options" => $locations,
        "meta" => array(
            "search_group" => "visible",
            "search_type" => "half" 
        )
    );
    
    return $form;
}
// end Search ads by location

?>