<!-- https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-29/auth.php -->
<?php
session_start();
if (!isset($_GET['submit'])){
    echo "
    <form>
    Login: <input type=text name=login>
    Password: <input type=password name=passwd>
    <input type=submit name=submit value=Войти>
    </form>
    ";
} else{
    $passwordForm = $_GET['passwd'];
    $login = $_GET['login'];

    $connection = mysqli_connect('localhost', 'admin', 'aaa000','UserDB');

    if (!$connection){
        print ('Ошибка подключения к БД. Ошибка: ' . mysqli_connect_error());
    } else {
        $query = "SELECT passwordHash FROM Users WHERE login = '" . $login . "';";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            print ('<br>Ошибка выполнения запроса: '. mysqli_error($connection));
        } else {
            $userDB = mysqli_fetch_array($result);
            if(password_verify($passwordForm, $userDB['passwordHash'])){
                print('Hash from DB= ' . $userDB['passwordHash']);
                $_SESSION['logged_in_user_id'] = '1';
                $_SESSION['logged_in_user_name'] = 'alev79';
                Header('Location: private.php');
            }
        }
    }

}
// Login: alev79
// Password: MySuperStrongPassword123$%^
