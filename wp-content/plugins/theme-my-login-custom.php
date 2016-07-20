<?php
function tml_registration_errors( $errors ) {
  // if ( empty( $_POST['first_name'] ) )
    // $errors->add( 'empty_first_name', '<strong>Lỗi</strong>: Vui lòng nhập họ tên  của bạn.' );
  // if ( empty( $_POST['last_name'] ) )
    // $errors->add( 'empty_last_name', '<strong>Lỗi</strong>: Vui lòng nhập tên của bạn.' );
  // if ( empty( $_POST['user_phone'] ) )
    // $errors->add( 'empty_user_phone', '<strong>Lỗi</strong>: Vui lòng nhập số điện thoại.' );

  if ( !empty( $_POST['user_birthday'] ) ) {
    if (preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $_POST['user_birthday'], $matches)) {
        if (!checkdate($matches[2], $matches[1], $matches[3])) {
            $error = true;
            $errors->add( 'empty_user_birthday', '<strong>Lỗi</strong>: Ngày sinh không đúng định dạng.' );
        }
    } else {
        $errors->add( 'empty_user_birthday', '<strong>Lỗi</strong>: Hãy nhập ngày sinh theo dạng dd/mm/yyyy.' );
    }
  }

  return $errors;
}
add_filter( 'registration_errors', 'tml_registration_errors' );


function tml_user_register( $user_id ) {
  if ( !empty( $_POST['first_name'] ) )
    update_user_meta( $user_id, 'first_name', $_POST['first_name'] );
  // if ( !empty( $_POST['last_name'] ) )
    // update_user_meta( $user_id, 'last_name', $_POST['last_name'] );
  if ( !empty( $_POST['user_phone'] ) )
    update_user_meta( $user_id, 'user_phone', $_POST['user_phone'] );
  if ( !empty( $_POST['user_address'] ) )
    update_user_meta( $user_id, 'user_address', $_POST['user_address'] );
  if ( !empty( $_POST['user_gender'] ) )
    update_user_meta( $user_id, 'user_gender', $_POST['user_gender'] );
  if ( !empty( $_POST['user_birthday'] ) )
    update_user_meta( $user_id, 'user_birthday', $_POST['user_birthday'] );
}
add_action( 'user_register', 'tml_user_register' );
add_action( 'personal_options_update', 'tml_user_register' );

?>