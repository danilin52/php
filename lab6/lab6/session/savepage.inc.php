<?php
declare(strict_types=1);
if (!isset($_SESSION['visitedPages']))
	$_SESSION['visitedPages'] = [];
$currentPage = $_SERVER['REQUEST_URI'];
$_SESSION['visitedPages'][] = $currentPage;
?>