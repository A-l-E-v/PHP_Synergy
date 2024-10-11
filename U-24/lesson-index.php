<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Работа с формами</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <form name="userForm" class="form-horizontal" method="POST" action="form.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Ваше имя: <input type="text" class="form-control" name="userName"> </label>
                    </div>
                    <div class="form-group">
                        <label>Ваш email: <input type="text" class="form-control" name="userEmail"> </label>
                    </div>
                    <div class="form-group">
                        <label>Ваш комментарий: <textarea class="form-control" name="userMessage"></textarea></label>
                    </div>
                    <div class="form-group">
                        <label>Ваше фото: <input type="file" class="form-control-file" name='userPhoto'></label>
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
