<!DOCTYPE html><html><head><title>Главная</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Главная</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p>
<h2 class=menu><?php include("menu.php");?>
</h2><p class=main>Этот сайт посвящён игральным костям и схожим с ними машинам для генерации случайных чисел. Бросаете ли вы монетку, кубики, d20 или что-то ещё более экзотичное - вы найдёте здесь что-то интересное для себя.
</p>

<?php
  $pageid = 1;
  $mysqli = mysqli_connect("localhost", "root", "", "reg");
  $result = $mysqli->query("SELECT * FROM `comms` WHERE `pageid`=$pageid");
while ($row = $result->fetch_assoc()) {
   echo "<p class=main><>",$row[username], $row[textcomm] , "</p>";
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
    <input type="hidden" name="pageid" value="1" />
    <input type="submit" value="Отправить" />
  </p>
</form>
</body></html>