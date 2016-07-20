<tr>
  <td class="col-sm-8 col-md-6">
    <div class="media">
    <?php $image = adverts_get_main_image( get_the_ID() ) ;?>
      <a class="media-left" href="<?php the_permalink() ?>">
          <?php if($image): ?>
            <img width="40px" height="40px" src="<?php esc_attr_e($image) ?>" alt="" class="media-object" />
        <?php endif; ?>
      </a>
      <div class="media-body">
        <h5 class="media-heading"><a href="<?php the_permalink() ?>" style="color: green"><?php the_title() ?></a></h5>
        <p><?php echo wp_trim_words( get_post_field('post_content', get_the_ID()), 10, '...' ); ?> </p>
      </div>
    </div>
  </td>
</tr>