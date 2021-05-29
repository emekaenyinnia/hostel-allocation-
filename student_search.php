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
    <title>Caleb University - Hostel Allocation Software</title>

    <!-- Styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
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
        <!-- Sidebar includes  -->
        <?php include('assets/includes/sidebar.php'); ?>
        <!-- Sidebar includes end  -->
        <div class="page-content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        
                        <div class="card" style="text-align:center;">
                            <div class="card-body">
                            <?php
                                if(isset($_POST['search'])){
                                  $valueToSearch = $_POST['valueToSearch']; 
                                  $query = "SELECT * FROM `students` WHERE CONCAT (`Matric`) LIKE '%$valueToSearch%' OR CONCAT (`Lname`) LIKE '%$valueToSearch%' OR CONCAT (`Fname`) LIKE '%$valueToSearch%'";
                                  $search_result= filterTable ($query);
                                
                                }
                                else{
                                    $query = "SELECT * FROM `students`";
                                    $search_result= filterTable ($query);           
                                } 
                                function filterTable($query){
                                    $connect = mysqli_connect("localhost","root","","school");
                                    $filter_result =mysqli_query($connect,$query) ;
                                    return $filter_result;
                                }               
                            ?>
                                <h1 style="color:black;">Search For A Student By Matric</h1>
                                <form class="form-inline  search" action="" method="post">
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
                                            $check = mysql_query("SELECT * FROM `students` WHERE id ='$key'") or die("not Found".mysql_error());
                                            if (mysql_num_rows($check)> 0) {
                                                $queryDelete = mysql_query("DELETE FROM `students` WHERE id ='$key'") or die("not deleted".mysql_error());
                                                echo "<h3>You successfully deleted the room</h3>";
                                            }
                                            else{ echo "<h3>The Record Does Not Exist</h3>";}
                                        }
                                        ?>
                                            <thead class="thead-dark ">
                                                <tr>
                    
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Matric Number</th>
                                                    <th scope="col">Hostel</th>
                                                    <th scope="col">Bed Type</th>
                                                    <th scope="col">Room No</th>
                                                    <th scope="col">Select</th>
                                                    <th scope="col">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-striped">
                                                
                                                <?php while($row =mysqli_fetch_array($search_result)):?>
                                                    <form action="" method="post">
                                                    <tr>
                                                    <td scope="row"><?php echo "<i>".$row['Fname'].' '.$row['Lname']."</i><br>" .' (Par Tel):'.$row['Parnumber']."<br>" .'(Stu Tel):'.$row['Stunumber']; ?></td>
                                                    <td><?php echo $row['Matric']; ?></td>
                                                    <td><?php echo $row['hostel_name']; ?></td>
                                                    <td><?php echo $row['room_type']; ?></td>
                                                    <td><?php echo $row['room_number']; ?> </td> 
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
    </main>

    </div><!-- App Container -->

    <?php include('assets/includes/footer.php'); ?>
</body>

</html>