<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Дайсы</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p><h2 class=menu><?php
include("menu.php");?>
</h2>
<p class=main>Здесь представлен каталог игральных костей, или дайсов, отсортированных по различным параметрам: количеству граней и распространённости. Представлены краткие описания особенностей дайсов.</p>
</body></html>