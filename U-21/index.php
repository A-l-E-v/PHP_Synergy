<?php

$connection = mysqli_connect('localhost','admin','aaa000','WebStoreDB');

if (!$connection){
    print_r("Невозможно подключиться к БД. Ошибка: ". mysqli_connect_error()."<br>");
    exit (1);
} else{
    print_r("Соединение с БД успешно установлено!<br>");
}

mysqli_set_charset ($connection,'utf8');

$sql = "SELECT id, surname, phone FROM clients ORDER BY id LIMIT 2";
$result = mysqli_query($connection, $sql);



$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row){
        print_r("<br>Имя клиента: " . $row['surname'] . ";<br>Идентификатор: " . $row['id'] . "<br>" . $row['phone'] . "<br>");

}


