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
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
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

<body>

    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="alpha-app">

        <!-- Page Header -->
        <?php
        require('assets/functions/database.php');

        ?>
        <!-- Sidebar includes  -->
        <?php include('assets/includes/sidebar.php'); ?>
        <!-- Sidebar includes end  -->
        <div class="page-content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h1 class="">Student Registration Form</h1>
                                <?php

//                                     If form submitted, insert values into the database.
                                    if (isset($_REQUEST['Fname'])){
//                                         removes backslashes
                                    $Fname = stripslashes($_REQUEST['Fname']);
                                        //escapes special characters in a string
                                    $Fname = mysqli_real_escape_string($con,$Fname);
                                    $Lname = stripslashes($_REQUEST['Lname']);
                                    $Lname = mysqli_real_escape_string($con,$Lname);
                                    $Stunumber = stripslashes($_REQUEST['Stunumber']);
                                    $Stunumber = mysqli_real_escape_string($con,$Stunumber);
                                    $Parnumber = stripslashes($_REQUEST['Parnumber']);
                                    $Parnumber = mysqli_real_escape_string($con,$Parnumber);
                                    $Matric = stripslashes($_REQUEST['Matric']);
                                    $Matric = mysqli_real_escape_string($con,$Matric);
                                    $Department = stripslashes($_REQUEST['Department']);
                                    $Department = mysqli_real_escape_string($con,$Department);
                                    $Lvl = stripslashes($_REQUEST['Lvl']);
                                    $Lvl = mysqli_real_escape_string($con,$Lvl);
                                    $room_type = stripslashes($_REQUEST['room_type']);
                                    $room_type = mysqli_real_escape_string($con,$room_type);
                                    $hostel_name = stripslashes($_REQUEST['hostel_name']);
                                    $hostel_name = mysqli_real_escape_string($con,$hostel_name);

                                        $query = ("SELECT * FROM room");
                                                    $connect = mysqli_query($con,$query);
//                                                    die($connecnect);

                                                    while ($row = mysqli_fetch_array($connect)): ?>
                                    <?php                $room_id = $row['room_no'];
                                            $sql = "SELECT count(*) FROM students WHERE room_number=:room_id";
      $stmt = $pdo->prepare($sql);
      $stmt->bindValue('room_id', $room_id);
      $stmt->execute();

      if ($stmt->fetchColumn() > 6) {
//          echo ("greater");
      }else{
//          echo ("less");
          $room_number = $row['room_no'];
          break;
      }
      ?>

//


<!--                                <option value="--><?//= $row['id'] ?><!--">--><?//= $row['hostel_name'] ?><!--</option>-->

                                <?php endwhile;
////);
                                            $query = "INSERT into `students` (Fname, Lname, Stunumber, Parnumber,Matric, Department, Lvl, room_type, hostel_name,room_number)
                                    VALUES ('$Fname', '$Lname', '$Stunumber', '$Parnumber', '$Matric', '$Department', '$Lvl', '$room_type', '$hostel_name','$room_number')";
                                            $result = mysqli_query($con,$query);
                                            if($result){
                                                echo "<div class='form'>
                                    <h3>You successfully added student.</h3>";
                                            }
                                        else{
                                            echo"<h3>An Error Occured Student wasn't added</h3>";
                                            echo("Error description: " . mysqli_error($con));
                                        }
                                    }
                                ?>

                                <form class="needs-validation" name="registration" action="" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" name="Fname" placeholder="Username" required
                                                    class="form-control" id="validationCustom01"
                                                    placeholder="First name">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" name="Lname" placeholder="Username" required
                                                    class="form-control" id="validationCustom02"
                                                    placeholder="Last name">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="validationCustom01">Student Phone</label>
                                                <input type="text" name="Stunumber"  required
                                                    class="form-control" id="validationCustom01" placeholder="tel1">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="validationCustom02">Guardian/Parent Phone</label>
                                                <input type="text" name="Parnumber"  required
                                                    class="form-control"  placeholder="tel2">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <div class="input-group">

                                                    <label for="validationCustom02">Matric Number</label>
                                                    <input type="text" name="Matric" placeholder="Username" required
                                                        
                                                        class="form-control" id="validationCustomMatric"
                                                        placeholder="Matric Number"
                                                        aria-describedby="inputGroupPrepend">
                                                    <div class="invalid-feedback">
                                                        Please
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom04">Department</label>
                                                <select type="text" name="Department" placeholder="Username"
                                                    class="custom-select form-control" id="validationCustom05" required>
                                                    <option selected>Department</option>
                                                    <option value="Computer Science">Computer Science</option>
                                                    <option value="Cyber Security">Cyber Security</option>
                                                    <option value="Microbioliogy">Microbioliogy</option>
                                                    <option value="Biochemistry">Biochemistry</option>
                                                    <option value="Industrial Chemistry">Industrial Chemistry</option>
                                                    <option value="Criminology">Criminology</option>
                                                    <option value="inter_Rel">international Relations</option>
                                                    <option value="Masscom">Masscommunication</option>
                                                    <option value="Archi">Architecture</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom05">Level</label>
                                                <select type="text" name="Lvl" placeholder="Username"
                                                    class="custom-select form-control" id="validationCustom05" required>
                                                    <option selected>Level</option>
                                                    <option value="100lvl">100lvl</option>
                                                    <option value="200lvl">200lvl</option>
                                                    <option value="300lvl">300lvl</option>
                                                    <option value="400lvl">400lvl</option>
                                                    <option value="Msc1">Msc 1</option>
                                                    <option value="Msc2">Msc 2</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom05">Hostel Type</label>
                                                <select class="custom-select form-control" id="validationCustom05" name="room_type" required>
                                                    <option selected>Bed Type</option>
                                                    <option value="6">6-Bedded</option>
                                                    <option value="4">4-Bedded</option>
                                                    <option value="2">2-Bedded</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom05">Hostel</label>
                                                <select class="custom-select form-control" id="validationCustom05" name="hostel_name" required>
                                                    <option selected>Hostel</option>
                                                    <?php $query = ("SELECT * FROM hostel");
                                                    $connect = mysqli_query($con,$query);
                                                    //                                                    die($connect);
                                                    while ($row = mysqli_fetch_array($connect)): ?>
                                                        <?php //print_r($row['id']) ?>

                                                        <option value="<?= $row['id'] ?>"><?= $row['hostel_name'] ?></option>

                                                    <?php endwhile;?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>        

                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="custom-control-label" for="invalidCheck">
                                                    All the contents filled accurate
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit" name="submit" value="Register">Submit
                                        form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Page Content -->



    </div>
    <!-- App Container -->
                                    
    <?php include('assets/includes/footer.php'); ?>
</body>

</html>