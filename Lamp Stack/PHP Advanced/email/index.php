<?php


require_once( 'functions.php' );


$errors = array();
$sent = false;


if ( ! empty( $_POST ) ) {
	$process = process_form( $_POST );

	if ( ! empty( $process['message'] ) ) {
		$errors[] = $process['message'];
	} else if ( ! empty( $process['errors'] ) ) {
		$errors = $process['errors'];
	} else {
		$sent = true;
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
    <link rel="stylesheet" href="general.css">
  	<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
  <body>
    <div class="main-content">
			<div class="form">
	    	<form class="form-validation" method="post" action="">
	        <div class="form-title-row">
	          <h1>Registration</h1>
	        </div>
	        <?php if ( ! empty( $errors ) ) : ?>
	        <div class="errors">
	        	<p class="bg-danger"><?php echo implode( '.</p><p class="bg-danger">', $errors ); ?>.</p>
	        </div>
	        <?php elseif ( $sent ) : ?>
	        <div class="success">
	          <p class="bg-success">You have been registered!</p>
	        </div>
	        <?php endif; ?>
	        <div class="form-row form-input-name-row">
	          <label>
	            <span>First Name</span>
	            <input id="first_name" type="text" name="first_name" placeholder="e.g. John"
								   value="<?php echo validate_input('name'); ?>">
	          </label>
	        </div>
	        <div class="form-row form-input-name-row">
	          <label>
	            <span>Last Name</span>
	            <input id="last_name" type="text" name="last_name" placeholder="e.g. Doe"
								   value="<?php echo validate_input('name'); ?>">
	          </label>
	        </div>

	        <div class="form-row form-input-email-row">
	          <label>
	            <span>Your email</span>
	            <input id="email" type="email" name="email" placeholder="myemail@domain.com"
								   value="<?php echo validate_input('email'); ?>">
	          </label>
	        </div>

	        <div class="form-row">
	          <button type="submit">Submit Form</button>
	        </div>
	    	</form>
			</div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>
