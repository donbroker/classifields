<!-- <div class="media">
    <div class="media-left">
        <?php $image = adverts_get_main_image( get_the_ID() ) ;?>
        <a href="<?php the_permalink() ?>">
        <?php if($image): ?>
            <img width="40px" height="40px" src="<?php esc_attr_e($image) ?>" alt="" class="media-object" />
        <?php endif; ?>
        </a>
    </div>
    <div class="media-body">
        <span title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link"><?php the_title() ?></span>
        <a href="<?php the_permalink() ?>" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link-wrap media-heading "></a>
    </div>
</div> -->
<tr>
  <td class="col-sm-8 col-md-6">
    <div class="media">
    <?php $image = adverts_get_main_image( get_the_ID() ) ;?>
      <a class="media-left" href="<?php the_permalink() ?>">
          <?php if($image): ?>
            <img width="32px" height="32px" src="<?php esc_attr_e($image) ?>" alt="" class="media-object" />
        <?php endif; ?>
      </a>
      <div class="media-body">
        <h5 class="media-heading"><a href="<?php the_permalink() ?>" style="color: green"><?php the_title() ?></a></h5>
        <p><small><?php the_content() ?></small></p>
      </div>
    </div>
  </td>
  <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">
    <?php $price = get_post_meta( get_the_ID(), "adverts_price", true ) ?>
    <?php if( $price ): ?>
        <strong><?php esc_html_e( adverts_price( get_post_meta( get_the_ID(), "adverts_price", true ) ) ) ?></strong></td>
    <?php endif ?>
  <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle; color: blue"><?php echo $item->ad_views; ?></td>
  <?php 
  $hot = true;
  if ($hot) { ?>
    <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;">
      <img src="<?php bloginfo('template_directory'); ?>/img/hot.gif"/>
    </td> 
  <?php }else{ ?>
    <td class="col-sm-1 col-md-1 text-center" style="vertical-align: middle;"><?php echo human_time_diff( strtotime($item->ad_last_updated), current_time('timestamp') ) . ' trước'; ?></td>
  <?php } ?>
</tr>
<!--  -->
<div class="media">
    <div class="media-left">
        <?php $image = adverts_get_main_image( get_the_ID() ) ;?>
        <a href="<?php the_permalink() ?>">
        <?php if($image): ?>
            <img width="32px" height="32px" src="<?php esc_attr_e($image) ?>" alt="" class="media-object" />
        <?php endif; ?>
        </a>
    </div>
    <div class="media-body">
        <div class="row" >
            <div class=" col-lg-7">
                <span style="color: green" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link"><?php the_title() ?></span>
            <a href="<?php the_permalink() ?>" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link-wrap media-heading "></a>
            <small><?php the_content() ?></small>

            </div>
            <div class="col-lg-2">
                <?php $price = get_post_meta( get_the_ID(), "adverts_price", true ) ?>
                <?php if( $price ): ?>
                    <?php esc_html_e( adverts_price( get_post_meta( get_the_ID(), "adverts_price", true ) ) ) ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-3">
                <?php echo human_time_diff( strtotime(get_the_date('Y-m-d')), current_time('timestamp') ) . ' trước'; ?>
            </div>
        </div>
    </div>
</div>