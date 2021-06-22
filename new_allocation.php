
  
        <?php include('assets/includes/header.php'); ?>  

<body>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="alpha-app">
        <!-- Page Header -->
     
        <!-- Sidebar includes  -->
        <?php include('assets/includes/sidebar.php'); ?>  
        <!-- Sidebar includes end  -->
        <div class="page-content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h1 class="">Hostel Allocation Form</h1>
                                <?php include('db.php'); ?>  
                                <?php
                                global $con;
                                    // require('db.php');
                                    // If form submitted, insert values into the database.
                                    if (isset($_REQUEST['matric'])){
                                        // removes backslashes
                                    $matric = stripslashes($_REQUEST['matric']);
                                        // escapes special characters in a string
                                    $matric = mysqli_real_escape_string($con,$matric); 
                                    $Dept = stripslashes($_REQUEST['Dept']);
                                    $Dept = mysqli_real_escape_string($con,$Dept);
                                    $lvl = stripslashes($_REQUEST['lvl']);
                                    $lvl = mysqli_real_escape_string($con,$lvl);
                                    $bedding = stripslashes($_REQUEST['bedding']);
                                    $bedding = mysqli_real_escape_string($con,$bedding);
                                    $hostel = stripslashes($_REQUEST['hostel']);
                                    $hostel = mysqli_real_escape_string($con,$hostel);

                                            $query = "INSERT into `hostel` (matric, Dept, lvl, bedding,hostel)
                                    VALUES ('$matric', '$Dept', '$level', '$bedding', '$hostel')";
                                            $result = mysqli_query($con,$query);
                                            if($result){
                                                echo "<div class='form'>
                                    <h3>You successfully added student.</h3>";
                                            }
                                        else{
                                            echo"<h3>An Error Occured Student wasn't added</h3>";
                                        }}
                                ?>

                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <div class="input-group">

                                                    <label for="validationCustom02">Matric Number</label>
                                                    <input type="text" class="form-control" id="validationCustomMatric"
                                                        placeholder="Matric Number" name="matric"aria-describedby="inputGroupPrepend"
                                                        required>
                                                    <div class="invalid-feedback">
                                                        Please
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="validationCustom04">Department</label>
                                                <select class="custom-select form-control" id="validationCustom05" name="Dept" required>
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
                                                <select class="custom-select form-control" id="validationCustom05" name="lvl" required>
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
                                                <select class="custom-select form-control" id="validationCustom05" name="bedding" required>
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
<!--                                                <select class="custom-select form-control" id="validationCustom05" name="hostel" required>-->
<!--                                                    <option selected>Hostel</option>-->
                                                    <!-- <?php
                                                    $query = "SELECT * FROM hostel ";
                                                     var_dump($query);
                                                    $filter_result = mysqli_query($con,$query) ;
                                                    while($row = mysqli_fetch_array($filter_result)):
                                                        print_r($row);
//                                                    <option value="Joseph Hall">Joseph Hall</option>
                                                    endwhile; ?> -->
<!--                                                </select>-->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" value=""
                                                    id="invalidCheck" required>
                                                <label class="custom-control-label" for="invalidCheck">
                                                    I choose to allocate the student above a computer generated room
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Allocate Room</button>
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