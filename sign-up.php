<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
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

<body class="login-page sign-up">
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
                            <div class="card-body my-auto text-center">
                                <img class="w-25 display:inline" src="assets/images/logo.png" alt="Card image cap">
                                <h4 class=" w-50 mx-auto ">Admin Sign Up</h4>
                                <form action="form_process.php" method="post">
                               
                                <div class="form-group text-left">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name='name' id="name" placeholder="Name">
                                </div>
                                <div class="form-group text-left">
                                    <label for="email">Email</label>
                                    <input type="email" name='email' class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group text-left">
                                    <label for="password">Password</label>
                                    <input type="password" name='password' class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-group text-left">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" name='cpassword' class="form-control" id="cpassword" placeholder="Confirm Password" required>
                                </div>
                                <!-- <a href="index.php" class="btn btn-primary float-right">Sign Up</a> -->
                                <input type="submit" name='submit' placeholder='Sign Up'>
                                <!-- <a href="form_process.php" class="btn btn-primary float-right">Sign Up</a> -->
                                <a href="index.php" class="btn btn-text-secondary float-right m-r-sm">Sign In</a>
                              
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('assets/includes/footer.php'); ?>
</body>

</html>