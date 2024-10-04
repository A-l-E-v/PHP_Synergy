<?php

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