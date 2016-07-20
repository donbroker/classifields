<!-- <div class="row hidden-xs " style="background-image: linear-gradient(90deg, #5CB85C, #FFF710);"> -->
<div class="row hidden-xs ">
  <div class="col-lg-2">
    <!-- <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/czsale-logo.png" alt="CZSale" title="CZSale"></a> -->
    <?php if ( is_active_sidebar( 'sidebar-foofer-3' ) ) : ?>
      <?php dynamic_sidebar( 'sidebar-foofer-3' ); ?>
      <?php endif; ?>
  </div>
  <div class="col-lg-10">
    <?php if ( is_active_sidebar( 'sidebar-top-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-top-1' ); ?>
    <?php else:?>
       <!--  <aside class="">
          <?php get_image_demo(1050,122, 'quang cao');?>
        </aside> -->
      <?php endif; ?>
  </div>
</div>
<?php //require(get_template_directory().'/views/top_banner.php'); ?>
<nav class="navbar navbar-default navbar-fixed-top-custom">
  <div class="col-lg-10  col-lg-offset-1">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-md hidden-sm hidden-lg" href="<?php echo get_home_url(); ?>" style="margin-top: 8px;">Menu</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <?php if ( has_nav_menu( 'primary' ) ) : ?>
          <?php
            wp_nav_menu( array(
              'menu_class'     => 'nav navbar-nav navbar-left',
              'theme_location' => 'primary',
            ) );
          ?>
      <?php endif; ?>
      <ul class="nav navbar-nav navbar-right">
      <?php if (!is_user_logged_in ()) :?>
        <li><?php wp_register() ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đăng Nhập</a>
          <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
            <li>
                <div class="row">
                  <div class="col-md-12">
                   <?php wp_login_form(); ?>
                  </div>
                </div>
              </li>
            <li role="separator" class="divider"></li>
            <li>
              <div class="form-group">
              <?php echo do_shortcode("[wordpress_social_login]");?>
              </div>
            </li>
          </ul>
        </li>
        <?php else: $current_user = wp_get_current_user(); ?>
          <li>
          <a href="<?php echo get_edit_user_link(); ?>">Xin chào: <?php echo $current_user->user_login ?></a></li>
          <li> <a href="<?php echo  wp_logout_url();?>">Đăng xuất</a></li>
        <?php endif ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
