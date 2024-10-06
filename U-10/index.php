<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-10/index.php



// 1. Выведите количество дней до еще не наступившего дня рождения (выберите любую дату). 
// Для получения целого результата используйте стандартную функцию intval().

$birthday = mktime(0,0,0,10,9,2024);
$today = time();

$SEC_IN_DAY = 24 * 60 * 60;

$dayToBirthday = intval(($birthday-$today)/$SEC_IN_DAY);

print ("До моего ближайшего дня рождения осталось: {$dayToBirthday} дня.<br><br>");



// 2. С помощью стандартной функции date() приведите строку “2022-02-23” к дате в формате “d-m-Y”. 
// Результат выведите на страницу в браузере.

$DateStr = '2022-02-23';
$TimeStr = strtotime($DateStr);
$NewDate = date("d-m-Y",$TimeStr);

print_r("Дата в формате d-m-Y: {$NewDate}<br><br>");