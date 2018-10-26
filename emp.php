<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php
			$con = pg_connect("host=localhost dbname=hr user=education password=knowlege");
			$str = pg_escape_string ($_GET["id"]); // Экранирование символов для защиты от SQL-инъекций
			$guery = "SELECT employee_id, last_name, salary FROM employees where employee_id='{$str}'";
			$result = pg_query($guery);
			while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
				echo $line["employee_id"] . "  " . $line["last_name"] . "  " . $line["salary"] ;
			}
		?>
		
	</body>
</html>