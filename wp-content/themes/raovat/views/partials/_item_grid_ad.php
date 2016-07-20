<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 san_pham_moi_index">
  <div class="thumbnail">
   <?php $image = adverts_get_main_image( get_the_ID() ) ;?>
    <a href="<?php the_permalink() ?>">
    <?php if($image): ?>
            <img width="150px" height="150px" src="<?php esc_attr_e($image) ?>" alt="" class="media-object" />
        <?php endif; ?>
    </a>
    <div class="caption">
      <h5><a href="<?php the_permalink() ?>" style="color: green"><?php the_title() ?></a></h5>
      <p class="price"><?php esc_html_e( adverts_price( get_post_meta( get_the_ID(), "gia", true ) ) ) ?></p>
    </div>
  </div>
</div>
