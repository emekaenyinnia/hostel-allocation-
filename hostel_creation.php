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
    <title>Hostel Allocation</title>
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
                                <h1 class="">Room Creation Form</h1>

                                <?php
                                    // If form submitted, insert values into the database.
//                                    print_r($_REQUEST);
                                    if (isset($_REQUEST['room_type'])){
                                        // removes backslashes
                                    $room_no = stripslashes($_REQUEST['room_no']);
                                        //escapes special characters in a string
                                    $room_no = mysqli_real_escape_string($con,$room_no); 
                                    $room_type =  stripslashes($_REQUEST['room_type']);
                                    $room_type = mysqli_real_escape_string($con,$room_type);
                                    $hostel_name = stripslashes($_REQUEST['hostel_name']);
                                    $hostel_name = mysqli_real_escape_string($con,$hostel_name);

                                            $query = "INSERT into `room` (room_no,room_type,hostel_id,status)
                                    VALUES ('$room_no', '$room_type', '$hostel_name','available')";
                                            $result = mysqli_query($con,$query);
                                            if($result){
                                                echo "<div class='form'>
                                    <h3>You successfully created a room</h3>";
                                            }
                                        else{
                                            echo"<h3>An Error Occured room wasn't added</h3>";
                                            echo("Error description: " . mysqli_error($con));
                                        }}
                                ?>

                                <form class="needs-validation" validate action="" method="post">
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <div class="input-group">

                                                    <label for="validationCustom02">Room Number</label>
                                                    <input type="number" class="form-control" id="validationCustomMatric" name="room_no"
                                                        placeholder="Room Number" aria-describedby="inputGroupPrepend"
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom04">Hostel Name</label>
                                                <select class="custom-select form-control" id="validationCustom05" name="hostel_name"
                                                    required>
                                                    <option selected>Hostel Name</option>
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
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom05">Bedding Type</label>
                                                <select class="custom-select form-control" id="validationCustom05" name="room_type"
                                                    required>
                                                    <option selected>Bedding Type</option>
                                                    <option value="12">Common Room</option>
                                                    <option value="6">6 beded</option>
                                                    <option value="4">4 Beded</option>
                                                    <option value="2">2 Beded</option>
                                                    <option value="Msc1">Msc</option>
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
                                                    I choose to Create this room
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" name="submit" type="submit">create Room</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row" style="min-width:100%;">
                    <div class="col-12">

                        <div class="card" style="text-align:center;">
                            <div class="card-body">
                            <?php
                                if(isset($_POST['search'])){
                                  $valueToSearch = $_POST['valueToSearch']; 
                                  $query = "SELECT * FROM `room` WHERE CONCAT (`room_no`) LIKE '%".$valueToSearch."'";
                                  $search_result= filterTable ($query);
                                
                                }
                                else{
                                    $query = "SELECT * FROM `room`";
                                    $search_result= filterTable ($query);           
                                } 
                                function filterTable($query){
                                    $connect = mysqli_connect("localhost","root","","school");
                                    $filter_result =mysqli_query($connect,$query) ;
                                    return $filter_result;
                                }               
                            ?>
                                <h1 style="color:black;">Search By Room Number</h1>
                                <form class="form-inline  search" action="hostel_creation.php" method="post">
                                    <input class="form-control" style="display: inline-block; width: 95%; text-align:center; margin-left:2%;" type="text" placeholder="Search By Room Number" aria-label="Search" name="valueToSearch">
                                    <button class="btn btn-primary" style="width:100%;"type="submit" name="search" value="search">Search</button>
                                </form>
                                <br>
                                <div class="table-container table-responsive">
                                    <div class="table-responsive ">
                                        <table class="table table-bordered">
                                        <?php 
                                        if (isset($_POST['delete_btn'])) {
                                            $key = $_POST['keyToDelete'];
                                            $check = mysql_query("SELECT * FROM `room` WHERE id ='$key'") or die("not Found".mysql_error());
                                            if (mysql_num_rows($check)> 0) {
                                                $queryDelete = mysql_query("DELETE FROM `room` WHERE id ='$key'") or die("not deleted".mysql_error());
                                                echo "<h3>You successfully deleted the room</h3>";
                                            }
                                            else{ echo "<h3>The Record Does Not Exist</h3>";}
                                        }
                                        ?>
                                            <thead class="thead-dark ">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Hostel</th>
                                                    <th scope="col">Bed Type</th>
                                                    <th scope="col">Room No</th>
                                                    <th scope="col">Select</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-striped">
                                                
                                                <?php while($row = mysqli_fetch_array($search_result)):
                                                    $id = $row['hostel_id'];
//                                                  print_r($pdo);
//                                                    $stmt = $pdo->prepare('SELECT hostel_name FROM hostel WHERE id = ?');
//                                                    $stmt->execute([$row['hostel_id']]);
//                                                    $hostel = $stmt->fetchColumn();
                                                    $sql = "SELECT hostel_name FROM `hostel` WHERE id=:userid";
                                                    $stmt = $pdo->prepare($sql);
                                                    $stmt->bindValue('userid', $id);
                                                    $stmt->execute();
                                                    $hostel = $stmt->fetchColumn();
//                                                    echo($row);
//
//                                                    while ($row){
//
//                                                    }
                                                    ?>
                                                    <form action="" method="post">
                                                    <tr>
                                                    <td scope="row"><?php echo $row['id']; ?></td>
                                                    <td><?php echo $hostel; ?></td>
                                                    <td><?php echo $row['room_type']; ?></td>
                                                    <td><?php echo $row['room_no']; ?> </td> 
                                                    <td><input type="checkbox" name="keyToDelete" value="<?php  echo $row['id']; ?>" required></td>
                                                    <td><button class="btn btn-danger" id="btn_delete" name="delete_btn" type="submit">Delete</button></td>
                                                    </tr> 
                                                    </form>                                          
                                                <?php endwhile;?>    
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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