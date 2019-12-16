<!DOCTYPE html><html><head><title>Главная страница</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"><head>
<body><h1 class=head>Дайсы крутятся - Главная</h1><h2 class=menu><?php
$links = array(1 => '<a href="dices.php">Дайсы</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="login.php">Войти</a> ');
 $d=rand(1,5);$dd=$d;echo $links[$d];
 while ($d==$dd) {$d=rand(1,5);};$ddd=$d;echo $links[$d];
 while ($d==$ddd or $d==$dd) {$d=rand(1,5);};$dddd=$d; echo $links[$d];
 while ($d==$ddd or $d==$dd or $d==$dddd) {$d=rand(1,5);};$ddddd=$d;echo $links[$d];
 while ($d==$ddd or $d==$dd or $d==$dddd or $d==$ddddd) {$d=rand(1,5);};echo $links[$d]; ?></h2>
<p class=main>Этот сайт посвящён игральным костям и схожим с ними машинам для генерации случайных чисел. Бросаете ли вы монетку, кубики, d20 или что-то ещё более экзотичное - вы найдёте здесь что-то интересное для себя.
</p>

</body></html>