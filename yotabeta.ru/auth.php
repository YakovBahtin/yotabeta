<?php
session_start();
if(!isset($_SESSION["username"])){
echo 'Вы не авторизованы! <a href="login.php">Войти</a>';
exit(); }
?>