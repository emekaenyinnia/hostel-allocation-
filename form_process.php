<?php
 include('assets/functions/database.php');

if(isset($_POST['submit'])){
    $log = true;
$name = strip_tags($_POST['name']);
$email = strip_tags($_POST['email']);
// $password = htmlspecialchars(strip_tags(password_hash($_POST['password'], PASSWORD_DEFAULT)));
$password = htmlspecialchars(strip_tags($_POST['password']));
$cpassword  = strip_tags($_POST['cpassword']);


echo $password;
// var_dump($_POST);


if($password == $cpassword){
    echo 'correct';

    $ins_sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password') ";

    $run_sql = mysqli_query($con, $ins_sql);
    
    header("location: login.php");

}
else{
    echo 'wrong';
    header('location: sign-up.php');
}

// var_dump($password);

// var_dump($run_sql);


}

?>


