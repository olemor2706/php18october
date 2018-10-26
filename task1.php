<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	</head>
	<body>
		<form action = "task1.php" method = "get">
			<input name = "str"> </input>
			<input type = "submit"> </input>
		</form>
		
		<?php
		if (isset ($_GET["str"])){	
			$str = $_GET["str"];
			echo "Мы стремимся к " . $str;
		}
		?>
		
	</body>
</html>


Нужно:
- установить XAMP
- подключить к github директорию c:\xampp\htdocs
(
- предварительно из этой директории нужно все удалить
- убрать ; в файле конфигурации в строке extension=pgsql