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

$poem = <<<HEREDOC
«Аптеку позабудь ты для венков лавровых
И не мори больных, но усыпляй здоровых.»
HEREDOC;

echo nl2br($poem);

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


print_r("<br>");
print_r("<br>");


// 3. С помощью стандартной функции strpos() определите, 
// есть ли подстрока “пяти” во фразе “Я считаю до пяти”. 
// Организуйте вывод с помощью условной конструкции.

$textLine = 'Я считаю до пяти';
$search1 = 'пяти';
$search2 = 'шести';

if (strpos($textLine, $search1)){
    print_r ("Строка \"{$search1}\" содержится в тексте: \"{$textLine}\"");
} else {
    print_r ("Строка \"{$search1}\" не содержится в тексте: \"{$textLine}\"");

}

print_r("<br>");
print_r("<br>");

if (strpos($textLine, $search2)){
    print_r ("Строка \"{$search2}\" содержится в тексте: \"{$textLine}\"");
} else {
    print_r ("Строка \"{$search2}\" не содержится в тексте: \"{$textLine}\"");

}

print_r("<br>");
print_r("<br>");



// 4. Определите имя файл в строке пути к нему “C:/OpenServer/domains/localhost/index.php”. 
// Используйте стандартные функции substr() и strrchr().

function ExtractFileName ($path){

    // определяем позицию последнего слэша и берём остаток строки
    $lastSlashPosition = strrchr($path, '/');

    // удаляем слэш и оставляем полное имя файла с расширением
    $fileFullName = substr($lastSlashPosition,1, strlen($lastSlashPosition));

    // определяем позицию последней точки - расширение файла
    $fileExtension = strrchr($fileFullName, '.');

    // отделяем имя файла от полного имени файла с расширением
    $fileName = substr($fileFullName, 0, strlen($$fileFullName) - strlen($fileExtension));

    print_r($fileName);
    print_r("<br>");

}

$path = 'C:/OpenServer/domains/localhost/index.php';
print_r("Имя файла в адресе {$path}: ");
ExtractFileName($path);


