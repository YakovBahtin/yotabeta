<?php
require('db.php');session_start();
if (isset($_POST['username'])){
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
        header("Location: index.php");
         }else{
echo '<!DOCTYPE html><html><head><title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body>
 
<h3>Username/password is incorrect.</h3>';echo"
<br/>Click here to <a href='login.php'>Login</a>";
 }
    }else{
?><!DOCTYPE html><html><head><title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body>
<h1 class=head>Войти</h1>
<?php include("menu.php");?>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Логин" required />
<input type="password" name="password" placeholder="Пароль" required />
<input name="submit" type="submit" value="Войти" />
</form>
<p>Если ещё не зарегестрированы, <a href='registration.php'>самое время.</a></p>
<?php } ?>
</body>
</html>