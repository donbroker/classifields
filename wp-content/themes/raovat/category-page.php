
  <tr>
	<td class="col-sm-12 col-md-12">
		<div class="media" style="margin-bottom: 5px;">
			<?php
			global $post;
	   	if ( has_post_thumbnail( get_the_ID() ) ) {
	        echo '<a class = "thumbnail pull-left" href="' . get_permalink( get_the_ID() ) . '" title="' . esc_attr( $post->post_title ) . '">';
	        echo get_the_post_thumbnail( get_the_ID(), 'thumbnail', array(
	        	'class' => 'media-object',
	        	'style'=> "width: 72px; height: 72px;"
	        	));
	        echo '</a>';
	    } else {
	    ?>
			<a class="thumbnail pull-left" href="category.html#">
				<img class="media-object" src="http://placehold.it/72x72/e0e0e0" style="width: 72px; height: 72px;" />
			</a>
			<?php } ?>
			<div class="media-body">
				<h4 class="media-heading">
					<a href="<?php the_permalink(get_the_ID());?>">
						<?php echo get_the_title(get_the_ID());?>
					</a>
				</h4>
				<p>
					<small>
						<?php echo wp_trim_words( get_post_field('post_content', get_the_ID()), 20, '...' ); ?>
					</small>
				</p>
			</div>
		</div>
	</td>
</tr>
