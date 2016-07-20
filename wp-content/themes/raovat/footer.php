<div class=" col-lg-3 hidden-xs ">
    <!-- up tin vip -->
    <div class="hidden-xs hidden-sm hidden-md" style="margin-bottom: 5px;">
        <div class="text-center">
            <?php if ( is_active_sidebar( 'sidebar-right-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-right-1' ); ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- end up tin vip -->
    <!-- qc -->
    <div class="hidden-md hidden-sm hidden-xs">
      <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
      <?php dynamic_sidebar( 'sidebar-3' ); ?>
      <?php else:?>
      <!-- <aside class="">
          <?php get_image_demo(258,150, 'quang cao');?>
      </aside> -->
      <?php endif; ?>
    </div>
    <br>
    <!-- end qc -->
    <!-- tin tuc tong hop-->
    <?php
    $args =  array(
    'category_name' => 'tin-tong-hop',
    'posts_per_page' => 5,
    'paged' => 1,
    // 'meta_query' => $meta,
    // 'tax_query' => $taxonomy,
    'orderby' => array( 'date' => 'DESC' )
    );
    $news = new WP_Query( $args );; // exclude category 9
    ?>
    <?php if( $news->have_posts() ): ?>
    <div class="panel panel-default">
        <div class="panel-heading">Tin tức tổng hợp</div>
        <div class="panel-body">
            <table class="table table-hover new-classifieds">
                <tbody>
                    <?php
                    while ( $news->have_posts() ) : $news->the_post();
                    require(get_template_directory().'/views/partials/_item_list_post.php');
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <!-- end tin tuc tong hop-->
    <!-- cam nang dep-->
    <?php
    $args =  array(
    'category_name' => 'cam-nang-dep',
    'posts_per_page' => 5,
    'paged' => 1,
    // 'meta_query' => $meta,
    // 'tax_query' => $taxonomy,
    'orderby' => array( 'date' => 'DESC' )
    );
    $cam_nang_dep = new WP_Query( $args );; // exclude category 9
    ?>
    <?php if( $cam_nang_dep->have_posts() ): ?>
    <div class="panel panel-default">
        <div class="panel-heading">Cẩm nang đẹp</div>
        <div class="panel-body">
            <table class="table table-hover new-classifieds">
                <tbody>
                    <?php
                    while ( $cam_nang_dep->have_posts() ) : $cam_nang_dep->the_post();
                    require(get_template_directory().'/views/partials/_item_list_post.php');
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <!-- end cam nang dep-->
    <!-- cuoi-->
    <?php
    $args = array(
    'category_name' => 'cuoi',
    'posts_per_page' => 5,
    'paged' => 1,
    // 'meta_query' => $meta,
    // 'tax_query' => $taxonomy,
    'orderby' => array( 'date' => 'DESC' )
    );
    $cuoi = new WP_Query( $args );; // exclude category 9
    ?>
    <?php if( $cuoi->have_posts() ): ?>
    <div class="panel panel-default">
        <div class="panel-heading">Truyện cười</div>
        <div class="panel-body">
            <table class="table table-hover new-classifieds">
                <tbody>
                    <?php
                    while ( $cuoi->have_posts() ) : $cuoi->the_post();
                    require(get_template_directory().'/views/partials/_item_list_post.php');
                    endwhile;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <!-- end cuoi-->
    <!-- link -->
    <?php if ( is_active_sidebar( 'sidebar-lk-1' ) ) : ?>
        <div class="hidden-md hidden-sm hidden-xs">
            <?php dynamic_sidebar( 'sidebar-lk-1' ); ?>
        </div>
    <?php endif;?>
    <!-- end link -->
</div>
</div>
</div>
<br>
<!-- row khach san - nha hang-->
<div class="row">
<?php require(get_template_directory().'/views/danh_muc_khach_san_nha_hang.php'); ?>
</div>
<!-- end row khach san - nha hang-->
</div>
<!-- end div center -->
<!-- div right -->
<div class=" col-lg-1 hidden-xs hidden-md hidden-sm">
<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-4' ); ?>
<?php else: ?>
<!-- <aside class="js-qc-scroling">
<?php get_image_demo(101,550, 'quang cao'); ?>
</aside> -->
<?php endif; ?>
</div>
<!-- end div right -->
</div>
</div>
<!--footer-->
<footer class="footer">
<!-- ngan hang lien ket -->
<div class="row hidden-xs">
<br>
<div class="col-lg-12 col-md-12 col-sm-12 hidden-sx">
<?php if ( is_active_sidebar( 'sidebar-foofer-1' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-foofer-1' ); ?>
<?php endif; ?>
</div>
</div>
<!-- end ngan hang lien ket -->
<div class="container">
<div class="row">
<br>
<!-- thong tin cong ty -->
<div class="col-lg-5 col-md-5 col-sm-12 footer-height" style="padding-top: 10px">
<?php if ( is_active_sidebar( 'sidebar-foofer-2' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-foofer-2' ); ?>
<?php endif; ?>
<br>
</div>
<!-- end thong tin cong ty -->
<!-- thong ke -->
<div class="col-lg-4 col-md-4 col-sm-7 footer-height" style="padding-top: 10px">
<?php //if ( is_active_sidebar( 'sidebar-footer-4' ) ) : ?>
<?php //dynamic_sidebar( 'sidebar-footer-4' ); ?>
<?php //endif; ?>
<h4>Thống kê</h4>
<strong>Thành viên:</strong>
<span style="color:red; font-weight: bold;"><?php echo do_shortcode( '[wpstatistics stat=usercount]' );?></span>
<br>
<strong>Online:</strong>
<span style="color:red; font-weight: bold;"><?php echo do_shortcode( '[wpstatistics stat=usersonline]' );?></span> <!-- (
<span style=""><?php echo do_shortcode( '[wpstatistics stat=visits]' );?></span> khách +
<span style=""><?php echo do_shortcode( '[wpstatistics stat=usercount]' );?></span> thành viên +
<span style=""><?php echo do_shortcode( '[wpstatistics stat=spamcount]' );?></span> bots) -->
<strong>Hôm nay:</strong> <span style="color:red; font-weight: bold;"><?php echo do_shortcode( '[wpstatistics stat=visits time=today]' );?></span> lượt xem (<?php echo do_shortcode( '[wpstatistics stat=visitors time=today]' );?> truy cập)
<br>
<strong>Hôm qua:</strong> <span style="color:red; font-weight: bold;"><?php echo do_shortcode( '[wpstatistics stat=visits time=yesterday]' );?></span> lượt xem (<?php echo do_shortcode( '[wpstatistics stat=visitors time=yesterday]' );?> truy cập)
<br>
</div>
<!-- end thong ke -->
<!-- logo cong ty -->
<div class="col-lg-3 col-md-3 col-sm-5 footer-height" style="padding-top: 10px">
<?php if ( is_active_sidebar( 'sidebar-foofer-3' ) ) : ?>
<?php dynamic_sidebar( 'sidebar-foofer-3' ); ?>
<?php endif; ?>
</div>
<br>
<!-- end logo cong ty -->
</div>
</div>
</footer>
<!-- end footer -->
<!-- row copy right-->
<!-- <hr> -->
<div class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-lg-4 col-lg-offset-4">
<?php //if ( is_active_sidebar( 'sidebar-footer-4' ) ) : ?>
<?php //dynamic_sidebar( 'sidebar-footer-4' ); ?>
<?php //endif; ?>
</div>
</div>
<!-- end row copy right -->
<!-- JavaScript -->
<?php wp_footer();?>
</body>
</html>
