<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-9/index.php

// 1. С помощью Heredoc выведите стихотворение А.С. Пушкина с кавычками, 
// учитывая требования к выводу из ДЗ к уроку 2:

// «Аптеку позабудь ты для венков лавровых
// И не мори больных, но усыпляй здоровых.»

echo<<<HEREDOC
«Аптеку позабудь ты для венков лавровых<br>
И не мори больных, но усыпляй здоровых.»
HEREDOC;

print_r("<br>");
print_r("<br>");



// 2. С помощью стандартных функций substr(), chunk_split() и date() выведите строку “010122”
// в формате даты “01.01.2022”.

$dateLine = '010122';

// делим строку по 2 символа, пустой сепаратор
$splittedDateLine = chunk_split($dateLine,2, $separator = '');

// выделяем по 2 символа, 
// если сепаратор выше не пустой, то добавляем по 2 упр. символа
$day = substr($splittedDateLine,0,2);
$month = substr($splittedDateLine,2,2);
$year = substr($splittedDateLine,4,2);

// задаём формат даты и собираем Unix-метку времени для даты
echo date("d.m.Y", mktime(0, 0, 0, $day, $month, $year));



