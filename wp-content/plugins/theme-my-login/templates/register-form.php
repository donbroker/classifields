<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="tml tml-register" id="theme-my-login<?php $template->the_instance(); ?>">
	<?php //$template->the_action_template_message( 'register' ); ?>
	<?php $template->the_errors(); ?>
	<form name="registerform" id="registerform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'register', 'login_post' ); ?>" method="post">
		<?php if ( 'email' != $theme_my_login->get_option( 'login_type' ) ) : ?>
		<legend>Thông tin đăng nhập</legend>
		<p class="tml-user-login-wrap">
			<label for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Username', 'theme-my-login' ); ?></label>
			<span style="color:red;">*</span>
			<input  type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="input form-control" value="<?php $template->the_posted_value( 'user_login' ); ?>" size="20" />
		</p>
		<?php endif; ?>

		<p class="tml-user-email-wrap">
			<label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'E-mail', 'theme-my-login' ); ?></label>
			<span style="color:red;">*</span>
			<input  type="text" name="user_email" id="user_email<?php $template->the_instance(); ?>" class="form-control input" value="<?php $template->the_posted_value( 'user_email' ); ?>" size="20" />
		</p>

		<p class="tml-registration-confirmation" id="reg_passmail<?php $template->the_instance(); ?>"><?php echo apply_filters( 'tml_register_passmail_template_message', __( 'Registration confirmation will be e-mailed to you.', 'theme-my-login' ) ); ?></p>

		<?php do_action( 'register_form' ); ?>

		<br>
		<legend>Thông tin cá nhân</legend>
		<p>
		<label for="first_name<?php $template->the_instance(); ?>">Họ và tên</label>
		<!-- <span style="color:red;">*</span> -->
		<input type="text" name="first_name" id="first_name<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'first_name' ); ?>" class="form-control input" />
		</p>

		<!-- <p>
		<label for="last_name<?php $template->the_instance(); ?>">Tên</label>
		<span style="color:red;">*</span>
		<input type="text" name="last_name" id="last_name<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'last_name' ); ?>" class="form-control input" />
		</p> -->

		<p>
		<label for="user_phone<?php $template->the_instance(); ?>">Số điện thoại</label>
		<!-- <span style="color:red;">*</span> -->
		<input type="text" name="user_phone" id="user_phone<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'user_phone' ); ?>" class="form-control input" />
		</p>

		<p>
		<label for="user_address<?php $template->the_instance(); ?>">Địa chỉ</label>
		<input type="text" name="user_address" id="user_address<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'user_address' ); ?>" class="form-control input" />
		</p>

		<p>
		<label for="user_gender<?php $template->the_instance(); ?>">Giới tính</label>
		<!-- <input type="text" name="user_gender" id="user_gender<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'user_gender' ); ?>" class="form-control input" /> -->
			<fieldset>
			  <!-- <legend>Giới tính</legend> -->
			  <input type="radio" name="user_gender" id="user_gender-m" value="<?php $template->the_posted_value( 'user_gender' ); ?>">
			  <label for="user_gender-m">Nam</label>
			  <input type="radio" name="user_gender" id="user_gender-f" value="<?php $template->the_posted_value( 'user_gender' ); ?>">
			  <label for="user_gender-f">Nữ</label>
			</fieldset>
		</p>

		<p>
		<label for="user_birthday<?php $template->the_instance(); ?>">Ngày sinh</label>
		<input type="datetime" name="user_birthday" id="user_birthday<?php $template->the_instance(); ?>" value="<?php $template->the_posted_value( 'user_birthday' ); ?>" class="form-control input" />
		</p>

		<p class="tml-submit-wrap">
			<input class="btn btn-success" type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Register', 'theme-my-login' ); ?>" />
			<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'register' ); ?>" />
			<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
			<input type="hidden" name="action" value="register" />
		</p>
	</form>

	<?php $template->the_action_links( array( 'register' => false ) ); ?>
	<hr>
	<?php echo do_shortcode("[wordpress_social_login]");?>
</div>
