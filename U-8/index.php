<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-8/index.php

// 4. Выберите любой месяц года и составьте массив из значений температуры воздуха 
// в соответствии с количеством дней в нем. По очереди выведите следующие значения:
// 	a. Средняя температура месяца;
// 	b. Три самых высоких значений температуры;
// 	c. Три самых низких значений температуры.
// Для выбора трех высоких и трех низких температур используйте стандартную функцию array_slice().

// Берём показания отсюда:
// https://world-weather.ru/pogoda/russia/moscow/september-2024/

$Sept = array (29,27,26,22,21,23,24,25,26,26,25,24,27,25,26,25,25,24,21,21,22,14,15,20,23,22,20,22,19,12);

function AverageTemperature ($array){

    $temp_sum = 0;

    print_r ("Температуры в этом месяце:<br>");

    foreach ($array as $temp) {
        print_r ("{$temp} ");
        $temp_sum += $temp;
    }
    print_r ("<br>");

    $days = count($array);

    return ($temp_sum/$days);
}

$AvTemp = AverageTemperature($Sept);

print_r ("<br>");
print_r ("Средняя температура в сентябре 2024 года в Москве была: {$AvTemp} градусов.");
print_r ("<br>");
print_r ("<br>");

// Сортируем массив по возрастанию
sort($Sept);

print_r("Отсортированный массив температур:");
print_r ("<br>");
foreach ($Sept as $temp) {
    print_r ("{$temp} ");
}
print_r ("<br>");
print_r ("<br>");


// 	b. Три самых высоких значений температуры;
print_r ("Три самых высоких значений температуры: ");
$ThreeH = array_slice ($Sept,-3);
foreach ($ThreeH as $temp) {
    print_r ("{$temp}, ");
}
print_r ("<br>");
print_r ("<br>");


// 	c. Три самых низких значений температуры.
print_r ("Три самых низких значений температуры: ");
$ThreeL = array_slice ($Sept,0,3);
foreach ($ThreeL as $temp) {
    print_r ("{$temp}, ");
}
print_r ("<br>");


