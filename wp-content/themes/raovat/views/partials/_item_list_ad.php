<tr onclick="go_url('<?php the_permalink() ?>')">
  <td class="col-sm-8 col-md-8 col-xs-8" >
    <div class="media">
    <?php $image = adverts_get_main_image( get_the_ID() ) ;?>
      <a class="media-left" href="<?php the_permalink() ?>">
          <?php if($image): ?>
            <img width="32px" height="32px" src="<?php esc_attr_e($image) ?>" alt="" class="media-object" />
        <?php endif; ?>
      </a>
      <div class="media-body">
        <h5 class="media-heading"><a href="<?php the_permalink() ?>" style="color: green"><?php the_title() ?></a></h5>
        <p>
          <span style="color:#6CC2EB; font-weight:bold;">[<?php echo get_post_meta(get_the_ID())['adverts_location'][0]?>]</span>
          <span style="color:grey; font-weight:bold;"><?php echo get_post_meta( get_the_ID(), "adverts_person", true ) ?></span>
        </p>
      </div>
    </div>
  </td>

  <td class="col-sm-1 col-md-1 col-xs-1 text-center" style="vertical-align: middle; color: blue">(<?php echo wpb_get_post_views(get_the_ID()); ?>)</td>
  <?php
  if (get_post_type() == 'advert') {
    if ($hot) {
  ?>
      <td class="col-sm-3 col-md-3 col-xs-3 text-right" style="vertical-align: middle;">
        <?php echo $post->menu_order; ?>
        <img src="<?php bloginfo('template_directory'); ?>/img/hot.gif"/>
      </td>
    <?php }else{ ?>
      <td class="col-sm-3 col-md-3 col-xs-3 text-right" style="vertical-align: middle;"><?php echo human_time_diff( get_post_time( 'U', false, get_the_ID() ), current_time('timestamp') ) . ' trước'; ?></td>
  <?php
    }
  }
  ?>
</tr>
