<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			// назначает начальников для сотрудников
			$conStr = pg_connect("host=localhost dbname=hr user=education password=knowledge");
			$id = pg_escape_string ($_POST["id"]);
			$id1 = pg_escape_string ($_POST["id1"]);
			
			$result = pg_query("SELECT first_name, last_name FROM employees WHERE employee_id=" . $id1);
			$line = pg_fetch_array ($result, null, PGSQL_ASSOC);
			
			pg_query("GRANT ALL PRIVILEGES ON DATABASE hr TO education");
			
			$guery = "UPDATE employees SET first_name='" . $line["first_name"].
										"', last_name='" . $line["last_name"].
					 "' WHERE employee_id=" . $id;
			
			$result = pg_query($guery);
			pg_query("DELETE FROM employees WHERE employee_id=" . $id1);
		?>
		
	</body>
</html>