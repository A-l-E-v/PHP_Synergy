<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-21/index.php


// попытка подключения к БД
try {
    $connection = new mysqli('localhost','admin','aaa000','WebStoreDB');
} catch (mysqli_sql_exception $e) {
    print_r("Невозможно подключиться к БД. Ошибка: ". mysqli_connect_error()."<br>");
    exit (1);
}

print_r("Успешное подключение к БД!<br>");



// попытка установки кодировки
try{
    mysqli_set_charset($connection, "utf8");
}
    catch (mysqli_sql_exception $e){

    print_r("Ошибка установки кодировки БД. Ошибка: " . mysqli_error($connection) . "<br>");
    exit (2);
}

print_r("Кодировка БД установлена: " . mysqli_character_set_name($connection) . "<br>");



// попытка формирования запроса к БД

$dateTimeOrder = '2024-10-08 09:00:00';

$sql = "SELECT c.id, c.surname, c.firstname, c.secondname, 
c.phone, m.materialname, p.productname, o.orderDate 
FROM clients as c JOIN material as m JOIN products as p JOIN orders as o ON o.clientID=c.ID 
and o.materialID=m.ID and o.productID=p.ID where o.orderDate >= '{$dateTimeOrder}'";

try {
    $result = mysqli_query($connection, $sql);

} catch (mysqli_sql_exception $e){
print_r("Ошибка запроса к БД. Ошибка: " . mysqli_error($connection) . "<br>");
    exit (3);
}

print_r("Запрос к БД успешный!<br>");



// вывод информации
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r ("<br>Заказы, совершённые после: ". $dateTimeOrder."<br>");

foreach ($rows as $row){
        print_r("<br>Имя клиента: " . $row['surname'] . ' '. $row['firstname'] . ' '. $row['secondname'].
        "<br>Номер телефона " . $row['phone'] . "<br>".
        "Товар: " . $row['productname'].'<br>'.
        'Материал: '. $row['materialname'].'<br>'.'<br>');

}


