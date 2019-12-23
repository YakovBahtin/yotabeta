<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Броски</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p><h2 class=menu>
<?php
$links = array(1 => '<a href="dices.php">Дайсы</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="index.php">Войти</a> ');
shuffle($links);foreach ($links as $key => $value) {echo $value;}unset($value);?></h2>
 <p class=main>Эта страница позволяет бросить несколько одинаковых дайсов, чтобы получить случайный результат. Используйте, если у вас нет их в достаточном количестве или даже когда таких не существует в природе.</p>
 <form class=chmain method="POST" action="">
Количество дайсов<input type="number" name="nu"><br>
Количество граней на дайсе<input type="number" name="gr"><br>
<input type="submit" value="Проверить удачу">
<?php
for ($i=0; $i++<$_POST['nu'];) {$g=rand(1,$_POST['gr']);$h=$h+$g;};echo $h, '<br>';
?>
</form>
</body></html>