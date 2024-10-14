<?php
// https://github.com/A-l-E-v/PHP_Synergy/blob/main/U-29/hashUtil.php
// утилита генерации хэша из пароля
$myPlainPassword = 'MySuperStrongPassword123$%^';
print('<br>Пароль: '.$myPlainPassword);
echo ('<br>Хэш пароля: '.password_hash($myPlainPassword,PASSWORD_BCRYPT));
