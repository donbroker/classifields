<!-- Danh ba - khach san - nha hang-->
  <div class="panel panel-default">
    <div class="panel-heading">Danh bạ</div>
      <div class="panel-body">
        <!-- Danh ba khach san -->
          <?php
            $args = array(
                'category_name' => 'khach-san',
                'paged' => 1,
                // 'meta_query' => $meta,
                // 'tax_query' => $taxonomy,
                'orderby' => array( 'date' => 'DESC' )
            );
            $news = new WP_Query( $args );;
            if( $news->have_posts() ): ?>
              <div class="row">
                <div class="text-center">
                  <h4> DANH BẠ TẤT CẢ CÁC KHÁCH SẠN TRONG TỈNH</h4>
                </div>
                <hr>
                <ul class="list-unstyled">
                  <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                      <li class=" col-md-3 col-sm-3 col-xs-12">
                        <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
                        <?php for ($u=0; $u < get_hang_sao(get_the_ID()); $u++) { ?>
                          <img width="16px" height="16px" src="<?php echo get_template_directory_uri();?>/img/star.ico">
                        <?php } ?>
                      </li>
                  <?php endwhile; ?>
                </ul>
              </div>
              <br>
            <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        <!-- end Danh ba khach san -->

        <!-- Danh ba nha hang -->
          <?php
            $args =  array(
                'category_name' => 'nha-hang',
                'paged' => 1,
                // 'meta_query' => $meta,
                // 'tax_query' => $taxonomy,
                'orderby' => array( 'date' => 'DESC' )
            );
            $nha_hang = new WP_Query( $args );;
            if( $nha_hang->have_posts() ): ?>
              <div class="row">
                <div class="text-center">
                  <h4> DANH BẠ TẤT CẢ CÁC NHÀ HÀNG TRONG TỈNH</h4>
                </div>
                <hr>
                <ul class="list-unstyled">
                  <?php while ( $nha_hang->have_posts() ) : $nha_hang->the_post(); ?>
                      <li class=" col-md-2 col-sm-2 col-xs-4">
                        <a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
                      </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        <!-- end Danh ba nha hang -->
      </div>
    </div>
