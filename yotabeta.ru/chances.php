<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Шансы</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p>
<h2 class=menu><?php
$links = array(1 => '<a href="dices.php">Дайсы</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="index.php">Войти</a> ');
shuffle($links);foreach ($links as $key => $value) {echo $value;}unset($value);?></h2>
<p class=main>На этой странице вы сможете быстро и просто рассчитать вероятности выпадения различных результатов на игральных костях - и не только на них, если использовать воображение!
<?php
echo 'Например, в случайно меняющей порядок ссылок шапке сайта вероятность появления <a href="home.php">≪Главной≫</a> на первом месте всего ';$q=1/count($links);echo round($q,2);echo "! Правда, здорово?</p>";?>
<form class=chmain method="POST" action="">
Нужный результат<input type="number" name="rez"><br>
Количество дайсов<input type="number" name="nu"><br>
Количество граней на дайсе<input type="number" name="gr"><br>
<input type="submit" value="Предсказать">

<?php
 // $di = array(4 =>'тетраэдра', 8=>'октаэдра',12=>'додекаэдра',20=>'икосаэдра');if ($_POST['gr']==４) {$gr==$_POST['gr'];echo "бросок ", $di['$gr'],"! Традиционно!";} else{echo Nah;};
// $ii=array();$_POST['nu']=$nu;$_POST['rez']=$rez;
// for ($i=0; $i++<=$nu;) {$ii[]=1; echo $ii['$i'];};
?>
</form>
</body>
</html>