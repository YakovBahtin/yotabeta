<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Welcome Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body>
<?php include("menu.php");?>
<div class="form">
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>