<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="...">
		<!-- <title>CZSale - Classified Ads Website</title> -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body>
		<?php require(get_template_directory().'/views/nav_top.php'); ?>
		<div class="container-fluit wrapper" style=" margin-top: 20px;">
			<!-- top banner -->
			<?php require(get_template_directory().'/views/top_banner.php'); ?>
			<br>
			<div class="row content">
				<!-- div left -->
				<div class='col-lg-1 hidden-xs hidden-md hidden-sm'>
					<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
					<?php dynamic_sidebar( 'sidebar-5' ); ?>
					<?php else: ?>
					<!-- <aside class="js-qc-scroling">
						<?php get_image_demo(101,550, 'quang cao'); ?>
					</aside> -->
					<?php endif; ?>
				</div>
				<!-- end div left -->
				<!-- div center -->
				<div class="col-lg-10" style="padding: 0;">
					<div class="row hidden-lg hidden-md hidden-sm ">
						<div class=" col-sm-6 col-xs-6">

						</div>
						<div class=" col-sm-6 col-xs-6">
							<a style="margin: -15px 4px 10px 0px; background-color: orange; border-color: orange;" href="<?php echo site_url('/index.php/adverts/add/'); ?>" class="btn btn-success navbar-btn pull-right add-classified-btn" role="button">
								<span class="glyphicon glyphicon-pencil">&nbsp;</span>
							<strong>ĐĂNG TIN MIỄN PHÍ</strong></a>
							<br>
						</div>
					</div>
					<!-- menu second -->
					<nav class="navbar navbar-default hidden-xs" role="navigation">

						<div class="collapse navbar-collapse row" id="czsale-navbar">
							<!-- navbar-left -->
							<!-- <?php if ( has_nav_menu( 'second' ) ) : ?>
							<?php
								wp_nav_menu( array(
									'menu_class'     => 'nav navbar-nav col-lg-4',
									'theme_location' => 'second',
								) );
							?>
							<?php endif; ?> -->
							<!-- end navbar-left -->
							<!-- navbar-right -->
							<div class='col-lg-12'>
								<div class="pull-left">
									<!-- search -->
									<?php
									$locations = get_categories([
									'hide_empty' => false,
									'taxonomy' => 'advert_location',
									'post_type' => 'advert',
									]);
									$advert_categories = get_categories([
									'hide_empty' => false,
									'taxonomy' => 'advert_category',
									'post_type' => 'advert',
									]);
									// var_dump($advert_categories);
									?>
									<form action="<?php echo get_site_url(); ?>/index.php/list-ads/?query=" class="navbar-form navbar-left" role="search" method="get" style="padding: 0px;">
										<div class="form-group">
											<input name="query" type="text" class="form-control" placeholder="Nhập tìm kiếm">
											<select class="form-control" name="advert_category">
												<option value=''>Chọn danh mục</option>
												<?php foreach ($advert_categories as $advert_category) { ?>
												<option value=<?php echo $advert_category->term_id; ?> ><?php echo $advert_category->name; ?></option>
												<?php } ?>
											</select>
											<select class="form-control" name="location">
												<option value=''>Chọn nơi đăng </option>
												<?php foreach ($locations as $location) { ?>
												<option><?php echo $location->name; ?></option>
												<?php } ?>
											</select>
										</div>
										<button type="submit" class="btn btn-success adverts-form-submit">
										<span class="glyphicon glyphicon-search"></span>
										Tìm kiếm</button>
									</form>
									<!-- <div class="col-lg-6">
										<?php if ( is_active_sidebar( 'sidebar-search-1' ) ) : ?>
										<?php dynamic_sidebar( 'sidebar-search-1' ); ?>
										<?php endif; ?>
									</div> -->
									<!-- end search -->
								</div>
								<div class="pull-right">
									<!-- button dang tin -->
									<div class="navbar-right hidden-xs hidden-md hidden-sm ">
										<a style="background-color: orange; border-color: orange;" href="<?php echo site_url('/index.php/adverts/add/'); ?>" class="btn btn-success navbar-btn" role="button">
											<span class="glyphicon glyphicon-pencil">&nbsp;</span><strong>ĐĂNG TIN MIỄN PHÍ</strong>
										</a>
										<a href="<?php echo site_url('/index.php/manage/'); ?>" class="btn btn-success navbar-btn" role="button">
											<span class="glyphicon glyphicon-ok">&nbsp;</span>
										Kiểm tra tin đã đăng</a>
									</div>
									<!-- end button dang tin -->
								</div>
							</div>
							<!-- navbar-right -->
						</div>
					</nav>
					<?php if (!is_home()): ?>
					<div class="row hidden-xs hidden-sm hidden-md">
						<div class="col-lg-12">
							<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
								<?php //if(function_exists('bcn_display')) {bcn_display();}?>
							</div>
						</div>
						<!-- <div class="col-lg-4">
								<div class="pull-right">
								<a href="<?php echo site_url('/index.php/adverts/add/'); ?>" class="btn btn-success navbar-btn" role="button">Đăng tin miễn phí</a>
								<a href="<?php echo site_url('/index.php/manage/'); ?>" class="btn btn-success navbar-btn" role="button">Kiểm tra tin đã đăng</a>
							</div>
						</div> -->
					</div>
					<br>
					<?php endif; ?>
					<div class="row">
						<div class="col-lg-12" style="padding: 0;">
							<div class="col-lg-3 content-left">
								<?php get_sidebar(); ?>
							</div>
