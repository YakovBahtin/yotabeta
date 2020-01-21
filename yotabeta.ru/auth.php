<?php
session_start();
if(!isset($_SESSION["username"])){
echo 'Страница доступна только авторизованным пользователям! <a href="login.php">Войти.</a>';
exit(); }
?>