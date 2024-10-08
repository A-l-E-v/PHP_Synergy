<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Работа с формами</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    </head>
    <body>
        <div class="form-group">
            <form name="userForm" method="POST" action="form.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Ваше имя: <input type="text" class="form-control" name="userName"> </label>
                    <label>Ваш email: <input type="text" class="form-control" name="userEmail"> </label>
                </div>
                <div class="form-group">
                    <label>Ваш комментарий: <textarea class="form-control" name="userMessage"></textarea></label>
                </div>
                <div class="form-group">
                    <label>Ваше фото: <input type="file" class="form-control-file" name='userPhoto'></label>
                </div>
                    <input type="submit" class="btn btn-primary" name="send" value="Отправить">
            </div>
            </form>
        </div>
    </body>
</html>
<?php

