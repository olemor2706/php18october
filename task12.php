<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action = "task12.php" method = "get">
			<input name = "edge"> </input>
			<input type = "submit"> </input>
		</form>
		
		<?php
		function work() {
			if (isset ($_GET["edge"])){	
				$edge = $_GET["edge"];
				if ($edge <= 0 ) {
					echo "Значение edge должно быть положительным";
					return;
				}
				echo 6 * $edge * $edge;
			}
		}
		work();
		?>
		
	</body>
</html>