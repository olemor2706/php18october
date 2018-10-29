<?php
$conStr = pg_connect("host=localhost dbname=hr user=education password=knowledge");

function empList ($connect){
	$con = $connect;
	$guery = "SELECT employee_id, last_name, salary FROM employees";
	$result = pg_query($guery);
	echo "<table>";
	while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
		echo "<tr>";
		echo "<td> <a href='/emp.php?id=" . $line["employee_id"] . "'>" . $line["last_name"] . "</a></td><td>" . $line["salary"] . "</td>" .
		"<td> <form method = 'post' action = 'dismiss.php'> ".
		"<input type = 'hidden' name = 'id' value = '" . $line["employee_id"] . "'> </input>".
		"<input type = 'submit' value = 'Уволить'> </input> </form> </td>";
		echo "</tr>";
	}
	pg_close($con);
	echo "</table>";
}

function emp ($connect)	{
	$con = $connect;
	$str = pg_escape_string ($_GET["id"]); // Экранирование символов для защиты от SQL-инъекций
	$guery = "SELECT employee_id, last_name, salary FROM employees where employee_id='{$str}'";
	$result = pg_query($guery);
	while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
		echo $line["employee_id"] . "  " . $line["last_name"] . "  " . $line["salary"] ;
	}	
}


	
?>