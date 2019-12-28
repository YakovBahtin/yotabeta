<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css.css">
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Регистрация</h1>Есть учётная запись?<a href="login.php"> Войди.</a>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Логин" required />
<input type="email" name="email" placeholder="Почта" required />
<input type="password" name="password" placeholder="Пароль" required />
<input type="submit" name="submit" value="Зарегистрироваться" />
</form>
</div>
<?php } ?>
</body>
</html>