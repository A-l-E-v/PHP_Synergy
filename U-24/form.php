
<!-- https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-24/form.php -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Урок 24. Формы.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    
<?php

// функция проверки високосности года
function isLeapYear ($year) {
    $leap = date('L', mktime(0, 0, 0, 1, 1, $year));
    print($year.' год ' . ($leap ? '' : ' не') . 'високосный.');
}

function daysToB($dob)
{

    $birthday = strtotime($dob);
    $today = time();

    $SEC_IN_DAY = 24 * 60 * 60;

    $dayToBirthday = intval(($birthday - $today) / $SEC_IN_DAY);

    return $dayToBirthday;
}


if (isset($_POST['favCity'], $_POST['leapYear'], $_POST['date'], $_POST['dob'])){

    print("<br>Из формы была получена следующая информация: <br>");

    print ("<br>Ваш любимый город: " . $_POST['favCity'] . '.<br>');
    print (isLeapYear($_POST['leapYear']));
    print ("<br>Дата: " . $_POST['date'] . ' это: ' . date('l', strtotime($_POST['date'])));
    print ('<br> До ближайшего дня рождения: '. daysToB($_POST['dob']) . ' дней.');
   
}
?>


</body>
</html>