<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php
			$con = pg_connect("host=localhost dbname=hr user=education password=knowlege");
			$guery = "SELECT employee_id, last_name, salary FROM employees";
			$result = pg_query($guery);
			echo "<table>";
			while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
				echo "<tr>";
				echo "<td> <a href='/emp.php?id=" . $line["employee_id"] . "'>" . $line["last_name"] . "</a></td><td>" . $line["salary"] . "</td>";
				echo "</tr>";
			}
			pg_close($con);
			echo "</table>";
			
			
		?>
			<form action = "add.php" method = "get">
				<input type = "text" name = "last_name"> last_name</input> <br>
				<input type = "text" name = "email"> email </input> <br>
				<input type = "text" name = "hire_date"> hire_date </input> <br>
				<input type = "submit" value = "ADD"> </input>
			</form>
	</body>
</html>