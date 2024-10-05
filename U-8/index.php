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
print_r ("<br>");




// 5. Создайте многомерный массив из 10 подмассивов. 
// Заполните каждый из подмассивов 10-ю случайными числами в диапазоне значений от 1 до 10.

$a = array_fill(0, 10, array_fill(0, 10, 0));

// заполним 10 массивов
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $a[$i][$j] = rand(1,10);
    }
}

// распечатаем многомерный массив
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        print_r($a[$i][$j]." ");
    }
    print_r ("<br>");
}

print_r ("<br>");
print_r ("<br>");


// 6. Создайте многомерный массив с данными пользователей: имя пользователя, логин и пароль. 
// При организации подмассивов используйте формат ключ-значение ("userName" => "Stanley").
// С помощью цикла выведите данные пользователей также в формате ключ-значение.

$userDB = [
    'user1' => [
      'userName' => 'Stanley',
      'login' => 'stan_ley',
      'password' => 'stan+pass',
    ],
    'user2' => [
      'userName' => 'John',
      'login' => 'johnny',
      'password' => 'passOFjoHnny123',
    ],
    'user3' => [
      'userName' => 'Marry',
      'login' => 'maaariiiiam',
      'password' => 'm!mdjer(&',
    ],
    'user4' => [
      'userName' => 'Kenny',
      'login' => 'Ken88',
      'password' => 'Jjdc*&(',
    ],
    
  ];

// разные формы вывода данных пользователей

//   foreach ($userDB as $user){
//     print_r($user);
//     print("<br>");
//   }
  
//   foreach ($userDB as $user){
//     foreach ($user as $userData) {
//         print_r($userData);
//         print("<br>");
//     }
//     print("<br>");

//   }

foreach ($userDB as $user){
    foreach ($user as $key => $value){
        print_r("\"$key\" => \"$value\"<br>");
    }
    print("<br>");
}


