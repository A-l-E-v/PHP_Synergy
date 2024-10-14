<!-- https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-29/private.php -->

<?php
session_start();
if (!($_SESSION['logged_in_user_id'] === '1' && $_SESSION['logged_in_user_name'] === 'alev79')) {
    Header('Location: auth.php');
}
?>

<html>
    <head>
        <title>Личная страничка</title>
    </head>
    <h1>Добро пожаловать в закрытый раздел!</h1>
    <h3><a href="index.php">Домой</a></h3>
</html>