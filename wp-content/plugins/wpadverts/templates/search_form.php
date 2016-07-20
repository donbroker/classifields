<div class="adverts-options">
    <form class="form" action="" method="get">
        
        <?php if( !empty( $fields_visible ) ): ?>
        <div class="adverts-search">
            <?php foreach( $fields_visible as $field ): ?>
            <div class="advert-input <?php esc_attr_e( 'advert-input-type-' . $field['meta']['search_type'] ) ?>">
                <?php call_user_func( adverts_field_get_renderer($field), $field) ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        
        <?php if( !empty( $fields_hidden ) ): ?>
        <div class="adverts-search adverts-search-hidden">
            <?php foreach( $fields_hidden as $field ): ?>
            <div class="advert-input <?php esc_attr_e( 'advert-input-type-' . $field['meta']['search_type'] ) ?>">
                <?php call_user_func( adverts_field_get_renderer($field), $field) ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <br>
        <div class="row">
            <div class="col-lg-12 text-center adverts-options-right adverts-js">
                <?php if( !empty( $fields_hidden ) ): ?>
                <a href="#" class="adverts-button-small"><span class="adverts-icon-filter"></span> <?php _e("Filters ...", "adverts") ?></a>
                <?php endif; ?>
                <a href="#" class="btn btn-primary adverts-form-submit"><span class="adverts-icon-search"><span> <?php _e("SEARCH", "adverts") ?></a>
            </div>
        </div>
        <div class="adverts-options-fallback adverts-no-js">
            <input type="submit" value="<?php _e("Filter Results", "adverts") ?>" />
        </div>
    </form>
</div>