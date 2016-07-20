<?php 
/* 
 * included by adverts/includes/shortcodes.php shortcodes_adverts_list() 
 * 
 * @var $loop WP_Query
 * @var $query string
 * @var $location string
 * @var $paged int
 */
?>

<?php 
if( $search_bar == "enabled" ): ?>
    <!--  -->
    <?php //require('search_form.php'); ?>
    <!--  -->
<?php endif; ?>

<div class="adverts-list col-lg-12">
    <?php if( $loop->have_posts() ): ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php include apply_filters( "adverts_template_load", ADVERTS_PATH . 'templates/list-item.php' ) ?>
    <?php endwhile; ?>
    <?php else: ?>
    <div class="adverts-list-empty"><em><?php _e("There are no ads matching your search criteria.", "adverts") ?></em></div>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>

<div class="adverts-pagination">
    <?php echo paginate_links( array(
        'base' => $paginate_base,
	'format' => $paginate_format,
	'current' => max( 1, $paged ),
	'total' => $loop->max_num_pages,
        'prev_next' => false
    ) ); ?>
</div>