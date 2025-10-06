<?php
define("SITE_NAME", "Мой сайт");
const VERSION = "1.0.0";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
	if (defined("SITE_NAME")) {
	    echo "Название сайта: " . SITE_NAME . "<br>";
	} else {
	    echo "Константа SITE_NAME не определена<br>";
	}
	if (defined("VERSION")) {
	    echo "Версия: " . VERSION . "<br>";
	} else {
	    echo "Константа VERSION не определена<br>";
	}
	
	echo "Текущая версия PHP: " . PHP_VERSION . "<br>";
	echo "Директория скрипта: " . __DIR__ . "<br>";
	?>
</body>
</html>
