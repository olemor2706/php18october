<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php
			$conStr = pg_connect("host=localhost dbname=hr user=education password=knowledge");
			$id = pg_escape_string ($_POST["id"]);
			$guery = "SELECT * FROM departments WHERE manager_id=" . $id;
			$result = pg_query($guery);
			if (!$line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
				// если для выбранного сотрудника нет подчиненных отделов
				$guery = "SELECT employee_id, last_name, salary FROM employees WHERE manager_id=" . $id;
				$result = pg_query($guery);
				if (!$line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
					// если выбранного сотрудника нет среди менеджеров
					$guery = "DELETE FROM employees WHERE employee_id=". $id;
					$result = pg_query($guery);
					echo "Сотрудник уволен!";
				} else{
					// если выбран менеджер, то на его должность нужно назначить сотрудника из числа подчиненных
					echo "Нужно переназначить начальника!";
					$guery = "SELECT employee_id, last_name, salary FROM employees WHERE manager_id=" . $id;
					$result = pg_query($guery);
					echo "<table>";
					while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
						echo "<tr>";
						echo "<td> <a href='/emp.php?id=" . $line["employee_id"] . "'>" . $line["last_name"] . "</a></td><td>" . $line["salary"] . "</td>" .
						"<td> <form method = 'post' action = 'naz.php'> ".
						"<input type = 'hidden' name = 'id1' value = '" . $line["employee_id"] . "'> </input>".
						"<input type = 'submit' value = 'Назначить'> </input> </form> </td>";
						echo "</tr>";
					}
					echo "</table>";
				}
			}else{
				echo "Ссылка на базу departments!";
			}
			
		?>
		
	</body>
</html>