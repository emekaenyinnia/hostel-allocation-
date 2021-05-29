<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('assets/functions/database.php');
$con = getDB();

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = htmlspecialchars(strip_tags($_REQUEST['username']));
        //escapes special characters in a string
	$email = htmlspecialchars(strip_tags($_REQUEST['email']));
	$password = htmlspecialchars(strip_tags(password_hash($_REQUEST['password'], PASSWORD_BCRYPT, array("cost" => 12))));
	$trn_date = date("Y-m-d H:i:s");
        $query = $con->prepare("INSERT into `users` (username, password, email, trn_date)
        VALUES (:username, :password, :email, NOW())");
    $query->bindValue('username',$username );
    $query->bindValue('password',$password);
    $query->bindValue('email',$email);
//    $query->bindValue('trn_date',now());
//die(print_r($password));
        if($query->execute()){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
