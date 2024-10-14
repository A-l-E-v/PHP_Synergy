<?php
$link = mysqli_connect('localhost', 'root', '', 'furniturestor');
if (!$link){
    exit('Error');
}

mysqli_autocommit($link, FALSE);

try{
    $sql1 = "INSERT INTO clients1(surname, firstname) VALUES ('Васин', 'Коля')";
    $result = mysqli_query($link, $sql1);

    if (!$result){
        throw new Exception();
    }


}
catch(Exception $e){
    mysqli_rollback($link);
    echo 'Transaction error';
}

mysqli_commit($link);