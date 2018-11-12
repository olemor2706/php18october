<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		
		<?php
			// список всех соискателей по статусам
			include 'common.php';
		?>
		<h3>Добавить</h3>
		<form action = "register.php" method = "POST">
				<input type = "text" name = "first_name"> last_name</input> <br>
				<input type = "text" name = "last_name"> last_name</input> <br>
				<input type = "submit" value = "SEEK"> </input>
		</form>
		<h3>Новые</h3>
		<?php
			loadNew();
		?>
		<h3>Утвержденные</h3>
		<?php
			loadApproved();
			
			// НОВЫЕ: -> hr_interview php?id=123
			// - Иванов
			// - Петров
			//УТВЕРЖДЕННЫЕ: -> tech_interview php?id=123
			// - Сидоров
			// - Волков

			// При нажатии на фамилию переход на страницу по действиям (утвердить, нанять...)
		?>
			
	</body>
</html>