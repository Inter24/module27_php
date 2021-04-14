<?php
// Страница разавторизации 
// Удаляем куки
setcookie("id", "", time() - 3600*24*30*12, "/");
setcookie("hash", "", time() - 3600*24*30*12, "/",null,null,true); // httponly !!! 
// Переадресовываем браузер на страницу проверки нашего скрипта
//header("Location: /"); exit; 
?>

Вы вышли из аккаунта.<br>

<a href="index.php">Главная</a> | <a href="login.php">Авторизация</a> | <a href="register.php">Регистрация</a>