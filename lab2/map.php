<?php
declare(strict_types=1);

/**
 * Применяет callback-функцию ко всем элементам массива
 * 
 * @param array $array Исходный массив
 * @param callable $callback Функция, применяемая к каждому элементу
 * @return array Новый массив с результатами применения callback-функции
 */
 
function map(array $array, callable $callback): array {
    $res = [];
    foreach ($array as $element) {
        $res[] = $callback($element);
    }
    return $res;
}

$n = [1, 2, 3, 4, 5];
$sqrn = map($n, fn($x) => $x ** 2);

print_r($sqrn);

?>
