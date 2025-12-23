<?php
// Получаем SID для добавления к URL, если cookie не работают
$sid_param = '';
$session_name = session_name();
$session_id = session_id();

// Если сессия активна, но cookie не установлены, добавляем SID к URL
if ($session_id && empty($_COOKIE[$session_name])) {
    $sid_param = '?' . $session_name . '=' . $session_id;
}
?>
<h2>Меню</h2>
<ul>
	<li><a href="page1.php<?php echo htmlspecialchars($sid_param); ?>">Страница 1</a></li>
	<li><a href="page2.php<?php echo htmlspecialchars($sid_param); ?>">Страница 2</a></li>
	<li><a href="page3.php<?php echo htmlspecialchars($sid_param); ?>">Страница 3</a></li>
</ul>
