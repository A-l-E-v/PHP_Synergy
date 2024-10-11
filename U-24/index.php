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

<!-- 
Необходимо реализовать форму с четырьмя полями и кнопкой отправки данных на сервер, 
содержимое полей должно быть следующим:
● Название вашего любимого города
● Введите год //для определения в дальнейшем является ли год високосным
● Введите дату // для определения в дальнейшем дня недели
● Введите дату вашего дня рождения // для определения количества дней до дня рождения -->


<body>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <form name="userForm" class="form-horizontal" method="POST" action="form.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Ваш любимый город: <input type="text" class="form-control" autocomplete="on" name="favCity"> </label>
                    </div>
                    <div class="form-group">
                        <label>Год високосный? <input type="text" class="form-control" autocomplete="on" name="leapYear"> </label>
                    </div>
                    <div class="form-group">
                        <label>Дата: <input type="text" class="form-control" autocomplete="on" name="date"> </label>
                    </div>
                    <div class="form-group">
                        <label>Ваш день рождения: <input type="text" class="form-control" autocomplete="on" name="dob"> </label>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" name="send" value="Отправить">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<?php
