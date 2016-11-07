<?php

Session_start();
require_once( 'connection.php' );





  function validate_email( $email ) {
  if ( ! empty( $email ) && filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    return true;
  }

  return false;
}


function process_form($post) {
  
  if ( ! validate_email( $post['email'] ) ) {
    return array( 'status' => 0, 'message' => 'Please make sure email is entered and it is correct' );
}


function validate_data( $post ) {
  

  foreach ( $list as $key ) {
    $fields[$key] = $post[$key];
  }

  $errors = array();

  foreach ( $fields as $field => $data ) {
    if ( empty( $data ) ) {
      $errors[] = 'Please enter your ' . $field;
    }
  }

  if ( empty( $errors ) ) {
    return array( 'status' => 1, 'data' => $fields );
  } else {
    return array( 'status' => 0, 'data' => $errors );
  }
}


function process_database( $post ) {

    if (isset($_POST['first_name'])){
      $first_name = $_POST['first_name'];
   
   }
  
  if (isset($_POST['last_name'])){
      $last_name = $_POST['last_name'];
   }
  if (isset($_POST['email'])){
      $email = $_POST['email']; 
   }

  }
  
  if(isset($_REQUEST['email'])){
        $query = "INSERT INTO people (first_name, last_name, email, registered_date)
          VALUES('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['email']}', NOW())";
}
  if(run_mysql_query($query)){
      $_SESSION['message'] = "The email address you entered";
}
  else{
      $_SESSION['message'] = "The email address you entered";
}
}



function validate_input( $input_name ) {
  global $sent;

  if ( empty( $_POST ) ) {
    return '';
  }

  if ( $sent ) {
    return '';
  }

  return _e( $_POST[$input_name] );
}

?>