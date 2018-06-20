<!DOCTYPE html>
<html>
<head>
	<title>users</title>
</head>
<body>
	<table border="1">
		<tr>
			<th> id </th>
			<th> name </th>
			<th> succses </th>
			<th> Action </th>
		</tr>
		<tr>
			<td><?php echo $sucess->id ?></td>
			<td><?php echo $sucess->name ?></td>
			<td><?php echo $sucess->email ?></td>
			<td><a href="/dev/codeigniter/auth/editing/<?php echo $sucess->id ?>">Edit</a></td>
		</tr>
		
	</table>
</body>
</html>

