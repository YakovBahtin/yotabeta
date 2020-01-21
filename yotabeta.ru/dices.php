<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Дайсы</h1>
<?php include("menu.php");?>
<p class=main style=' font-size: 30px'>Здесь представлен каталог игральных костей, или дайсов, отсортированных по различным параметрам: количеству граней и распространённости. Представлены краткие описания особенностей дайсов.</p>
<?php
  $pageid = 2;
  $mysqli = mysqli_connect("localhost", "root", "", "reg");
  $result = $mysqli->query("SELECT * FROM `comms` WHERE `pageid`=$pageid");
while ($row = $result->fetch_assoc()) {
   echo "<p class=main>",$row[username], $row[textcomm] , "</p>";
  }
?>
<form name="comment" action="comm.php" method="post">
  <p>
  	<label>Имя:</label>
    <input type="text" name="username"> </p>
  <p>
    <label>Комментарий:</label>
    <br />
    <textarea name="text" size="300"></textarea>
  </p>
  <p>
    <input type="hidden" name="pageid" value="2" />
    <input type="submit" value="Отправить" />
  </p>
</body></html>