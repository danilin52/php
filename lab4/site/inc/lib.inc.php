<?php
declare(strict_types=1);
function drawTable(int $cols = 10, int $rows = 10, string $color = 'yellow'): void
{

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

}
function getMenu(array $menu, bool $vertical = true): void
{
    $menuClasses = $vertical ? 'menu' : 'menu vertical';

    echo "<ul class='$menuClasses'>";
    foreach ($menu as $item)
        echo "<li><a href=\"{$item['href']}\">{$item['link']}</a></li>";

    echo '</ul>';

}
function setWelcome(string &$welcome): void
{
    $hour = getdate()['hours'];

    if ($hour >= 0 && $hour < 6)
        $welcome = 'Доброй ночи';
    elseif ($hour >= 6 && $hour < 12)
        $welcome = 'Доброе утро';
    elseif ($hour >= 12 && $hour < 18)
        $welcome = 'Добрый день';
    elseif ($hour >= 18 && $hour < 23)
        $welcome = 'Добрый вечер';
    else
        $welcome = 'Доброй ночи';
}