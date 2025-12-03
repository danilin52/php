<?php
	function getTable(int $cols = 5, int $rows = 5, string $color = 'yellow'): int {
		static $count = 0;
		$count++;
		
		echo "<table><tbody>";
		
		echo "<tr>";
		echo "<th style=\"background-color:$color\">1</th>";
		for ($col = 2; $col <= $cols; $col++) {
			echo "<th style=\"background-color:$color\">$col</th>";
		}
		echo "</tr>";
		
		for ($row = 2; $row <= $rows; $row++) {
			echo "<tr>";
			echo "<th style=\"background-color:$color\">$row</th>";
			
			for ($col = 2; $col <= $cols; $col++) {
				echo "<td>" . ($row * $col) . "</td>";
			}
			echo "</tr>";
		}
		
		echo "</tbody></table><hr>";
		
		return $count;
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
		}

		th {
			background-color: yellow;
		}
	</style>
</head>
<body> 
	<h1>Таблица умножения</h1>
	<?php

	$count1 = getTable(5, 6, 'red');
	$count2 = getTable(10, 10);
	$count3 = getTable(8, 10);
	$count4 = getTable();
	
	// Вывод общего количества вызовов
	echo "Таблица была отрисована $count4 раза";
	?> 
</body>
</html>