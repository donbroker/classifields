<?php
/**
* The template for displaying pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that
* other "pages" on your WordPress site will use a different template.
*
* @package WordPress
* @subpackage Rao_Vat
* @since Rao Vat 1.0
*/
get_header(); ?>
<div class="col-lg-6 content-right">
  <div class="panel panel-success">
    <div class="panel-heading"><?php echo single_cat_title( '', false ); ?></div>
    <div class="panel-body">
      <div class="row classifieds-table">
        <div class="col-lg-12">
          <table class="table table-hover">
            <tbody>
              <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
              // Include the page content template.
                get_template_part( 'category', 'page' );
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
              // End the loop.
              endwhile;
              ?>
            </tbody>
          </table>
          <div class="text-center">
            <?php echo numeric_bootstrap_posts_nav(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>