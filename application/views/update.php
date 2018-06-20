<!DOCTYPE html>
<html>
<head>
	<title>updating</title>
</head>
<body>
	<form action="/dev/codeigniter/auth/updating/<?php echo $edit->id ?>" method="post">
		<label>your previous name</label><br>
		<input type="text" name="name" value="<?php echo $edit->name ?>"><br>
		<label>your previous mail</label><br>
		<input type="email" name="email" value="<?php echo $edit->email ?>"><br><br>
		<input type="submit" name="update" value="update"><br>
	</form>
</body>
</html>