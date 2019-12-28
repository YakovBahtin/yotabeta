<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Защищённая страница</title>
<link rel="stylesheet" href="css.css">
</head>
<body><?php
include("menu.php");?>
<div class="form">
<a href="home.php">Главная</a>
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Индекс</a></p>
<a href="logout.php">Выйти</a>
</div>
</body>
</html>