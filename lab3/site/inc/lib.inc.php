<?php
declare(strict_types=1);
function getTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): int
{
    static $count = 0;
    ++$count;

    //echo '<table>';

    echo '<tr>';
    echo '<th style="background-color:' . $color . ';">*</th>';
    for ($i = 1; $i <= $cols; $i++)
        echo '<th style="background-color:' . $color . ';">', $i, '</th>';
    echo '</tr>';

    for ($i = 1; $i <= $rows; $i++) {
        echo '<tr>';

        echo '<th style="background-color:' . $color . ';">', $i, '</th>';
        for ($j = 1; $j <= $cols; $j++)
            echo '<td>', $i * $j, '</td>';
        echo '</tr>';
    }

    //echo '</table>';

    return $count;
}
function getMenu(array $menu, bool $vertical = true): void
{
    $menuClasses = $vertical ?  'menu' : 'menu vertical';

    echo "<ul class='$menuClasses'>";
    foreach ($menu as $item)
        echo "<li><a href={$item['href']}>{$item['link']}</a></li>";

    echo '</ul>';

}