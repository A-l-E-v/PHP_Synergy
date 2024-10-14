<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-29/index.php

session_start();
unset($_SESSION['logged_in_user_id']);
unset($_SESSION['logged_in_user_name']);
?>

<html>
    <head>
        <title>
            Моя домашняя страница
        </title>
    </head>
    <body>
        <h1> Добро пожаловать!</h1>
        <h2> Это общедоступная страничка.</h2>
        <br>
        <br>
        <h3><a href="private.php">Личная страничка</a></h3>
    </body>
</html>