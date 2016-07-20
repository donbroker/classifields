<?php include apply_filters( "adverts_template_load", ADVERTS_PATH . 'templates/single.php' ); ?>

<hr/>

<form action="" method="post" style="display:inline">
    <input type="hidden" name="_adverts_action" value="" />
    <input type="hidden" name="_post_id" id="_post_id" value="<?php esc_attr_e($post_id) ?>" />
    <!-- <input class="btn btn-success"type="submit" value="
    <?php _e("Quay lại sửa tin", "adverts") ?>" style="font-size:1.2em;" class="adverts-cancel-unload" /> -->
    <button type="submit" class="btn btn-success adverts-cancel-unload" style="font-size:1.2em;">
        <span class="glyphicon glyphicon-menu-left"></span> 
        <?php _e("Quay lại sửa tin", "adverts") ?>
    </button>
</form>

<form action="" method="post" style="display:inline">
    <input type="hidden" name="_adverts_action" value="save" />
    <input type="hidden" name="_post_id" id="_post_id" value="<?php esc_attr_e($post_id) ?>" />
   <!--  <input  class="btn btn-success" type="submit" value="<?php _e("Publish Listing", "adverts") ?>" style="font-size:1.2em; background-color: orange; border-color: orange;" class="adverts-cancel-unload" /> -->
    <button type="submit" class="btn btn-success adverts-cancel-unload" style="font-size:1.2em; background-color: orange; border-color: orange;">
        <span class="glyphicon glyphicon-pencil"></span> 
        <?php _e("Publish Listing", "adverts") ?>
    </button>
</form>