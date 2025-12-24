<?php
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => false,
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Начинаем сессию с поддержкой передачи SID через URL
if (isset($_GET[session_name()])) {
    session_id($_GET[session_name()]);
}

// Открываем сессию
session_start();

// Подключаем код для сохранения информации о странице в сессии
include('savepage.inc.php');
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Страница 3</title>
</head>
<body>

<h1>Страница 3</h1>

<?php
// Подключаем меню
include('menu.inc.php');

// Подключаем код для вывода информации обо всех посещенных страницах
include('visited.inc.php');
?>

</body>
</html>
