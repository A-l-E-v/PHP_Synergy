<?php

$connection = mysqli_connect('localhost','admin','aaa000','WebStoreDB');
// var_dump($connection);

if (!$connection){
    print_r("Невозможно подключиться к БД. Ошибка: ". mysqli_connect_error()."<br>");
    exit (1);
} else{
    print_r("Соединение с БД успешно установлено!<br>");
}

mysqli_set_charset ($connection,'utf8');

$sql = "SELECT id, surname, phone FROM clients ORDER BY id LIMIT 2";
$result = mysqli_query($connection, $sql);

// var_dump(mysqli_fetch_array($result));

// print_r("<br>Количество строк в результате запроса: ".mysqli_num_rows($result));


// while ($row = mysqli_fetch_array($result)){
//     print_r("<br>Имя клиента: " . $row['surname'] . ";<br>Идентификатор: " . $row['id'] . "<br>" . $row['phone'] . "<br>");
// }

// while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
//         print_r("<br>Имя клиента: " . $row[1] . ";<br>Идентификатор: " . $row[0] . "<br>" . $row[2] . "<br>");

// }

// $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// foreach ($rows as $row){
//         print_r("<br>Имя клиента: " . $row['surname'] . ";<br>Идентификатор: " . $row['id'] . "<br>" . $row['phone'] . "<br>");

// }

// $sql = "SELECT id, surname, phone FROM clients ORDER BY id LIMIT 2";

// INSERT - DOUBLES!!!!
$sqlInsert1 = 'INSERT INTO clients SET surname = "Попов", firstname = "Сергей", phone = "+7(232)124-09-03"';
$sqlInsert2 = 'INSERT INTO clients (surname, firstname, phone) VALUES ("Яковлев", "Иван", "+7(414)437-29-83")';
$resultClient = mysqli_query($connection, $sqlInsert1);
$resultClient = mysqli_query($connection, $sqlInsert2);
if (!$resultClient){
    print_r("<br>Ошибка добавления данных в БД: ".mysqli_error($connection));
}
$lastAddedID = mysqli_insert_id($connection);
print_r("<br>Последний добавленный ID: ".$lastAddedID);