<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Шансы</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p>
<h2 class=menu><?php
include("menu.php");?></h2>
<p class=main>На этой странице вы сможете быстро и просто рассчитать вероятности выпадения различных результатов на игральных костях - и не только на них, если использовать воображение!
<?php
echo 'Например, в случайно меняющей порядок ссылок шапке сайта вероятность появления <a href="home.php">≪Главной≫</a> на первом месте всего ';$q=1/count($links);echo round($q,2)*100, '%';echo "! Правда, здорово?</p>";?>
<form class=chmain method="POST" action="">
Нужный результат<input type="number" name="rez"><br>
Количество дайсов<input type="number" name="nu"><br>
Количество граней на дайсе<input type="number" name="gr"><br>
<input type="submit" value="Предсказать">
<!--  -->
<?php
$rez=$_POST['rez'];$nu=$_POST['nu'];$gr=$_POST['gr'];
$var=$nu*$gr;$nu++;$re=0; ##массив счётчиков размером с количество
for ($nu;$nu-->=0;)
{
	for ($i[$nu]=0;$i[$nu]++<=$gr;)
		{
			if (array_sum($i)==$rez) {$re++;}
	    ;}
;}
;echo $re/$var*100, '%';
?>
<!--  -->
</form>
</body>
</html>