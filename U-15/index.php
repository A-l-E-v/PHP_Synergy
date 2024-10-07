<!-- https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-15/index.php -->
<?php

$people = array(
    array ('1','Антонов Игорь Владимирович', 'helloworld@mail.ru', 'муж', '1986'),
    array('2','Иванова Кристина Викторовна', 'helloworld@mail.ru', 'жен', '1972'),
    array ('3','Борисов Максим Анатольевич', 'helloworld@mail.ru', 'муж', '1989')
);

?>

<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title>Урок 15</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <h1><?php echo "Привет, Новый пользователь!";?></h1>
    <h3><?php echo date('d-m-Y');?></h3>
<table class="table">
    <thead>
        <th>№</th>
        <th>ФИО</th>
        <th>E-mail</th>
        <th>Пол</th>
        <th>Года рождения</th>
    </thead>

    <?php
    echo "<tbody>";
    foreach ($people as $row){
       echo "<tr>";     
        foreach ($row as $col){echo "<td>".$col."</td>";}
        echo "</tr>";
    }
    echo "</tbody>";
    ?>
    <tfoot>
        <td colspan="5">Итого: 3</td>
    </tfoot>
</table>
</body>