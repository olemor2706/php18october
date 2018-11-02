<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			// назначает начальников для сотрудников
			$conStr = pg_connect("host=localhost dbname=hr user=education password=knowledge");
			$id = pg_escape_string ($_POST["id1"]);
			
			$guery = "SELECT employee_id, last_name, salary FROM employees WHERE employees_id=" . $id;
			$result = pg_query($guery);
			$line = pg_fetch_array ($result, null, PGSQL_ASSOC);
			$guery = "SELECT employee_id, last_name, salary FROM employees WHERE employees_id=" . $id;
			$result = pg_query($guery);
				
				while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
					echo "<tr>";
					echo "<td> <a href='/emp.php?id=" . $line["employee_id"] . "'>" . $line["last_name"] . "</a></td><td>" . $line["salary"] . "</td>" .
					"<td> <form method = 'post' action = 'naz.php'> ".
					"<input type = 'hidden' name = 'id1' value = '" . $line["employee_id"] . "'> </input>".
					"<input type = 'submit' value = 'Назначить'> </input> </form> </td>";
					echo "</tr>";
				
				echo "</table>";
			}
			
			
		?>
		
	</body>
</html>