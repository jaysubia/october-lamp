<?php session_start();

if(!isset($_SESSION['number'])) {
   $_SESSION['number'] = rand(1,100);
}
$number = $_SESSION['number'];

// var_dump($_SESSION);
// var_dump($_POST);
// die();
if(isset($_POST["guess"])){
	$guess = intval($_POST['guess']);
    if ($guess < $number){ 
		$_SESSION['message']= "<img src=space.jpg>";
	} elseif ($guess > $number) {       
		$_SESSION['message']= "<img src=higher.jpg>";
	} elseif ($guess == $number) {      
    	$_SESSION['message'] = "<img src=win.jpg>" ."<form method='get' action='http://localhost/index.php'><button type='submit'>Play Again</button></form>"; 
    }
}
header('Location: index.php');

?>