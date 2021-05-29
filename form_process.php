<?php
 include('assets/functions/database.php');

if(isset($_POST['submit'])){
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
// $password = htmlspecialchars(strip_tags(password_hash($_POST['password'], PASSWORD_DEFAULT)));
$password = htmlspecialchars(strip_tags($_POST['password']));
$cpassword  = strip_tags($_POST['cpassword']);

}
echo $password;
// var_dump($_POST);

if($password == $cpassword){
    echo 'correct';
}
else{
    echo 'wrong';
}

var_dump($password);

$ins_sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password') ";

$run_sql = mysqli_query($con, $ins_sql);

var_dump($run_sql);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" > 
    <button>next</button>
    
    </form>
</body>
</html>