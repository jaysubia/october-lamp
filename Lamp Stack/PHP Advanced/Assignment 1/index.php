<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

	<div id="container">
	

	<form action='submit.php' method='post'>
	<h1>Your Name:</h1><input class="content" type='text' name='name'/>
	<h1>Dojo Location:</h1>
				<select class="content" name='location'>
					<option value='Mountain View'>Mountain View</option>
					<option value='Burbank'>Burbank</option>
					<option value='Seattle'>Seattle</option>
					<option value='New York'>New York</option>
				</select>
	<h1>Favorite Language:</h1>
				<select class="content" name='language'>
					<option value='HTML'>HTML</option>
					<option value='CSS'>CSS</option>
					<option value='JS'>Java Script</option>
					<option value='PHP'>PHP</option>
				</select>

	<h1>Comment (optional):</h1><textarea name="comment" rows="10" cols="30" class="content"></textarea> 

	<input class="content" type='submit' value='submit survey'/>
	</form>

	</div>
	
</body>
</html>