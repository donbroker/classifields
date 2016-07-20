<?php if ( is_home() ) : ?>
<!-- form search mobile-->
<div class="panel panel-success hidden-lg hidden-md hidden-sm" style="padding: 0 10px;">
    <div class="panel-body text-right">
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
        <form action="index.php/list-ads/?query=" class="navbar-form navbar-left" role="search" method="get" style="padding: 0px;">
            <div class="form-group">
                <input name="query" type="text" class="form-control" placeholder="Nhập tìm kiếm">
                <br>
                <select class="form-control" name="advert_category">
                    <option value=''>Chọn danh mục</option>
                    <?php foreach ($advert_categories as $advert_category) { ?>
                    <option value=<?php echo $advert_category->term_id; ?> ><?php echo $advert_category->name; ?></option>
                    <?php } ?>
                </select>
                <br>
                <select class="form-control" name="location">
                    <option value=''>Chọn nơi đăng </option>
                    <?php foreach ($locations as $location) { ?>
                    <option><?php echo $location->name; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success adverts-form-submit">
            <span class="glyphicon glyphicon-search"></span>
            Tìm kiếm</button>
        </form>
    </div>
</div>
<!-- end form search mobile-->
<?php endif; ?>
<!-- nut dang ky-->
<div class="panel hidden-lg hidden-xs">
    <div class="panel-body text-right">
        <a style="background-color: orange; border-color: orange;" href="<?php echo site_url('/index.php/adverts/add/'); ?>" class="btn btn-success navbar-btn" role="button">
            <span class="glyphicon glyphicon-pencil">&nbsp;</span><strong>ĐĂNG TIN MIỄN PHÍ</strong>
        </a>
        <a href="<?php echo site_url('/index.php/manage/'); ?>" class="btn btn-success navbar-btn" role="button">
            <span class="glyphicon glyphicon-ok">&nbsp;</span>
        Kiểm tra tin đã đăng</a>
    </div>
</div>
<!-- end nut dang ky-->
<!-- menu rao vat -->
<div class="panel panel-success">
    <!-- <div class="panel-heading">Menu</div> -->
    <div class="panel-body">
        <?php
        if ( has_nav_menu( 'second' ) ) :
            wp_nav_menu( array('theme_location' => 'third'));
        endif;
       ?>
    </div>
</div>
<!-- end menu rao vat -->
<!-- danh muc rao vat -->
<div class="panel panel-success hidden-xs hidden-sm hidden-md ">
    <div class="panel-heading">Danh mục</div>
    <div class="panel-body">
        <?php if ( is_active_sidebar( 'sidebar-0' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-0' ); ?>
        <?php endif; ?>
    </div>
</div>
<!-- quang cao -->
<div class="hidden-xs hidden-md hidden-sm">
    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
    <?php else:?>
    <!-- <aside class="">
        <?php get_image_demo(258,150, 'quang cao');?>
    </aside> -->
    <?php endif; ?>
</div>
