<?php
function map($array, $callback) {
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