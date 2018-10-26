<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action = "task2.php" method = "get">
			<input name = "x"> </input>
			<input type = "submit"> </input>
		</form>
		
		<?php
		if (isset ($_GET["x"])){	
			$x = $_GET["x"];
			echo $x + 7;
		}
		?>
		
	</body>
</html>