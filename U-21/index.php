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
$sql = "SELECT clients.id, clients.surname, clients.firstname, clients.secondname, clients.phone, 
material.materialname, products.productname, orders.orderDate FROM clients 
 material JOIN products JOIN orders ON orders.clientID=clients.ID and orders.materialID=material.ID 
 and orders.productID=products.ID;";


try {
    $result = mysqli_query($connection, $sql);

} catch (mysqli_sql_exception $e){
print_r("Ошибка запроса к БД. Ошибка: " . mysqli_error($connection) . "<br>");
    exit (3);
}

print_r("Запрос к БД успешный!<br>");



// вывод информации
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row){
        print_r("<br>Имя клиента: " . $row['surname'] . ";<br>Идентификатор: " . $row['id'] . "<br>" . $row['phone'] . "<br>");

}


