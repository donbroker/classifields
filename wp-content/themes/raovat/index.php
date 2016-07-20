<?php get_header(); ?>
		<div class="col-lg-6 content-right">
        <?php if ( is_home() ) : ?>
            <!-- huong dan -->
            <div class="panel panel-success hidden-md hidden-sm hidden-xs">
                <div class="panel-heading">Hướng dẫn</div>
              <div class="panel-body">
               <?php
                        $args = apply_filters( "adverts_list_query", array(
                            'category_name' => 'huong-dan',
                            'posts_per_page' => 5,
                            'paged' => 1,
                            'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' )
                        ));
                        $produces_new = new WP_Query( $args );
                    ?>
                    <?php   if( $produces_new->have_posts() ): ?>
                                <ul>
                                    <?php while ( $produces_new->have_posts() ) : $produces_new->the_post(); ?>
                                        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
              </div>
            </div>
            <!-- end huong dan -->

            <!-- san pham mơi -->
            <div class="panel panel-success">
                <div class="panel-heading">Sản phẩm mới</div>
              <div class="panel-body">
                <div class="row top-classifieds">
                    <?php
                        $args = apply_filters( "adverts_list_query", array(
                            'category_name' => 'san-pham-moi',
                            'posts_per_page' => 8,
                            'paged' => 1,
                            'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' )
                        ));
                        $produces_new = new WP_Query( $args );
                    ?>
                    <?php   if( $produces_new->have_posts() ):
                                while ( $produces_new->have_posts() ) : $produces_new->the_post();
                                    require(get_template_directory().'/views/partials/_item_grid_ad.php');
                                endwhile;
                            endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
              </div>
            </div>
            <!-- end san pham mơi -->

            <!-- rao vat hot -->
            <div class="panel panel-success tin_vip">
                <div class="panel-heading">Tin rao VIP</div>
              <div class="panel-body">
                <table class="table table-hover new-classifieds">
                    <tbody>
                        <?php
                            $args = apply_filters( "adverts_list_query", array(
                                'post_type' => 'advert',
                                'post_status' => 'publish',
                                'posts_per_page' => 10,
                                'paged' => 1,
                                'menu_order' => 999, // to get 1,2,3,4,5
                                'orderby' => array(
                                    'menu_order' => 'DESC',
                                    'date' => 'DESC'
                                )
                            ));


                            $ads_new = new WP_Query( $args );
                        ?>
                         <?php if( $ads_new->have_posts() ): ?>
                            <?php
                            while ( $ads_new->have_posts() ) : $ads_new->the_post();
                                $hot = true;
                                // if (get_post_field( 'menu_order', $post_id) != 0) {
                                    # code...
                                    require(get_template_directory().'/views/partials/_item_list_ad.php');
                                // }
                            endwhile;
                            ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </tbody>
                </table>
              </div>
            </div>
            <!-- end rao vat hot -->

            <!-- quang cao giua 1-->
            <?php if ( is_active_sidebar( 'sidebar-center-1' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-center-1' ); ?>
            <?php else:?>
                <!-- <aside class="hidden-xs">
                  <?php get_image_demo(519,120, 'quang cao');?>
                </aside> -->
            <?php endif; ?>
            <br>
            <!-- end quang cao giua 1-->

            <!-- rao vat binh thuong -->
            <div class="panel panel-success tin_binh_thuong">
                <div class="panel-heading">Tin rao vặt mới</div>
              <div class="panel-body">
                <table class="table table-hover new-classifieds">
                    <tbody>
                        <?php
                        $args = apply_filters( "adverts_list_query", array(
                            'post_type' => 'advert',
                            'post_status' => 'publish',
                            'posts_per_page' => 10,
                            'paged' => 1,
                            // 's' => $query,
                            'menu_order' => 0,
                            'orderby' => array( 'menu_order' => 'DESC', 'date' => 'DESC' )
                        ));
                        $ads_new = new WP_Query( $args );; // exclude category 9
                        ?>
                         <?php if( $ads_new->have_posts() ): ?>
                            <?php
                            while ( $ads_new->have_posts() ) : $ads_new->the_post();
                                $hot = false;
                                require(get_template_directory().'/views/partials/_item_list_ad.php');
                            endwhile;
                            ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </tbody>
                </table>
              </div>
            </div>
            <!-- end rao vat binh thuong -->

            <!-- quang cao giua 2-->
            <?php if ( is_active_sidebar( 'sidebar-center-2' ) ) : ?>
                <?php dynamic_sidebar( 'sidebar-center-2' ); ?>
            <?php else:?>
                <!-- <aside class="hidden-xs">
                  <?php get_image_demo(519,120, 'quang cao');?>
                </aside> -->
            <?php endif; ?>
            <br>
            <!-- end quang cao giua 2-->
        <?php endif; ?>
		</div>
<?php get_footer(); ?>
