<?php

// утилита генерации хэша из пароля
$myPlainPassword = 'MySuperStrongPassword123$%^';
print('<br>Пароль: '.$myPlainPassword);
echo ('<br>Хэш пароля: '.password_hash($myPlainPassword,PASSWORD_BCRYPT));
