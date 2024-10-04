<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-6/index.php

// 1. Напишите функцию, определяющую, к какой четверти часа принадлежит значение переменной $time 
// (диапазон возможных значений лежит от 0 до 59).

function quarter ($time){

    $quarter = intdiv($time, 15);

    return $quarter+1;
};

$time = 0;
print_r("{$time} минута принадлежит ".quarter($time)." четверти часа. <br>");

$time = 12;
print_r("{$time} минута принадлежит ".quarter($time)." четверти часа. <br>");

$time = 27;
print_r("{$time} минута принадлежит ".quarter($time)." четверти часа. <br>");

$time = 39;
print_r("{$time} минута принадлежит ".quarter($time)." четверти часа. <br>");

$time = 59;
print_r("{$time} минута принадлежит ".quarter($time)." четверти часа. <br>");

print_r("<br>");

// 2. Напишите функцию, которая будет по номеру месяца определять время года. 
// Если номера с таким месяцем не существует, функция должна выводить соответствующее сообщение.
// 3-5  -> весна
// 6-8  -> лето
// 9-11 -> осень
// 12-2 -> зима


function season ($month){

    $seasons = array ('зима', 'зима','весна','весна','весна','лето','лето','лето','осень','осень','осень','зима');

    if ($month < 13 and $month > 0) {
        
        return $seasons[$month-1];
        
    } else return "Такого месяца не существует!";
}

$month = 0;
print_r("{$month} месяц. " . season($month) . "<br>");
$month = 1;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 2;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 3;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 4;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 5;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 6;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 7;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 8;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 9;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 10;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 11;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 12;
print_r("{$month} месяц. Это " . season($month) . ".<br>");
$month = 13;
print_r("{$month} месяц. " . season($month) . "<br>");

print_r("<br>");


// 3. Напишите функцию, которая будет возвращать квадрат числа, если оно четное, 
// и его кубическую степень в противном случае.

function EvenOdd23($number)  {

    if (($number % 2) === 0) {
        return $number ** 2;
    } else return $number ** 3;
    
}

$number = 4;
print_r("{$number} - " . EvenOdd23($number) . "<br>");
$number = 3;
print_r("{$number} - " . EvenOdd23($number) . "<br>");

print_r("<br>");


// 4. Напишите функцию, которая в данном трехзначном числе переставляет цифры так, 
// чтобы новое число оказалось наибольшим из возможных. Не используйте стандартные функции.

function max3digits ($number){
// $number -> $h$t$u
    $h = ($number / 100) % 100;
    $t = ($number / 10) % 10;
    $u = ($number % 10);

    print_r("Максимальное число из цифр {$h}, {$t}, {$u}: ");

// метод "пузырька" наоборот вручную

    if ($u>$t) {$x = $u; $u = $t; $t = $x;}
    if ($t>$h) {$x = $t; $t = $h; $h = $x;}
    if ($u>$t) {$x = $u; $u = $t; $t = $x;}

    print_r("$h$t$u <br>");

    return;
}

max3digits(123);
// ставим апострофы, чтобы избежать восьмеричных чисел
max3digits('007');
max3digits(736);
// ставим апострофы, чтобы избежать восьмеричных чисел
max3digits('000');
max3digits(999);
// ставим апострофы, чтобы избежать восьмеричных чисел
max3digits('061');
max3digits(298);
max3digits(842);
max3digits(120);
