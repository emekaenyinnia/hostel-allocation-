<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="Uwa">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no" />
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Caleb University Hostel Management System</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="login-page sign-in">
<?php


    // $con = $pdo;
    
//print_r($con);
// If form submitted, insert values into the database.
    // if (isset($_POST['submit'])){
            // removes backslashes
        // $username = stripslashes($_REQUEST['username']);
        // var_dump($username);
            //escapes special characters in a string
//        $username = mysqli_real_escape_string($con,$username);
        // $password = stripslashes($_REQUEST['password']);
        // var_dump($password);
        // $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username limit 1');
        // $stmt->execute(['username' => $username]);
        // $user = $stmt->fetch();
    // if (password_verify($password, $user['password'])) {

    //         $_SESSION['username'] = $user['username'];
    //             // Redirect user to index.php
    //         header("Location: student_search.php");
    //         }else{
    //     echo "
    // <h3>Username/password is incorrect.</h3>
    // <br/><h2>Click here to <a href='login.php' style='color:white'>Login Again</a><h2>";
    //     }
    //     }else{
        
         
?>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="alpha-app">
        <div class="container">
            <div class="login-container">
                <div class="row justify-content-center row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card login-box">

                            <form method="post" name="login" class="card-body my-auto text-center" action="" >
                                <img class="w-25 display:inline" src="assets/images/logo.png" alt="Card image cap">
                                <h4 class=" w-50 mx-auto ">Admin Sign In</h4>

                                <div class="form-group text-left">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" placeholder="Username" required  class="form-control" >
                                </div>
                                <div class="form-group text-left">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" placeholder="Password" required class="form-control"  >
                                </div>
                                <input  class="btn btn-primary float-right" name="submit" type="submit" value="Login" >
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  ?>
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>