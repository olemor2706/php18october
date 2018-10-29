<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php
			include 'db.php';
			empList($conStr);
			
		?>
			<form action = "add.php" method = "get">
				<input type = "text" name = "last_name"> last_name</input> <br>
				<input type = "text" name = "email"> email </input> <br>
				<input type = "text" name = "hire_date"> hire_date </input> <br>
				<input type = "submit" value = "ADD"> </input>
			</form>
	</body>
</html>