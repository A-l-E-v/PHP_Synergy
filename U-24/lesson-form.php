<?php
if (isset($_POST['userName'], $_POST['userEmail'], $_POST['userMessage'])){
    print ("<br>Имя: " . $_POST['userName']);
    print ("<br>Email: " . $_POST['userEmail']);
    print ("<br>Сообщение: " . $_POST['userMessage']);
    $file = $_FILES['userPhoto'];
    print("<br>Загружен файл: " . $file['name'] . ' объёмом: ' . $file['size'] . " байт.");
}

$current_path = $_FILES['userPhoto']['tmp_name']; // полный путь к файлу внутри временного хранилища
print('<br>$current_path=' . $current_path);

$filename = $_FILES['userPhoto']['name']; // имя загруженного файла
print('<br>$filename=' . $filename);

$new_path = dirname(__FILE__) . '/uploads/' . $filename; // формируем путь внутри проекта
print('<br>$new_path=' . $new_path);

move_uploaded_file($current_path, $new_path); // перемещаем файл из временного хранилища в проект
