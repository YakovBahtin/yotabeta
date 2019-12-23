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
$links = array(1 => '<a href="dices.php">Дашборд</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="index.php">Войти</a> ');
shuffle($links);foreach ($links as $key => $value) {echo $value;}unset($value);?>
<div class="form">
<a href="home.php">Главная</a>
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>