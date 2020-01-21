<p class=menu><?php echo "Привет, ";if(isset($_SESSION["username"])) {
	echo ($_SESSION["username"]), "."; $rsev='<a href="logout.php">Выйти</a> ';
} else {
	 	echo 'невошедший.';$rsev='<a href="login.php">Войти</a> ';
	 };if (($_SESSION["admin"])==1) {echo " С возвращением, мастер.";};?></p>
<h2 class=menu>

<?php

$links = array(
	1 => '<a href="dices.php">Дайсы</a> ',
 2 => '<a href="chances.php">Шансы</a> ',
  3 => '<a href="home.php">Главная</a> ',
   4 => '<a href="rolls.php">Броски</a> ',
5 => $rsev);

    shuffle($links);foreach ($links as $key => $value) {echo $value;}unset($value);?></h2>