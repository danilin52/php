<?php
$login = ' User ';
$password = 'megaP@ssw0rd';
$name = 'иван';
$email = 'ivan@petrov.ru';
$code = '<?=$login?>';
function checkPasswordDifficulty(string $password): bool
{
    return preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/\d/', $password) && strlen($password) >= 8;
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>

<?php
$login = strtolower(trim($login));
    $passIsValid = checkPasswordDifficulty($password) ? 'Пароль сложный' : 'Пароль простой';
    $name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');
    $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email корректный' : 'email некорректный';
    ?>
    <p>Логин после обработки: <?= $login ?></p>
    <p>Проверка пароля: <?= $passIsValid ?></p>
    <p>Имя после обработки: <?= $name ?></p>
    <p>Проверка email: <?= $emailValid ?></p>
    <p>Переменная code: <?= htmlspecialchars($code) ?></p>
?>
</body>
</html>