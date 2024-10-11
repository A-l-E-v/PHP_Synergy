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

<!-- Необходимо разработать форму регистрации со встроенной валидацией для проверки вводимой информации пользователем, 
форма должна иметь следующие поля для заполнения:

● Ваше имя // допускаются кириллица, латиница, пробел, дефис, апостроф
● Ваш логин // буквы латинского алфавита любого регистра, цифры от 0 до 9, дефис или нижнее подчеркивание, 
ограничение длины логина от 2х до 20 символов
● Ваш e - mail // используйте функцию filter var
● Ваш пароль // наличие верхнего и нижнего регистра латинского алфавита, 
наличие минимум одной цифры и специального символа, длина пароля не менее 6 символов

Все поля должны являться обязательными к заполнению. 
В противном случае должна выводиться ошибка информирующая пользователя о необходимости заполнения всех полей формы, 
в конечном итоге у вас должна появиться подобная форма: -->


<body>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <form name="userForm" class="form-horizontal" method="POST" action="form.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Ваше имя <input type="text" class="form-control" autocomplete="on" name="userName"> </label>
                    </div>
                    <div class="form-group">
                        <label>Ваш логин <input type="text" class="form-control" autocomplete="on" name="userLogin"> </label>
                    </div>
                    <div class="form-group">
                        <label>Ваш email <input type="text" class="form-control" autocomplete="on" name="userEmail"> </label>
                    </div>
                    <div class="form-group">
                        <label>Ваш пароль <input type="text" class="form-control" autocomplete="on" name="userPassword"> </label>
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
