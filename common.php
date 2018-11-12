<?php
$conStr = pg_connect("host=localhost dbname=hr user=education password=knowledge");

function loadNew (){
	$query = "SELECT first_name, last_name FROM seekers WHERE status = 'new'";
	$result = pg_query($query);
	echo "<table>";
	while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
		echo "<tr>";
		echo "<td>" . $line["last_name"] . "</td><td>" . $line["first_name"] . "</td>" .
		"<td> <form method = 'post' action = 'hr_approved.php'> ".
		"<input type = 'hidden' name = 'id' value = '" . $line["seeker_id"] . "'> </input>".
		"<input type = 'submit' value = 'Кадры дают добро'> </input> </form> </td>";
		echo "</tr>";
	}
	echo "</table>";
}

function loadApproved (){
	$query = "SELECT first_name, last_name FROM seekers WHERE status = 'approved'";
	$result = pg_query($query);
	echo "<table>";
	while ($line = pg_fetch_array ($result, null, PGSQL_ASSOC)){
		echo "<tr>";
		echo "<td>" . $line["last_name"] . "</td><td>" . $line["first_name"] . "</td>" .
		"<td> <form method = 'post' action = 'tech_approved.php'> ".
		"<input type = 'hidden' name = 'id' value = '" . $line["seeker_id"] . "'> </input>".
		"<input type = 'submit' value = 'Техники дают добро'> </input> </form> </td>";
		echo "</tr>";
	}
	echo "</table>";
}

class JobSeeker {
	private $id;
	private $status;	
	private $lastName;
	private $firstName;
	
	public function register($lastName, $firstName){
		$status = "new";
		$lastName = pg_escape_string ($lastName);
		$firstName = pg_escape_string ($firstName);
		$guery = "INSERT INTO seekers (first_name, last_name, status)".
			"VALUES ($firstName, $lastName, $status);";
		pg_query($query);
	}
	
	public function reject (){
		if ($status == "hired"){
			throw new Exception ("Сотрудник уже нанят");
		}
		$status = "rejected";
		// update seekers set status = "rejected" where id = ?
	}
	
	public function canBeApproved(){
		return $status == "new";
	}
	
	public function approve (){
		if ($status == "rejected"){
			throw new Exception ("Сотрудник был отклонен");
		}
		if ($status == "hired"){
			throw new Exception ("Сотрудник уже нанят");
		}
		$status = "approve";
		// update seekers set status = "approve" where id = ?
	}
	
	public function hire ($departmentId, $managerId, $salary){
		if ($status == "rejected"){
			throw new Exception ("Сотрудник был отклонен");
		}
		$status = "hired";
		// update seekers set status = "hire" where id = ?
	}
	
	public function loadFormDb ($id){
		//select status, first_name, last_name
		//from seekers
		//where id = ?
	}
}
?>