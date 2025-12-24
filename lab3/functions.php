<?php
declare(strict_types=1);

function displayExtensionsAndFunctions(): void
{
    $extensions = get_loaded_extensions();
    $totalFunctionsCount = 0;
    
    foreach ($extensions as $ext) {
        $functions = get_extension_funcs($ext);
        $functionCount = is_array($functions) ? count($functions) : 0;
        $totalFunctionsCount += $functionCount;

        echo "<h2>Модуль: {$ext} (функций: {$functionCount})</h2>";
        
        if ($functions && $functionCount > 0) {
            echo '<ul>';
            foreach ($functions as $func) {
                echo "<li>{$func}</li>";
            }
            echo '</ul>';
        } else {
            echo '<p>Нет доступных функций для модуля</p>';
        }
    }
    
    echo "<h3>Всего модулей: " . count($extensions) . "</h3>";
    echo "<h3>Всего функций во всех модулях: {$totalFunctionsCount}</h3>";
}

/**
 * Основная функция выполнения скрипта
 * 
 * @return void
 */
function main(): void
{
    displayExtensionsAndFunctions();
}

// Запуск основной функции
main();
?>
