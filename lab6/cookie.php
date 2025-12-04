<?php
$visits = 1;
if (isset($_COOKIE['visits']))
  $visits = (int) $_COOKIE['visits'] + 1;


$visitMessage = 'Это ваш первый визит на сайт.';
if (isset($_COOKIE['visitMessage'])) {
  $visitMessage = htmlspecialchars(trim($_COOKIE['visitMessage']));
  $visitMessage = "<p>Последнее посещение: $visitMessage</p>";
}

setcookie('visits', (string) $visits, time() + 86400);
setcookie('visitMessage', date("Y-m-d H:i:s"), time() + 86400);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Последний визит</title>
</head>
<body>

<h1>Последний визит</h1>

<?php
  echo "<p>Количество посещений: $visits</p>";
  echo $visitMessage;
?>


</body>
</html>