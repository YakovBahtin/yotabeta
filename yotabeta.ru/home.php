<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Главная</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p><p class=menu><?php
$links = array(1 => '<a href="dices.php">Дайсы</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="index.php">Войти</a> ');
shuffle($links);foreach ($links as $key => $value) {echo $value;}unset($value);?></p></h2>
<p class=main>Этот сайт посвящён игральным костям и схожим с ними машинам для генерации случайных чисел. Бросаете ли вы монетку, кубики, d20 или что-то ещё более экзотичное - вы найдёте здесь что-то интересное для себя.
</p></body></html>