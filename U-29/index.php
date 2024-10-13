<?php

// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-26/index.php

function checkInput($input)
{
    $input = trim(($input));
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
}

$nameError = $emailError = $loginError = $passwordError = '';
$name = $email = $login = $password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST["userName"])) {
        $nameError = 'Введите имя';
    } else {
        $name = checkInput($_POST['userName']);
        if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1,40}))$/u", $name)) {
            $nameError = "Введите имя из букв кириллицы или латиницы, пробел, знаки ' или -";
        }
    }
    if (empty($_POST["userLogin"])) {
        $loginError = 'Введите логин';
    } else {
        $login = checkInput($_POST['userLogin']);
        if ((!preg_match("/^(([a-zA-Z0-9-_]{2,20}))$/u", $login))) {
            $loginError = 'Введите корректный логин. Буквы латиницы, цифры, знаки -,_';
        }
    }

    if (empty($_POST["userEmail"])) {
        $emailError = 'Введите email';
    } else {
        $email = checkInput($_POST['userEmail']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = 'Введите корректный email';
        }
    }


    if (empty($_POST['userPassword'])) {
        $passwordError = 'Введите пароль';
    } else {
        $password = checkInput($_POST['userPassword']);
        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{6,}$/u', $password)) {
            $passwordError = 'Не менее 6 знаков, латинские буквы верхнего и нижнего регистров, цифры 
        и специальные знаки.';
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Урок 26. Валидация.</title>
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
            <div class="row justify-content-md-center">
                <div class="col-4">
                    <form name="userForm" class="form-control form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Ваше имя <span class="error">*<br><?php echo $nameError; ?></span> <input type="text" class="form-control form-horizontal" autocomplete="on" name="userName"> </label>
                        </div>
                        <div class="form-group">
                            <label>Ваш логин <span class="error">*<br><?php echo $loginError; ?></span><input type="text" class="form-control form-horizontal" autocomplete="on" name="userLogin"> </label>
                        </div>
                        <div class="form-group">
                            <label>Ваш email <span class="error">*<br><?php echo $emailError; ?></span><input type="text" class="form-control form-horizontal" autocomplete="on" name="userEmail"> </label>
                        </div>
                        <div class="form-group">
                            <label>Ваш пароль <span class="error">*<br><?php echo $passwordError; ?></span><input type="text" class="form-control form-horizontal" autocomplete="on" name="userPassword"> </label>
                        </div>
                        <div class="row">
                            <div class="col btn">
                                <input type="submit" class="btn btn-primary" name="send" value="Отправить">
                            </div>
                        </div>
                    </form>
                    <br>
                    <b>Вы ввели:</b><br>
                    Пароль: <?php echo $password; ?><br>
                </div>

            </div>

        </div>

    </div>

</body>

</html>
<?php
