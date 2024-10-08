<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-17/index.php

// 1. Необходимо организовать передачу следующего содержимого “Это первая строка” 
// из буфера в переменную при помощи функции ob_get_contents() и в дальнейшем 
// осуществить вывод этой переменной, помните, что любой пользовательский буфер 
// начинается с вызова функции ob_start() и должен заканчиваться к примеру ob_end_clean()


// запускаем буфер
ob_start();

echo "Это первая строка";
// сохраняем содержимое буфера в переменную
$firstLine = ob_get_contents();

// очищаем и отключаем буфер
ob_end_clean();

// 2. Вывести данный текст “Это вторая строка” а затем вывести переменную которая содержит 
// пользовательский буфер из пункт 1.


echo "Это вторая строка <br>";
echo $firstLine;
echo ("<br>");


// 3. Нужно написать свою callback функцию которая перевернет строчку “reverse string”

// callback функция разворота строки
function reverse($string){
    return strrev($string);
}

// запускаем буфер с callback-функцией разворота строки
ob_start("reverse");
// выводим строку в буфер
echo "reverse string";
// завершаем работу с буфером со сбросом в браузер
ob_end_flush();

echo ("<br>");
ob_end_flush();


// 4. Вам необходимо внести изменения в представленный код и изменить последовательность символов, 
// так чтобы выводимые значения ранжировались по убыванию
// в результате вы должны получить подобный результат:
// Это исходный код.
// 0123
// Это итоговый код.
// 3210


echo "Это исходный код.<br>";
echo ob_get_level();
ob_start();
    echo ob_get_level();
    ob_start();
        echo ob_get_level();
        ob_start();
            echo ob_get_level();
        ob_end_flush();
    ob_end_flush();
ob_end_flush();
echo "<br>";

echo "Это итоговый код.<br>";
ob_start();
    ob_start();
        ob_start();
            echo ob_get_level();
        ob_end_flush();
    echo ob_get_level();
    ob_end_flush();
echo ob_get_level();
ob_end_flush();
echo ob_get_level();
