<?php global $post; ?>
<div onclick="go_url('<?php the_permalink() ?>')" class="media" style="margin-top: 0px; padding-top: 5px; padding-bottom: 5px;border-bottom: 1px dashed #ddd;">
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
            <div class=" col-lg-6">
              <?php if ($post->menu_order > 0) { ?>
                <span style="color: #0033CC; font-weight: bold;" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link"><?php the_title() ?></span>
                <p>
                <span style="color:#6CC2EB; font-weight:bold;">[<?php echo get_post_meta(get_the_ID())['adverts_location'][0]?>]</span>
                <span style="color:grey; font-weight:bold;"><?php echo get_post_meta( get_the_ID(), "adverts_person", true ) ?></span>
                </p>
              <?php }else{ ?>
                <span style="color: #449D44;" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link"><?php the_title() ?></span>
                <p>
                <span style="color:#6CC2EB;">[<?php echo get_post_meta(get_the_ID())['adverts_location'][0]?>]</span>
                <span style="color:grey;"><?php echo get_post_meta( get_the_ID(), "adverts_person", true ) ?></span>
                </p>
              <?php } ?>
                <!-- <a href="<?php the_permalink() ?>" title="<?php esc_attr_e( get_the_title() ) ?>" class="advert-link-wrap media-heading "></a> -->

            </div>
            <div class="col-lg-3">
                <!-- <?php $price = get_post_meta( get_the_ID(), "adverts_price", true ) ?>
                <?php if( $price ): ?>
                    <?php esc_html_e( adverts_price( get_post_meta( get_the_ID(), "adverts_price", true ) ) ) ?>
                <?php endif; ?> -->
            </div>
            <div class="col-lg-3 text-right">
                <?php if ($post->menu_order > 0) { ?>
                    <?php echo $post->menu_order; ?>
                    <img src="<?php bloginfo('template_directory'); ?>/img/hot.gif"/>
                <?php }else{ ?>
                    <?php echo human_time_diff( get_post_time( 'U', false, get_the_ID() ), current_time('timestamp') ) . ' trước'; ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
