<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php
			$con = pg_connect("host=localhost dbname=hr user=education password=knowlege");
			$s1 = pg_escape_string ($_GET["last_name"]);
			$s2 = pg_escape_string ($_GET["email"]);
			$s3 = pg_escape_string ($_GET["hire_date"]);
			$guery = "insert into employees (last_name, email, hire_date) Values ('" . $s1. "', '" . $s2 . "', '" . $s3 ."')";
			pg_query($guery);
			//header ('location:/'); 
		?>
		
	</body>
</html>