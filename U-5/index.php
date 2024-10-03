<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-5/index.php

// 3. Напишите функцию, которая принимает два аргумента, выполняет вычисление с их использованием, 
// а затем возвращает предложение с результатом в браузер. Вывод должен содержать высоту и ширину прямоугольника. 
// Организуйте вывод внутри функции, а затем за ее пределами.

// вывод площади будет за пределами функции
function squareOutside ($a, $b) {
    
    return $a * $b;
}

// задаём высоту и ширину
$a = 4;
$b = 5;

// вычисляем площадь вызовом функции
$abSquare = squareOutside($a, $b);

// выводим на экран
print_r ("Площадь прямоугольник высотой {$a} и шириной {$b} равна {$abSquare}.");
print_r('<br>');

// ----- вывод внутри функции ------

// вывод площади внутри функции
function squareInside ($a, $b) {
    
    $square = $a * $b;
    print_r ("Площадь прямоугольник высотой {$a} и шириной {$b} равна {$square}.");
    print_r('<br>');

    return;
}

// задаём высоту и ширину
$a = 7;
$b = 9;

// вызываем функция с одновременным выводом
squareInside($a, $b);



// 4. Найдите функцию, которая находит длину гипотенузы прямоугольного треугольника. 
// Напишите скрипт с использованием этой функции.

function hypotenuse ($a, $b){

    return sqrt($a**2 + $b**2);
}

$a = 7;
$b = 9;
$h = hypotenuse($a, $b);

print_r ("<br>");
print_r("Длина гипотенузы прямоугольного треугольника со сторонами {$a} и {$b} равна {$h}.");
print_r ("<br>");




// 5. Используя функцию генерации случайного числа, сгенерируйте целое число в диапазоне от 67 до 200.

$randIntFrom67To200 = rand(67,200);
print_r ("<br>");
print_r("Случайное целое число в диапазоне [67,200]: {$randIntFrom67To200}");
print_r ("<br>");


// 6. Используя функцию генерации случайного числа, сгенерируйте дробное число в диапазоне от 67 до 200.

function random_float ($min,$max) {
    return ($min + lcg_value()*(abs($max - $min)));
}

$min = 67;
$max = 200;

$randFloatRange = random_float($min, $max);
print_r ("<br>");
print_r("Случайное дробное число в диапазоне [67,200]: {$randFloatRange}");
print_r ("<br>");