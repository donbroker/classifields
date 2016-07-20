<?php //if ( is_home() ) : ?>
          <!-- top banner ads -->
  <div class="row hidden-xs" style="margin-bottom: -15px;">
    <div class="col-lg-6 text-right">
      <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-6' ); ?>
      <?php else:?>
        <!-- <aside class="">
          <?php get_image_demo(629,120, 'quang cao');?>
        </aside> -->
      <?php endif; ?>
    </div>
    <div class="col-lg-6 text-left">
      <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
          <?php dynamic_sidebar( 'sidebar-7' ); ?>
      <?php else:?>
        <!-- <aside class="">
          <?php get_image_demo(629,120, 'quang cao');?>
        </aside> -->
      <?php endif; ?>
    </div>
  </div>
<!-- end top banner -->
<?php //endif; ?>