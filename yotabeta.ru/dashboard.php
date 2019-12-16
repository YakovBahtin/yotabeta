<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css.css">
</head>
<body><?php
$links = array(1 => '<a href="dices.php">Дайсы</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="login.php">Войти</a> ');
 $d=rand(1,5);$dd=$d;echo $links[$d];
 while ($d==$dd) {$d=rand(1,5);};$ddd=$d;echo $links[$d];
 while ($d==$ddd or $d==$dd) {$d=rand(1,5);};$dddd=$d; echo $links[$d];
 while ($d==$ddd or $d==$dd or $d==$dddd) {$d=rand(1,5);};$ddddd=$d;echo $links[$d];
 while ($d==$ddd or $d==$dd or $d==$dddd or $d==$ddddd) {$d=rand(1,5);};echo $links[$d]; ?>
<div class="form">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>