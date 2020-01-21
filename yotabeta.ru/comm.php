<?php include("auth.php");
  $name = $_POST["username"];
  $pageid = $_POST["pageid"];
  $text_comment = $_POST["text"];
  // $name = htmlspecialchars($name);
  // $text_comment = htmlspecialchars($text_comment);
  $mysqli = new mysqli("localhost", "root", "", "reg");
  $mysqli->query("INSERT INTO `comms` (`username`, `pageid`, `textcomm`) VALUES ('$name', '$pageid', '$text_comment')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  ?>
