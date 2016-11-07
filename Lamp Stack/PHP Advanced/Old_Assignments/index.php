<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>

<body>
<h1>Welcome to the Great Number Game!</h1>
<h3>I am thinking of a number between 1 and 100</h3>
<form action="/submit.php" method="post">
    <label for="guess">Take a Guess!</label><br/ >
    <input type="text" name="guess" />
    <input name="submit" type="submit" />
</form>


<?php 
echo $_SESSION['message'];

$_SESSION['message'] = "";
?>




</body>




</html>
