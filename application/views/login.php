<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>
</body>
	<?php
		if (isset($sucess)) {
			echo $sucess;
		}
		
	?>
	<form action="checking" method="post">
		<label>your name</label><br>
		<input type="text" name="name"><br>
		<label>your email</label><br>
		<input type="email" name="email"><br>
		<input type="submit" name="submit" value="login"><br>
	</form>
</body>
</html>