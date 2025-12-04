<?php
declare(strict_types=1);
echo "<h2>Список посещённых страниц</h2>";
if (isset($_SESSION['visitedPages']) && count($_SESSION['visitedPages']) > 0) {
	echo "<ul>";
    foreach ($_SESSION['visitedPages'] as $page)
        echo "<li>$page</li>";
    echo "</ul>";
} else
    echo "<p>Вы пока не посетили ни одну страницу :(</p>";
?>