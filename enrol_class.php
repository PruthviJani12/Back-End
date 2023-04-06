<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rishton Academy Primary School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function validation() {
    var teacher = document.getElementById("CTeacher");

    var calss = document.getElementById("Classes");

    var Room_No = document.getElementById("Room_No");

    var Class_Capacity = document.getElementById("Class_Capacity");
 
    if (teacher.value =="" || calss.value=="" || Room_No.value =="" || Class_Capacity.value=="" ) {
        
        alert("No Blanks are allowed!");
        return false;
    }
    else
    {
     true;
    }

}

</script>

</head>

<body>




<?php


    $link = mysqli_connect("localhost", "root", "", "rishton");

    if ($link == false) {
        die("Connection Failed: ");
    }


    if (isset($_POST['submit'])) {
        $cname = $_POST['Classes'];
        $RoomNo = $_POST['Room_No'];
        $cap = $_POST['Class_Capacity'];
        $teacher = $_POST['teacher'];


        $sql = "INSERT INTO classes (Class_Name,Room_No,Class_Teacher,Students_Capacity)
                VALUES ('$cname','$RoomNo','$teacher','$cap')";

        if (mysqli_query($link, $sql)) {
            echo "<b>The Class has been Enroled Successfully</b> ";
        } else {
            echo "<b>Error Adding New Record.</b>";
        }
    }



    ?>













    <div class="container-fluid">
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <!-- <li class="nav-item">
          <a class="nav-link" href="#">Parents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Class</a>
        </li>   -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Students</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="enrol_student.php">Enrol New Student</a></li>
                                    <li><a class="dropdown-item" href="view_student.php">View All students</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Parents</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="add_parents.php">Add Parent</a></li>
                                    <li><a class="dropdown-item" href="view_parents.php">View Parent Data</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Class</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="enrol_class.php">Enrol in Class</a></li>
                                    <li><a class="dropdown-item" href="view_class.php">View all Classes</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Teacher</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="add_teachers.php">Add Teachers</a></li>
                                    <li><a class="dropdown-item" href="view_teachers.php">View all Teachers</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">Liabray</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="liabrary.php">Issue A Book</a></li>
                                    <li><a class="dropdown-item" href="view_liabrary.php">View all issed Books</a></li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">Sports</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="sports.php">Register for Sports</a></li>
                                    <li><a class="dropdown-item" href="view_sports.php">View all Sports details</a></li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xl-12 col-xxl-12">


                    <div class="bg-text">Rishton Academy Primary School</div>

                </div>
            </div>
        </header>


        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xl-12 col-xxl-12">


                    <p Id="form_title">Enrol Classes</p>
                    <hr style="height:3px;border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">

                    <form target="_blank" onsubmit="return validation()" action="enrol_class.php" method="post">

                        <label for="Classes">Class Name</label><br>
                        <select id="Classes" name="Classes">
                            <option value="select">Select</option>
                            <option value="Reception_Year">Reception Year</option>
                            <option value="Year_One">Year One</option>
                            <option value="Year_Two">Year Two</option>
                            <option value="Year_Three">Year Three</option>
                            <option value="Year_Four">Year Four</option>
                            <option value="Year_Five">Year Five</option>
                            <option value="Year_Six">Year Six</option>
                        </select>

                        <br>
                        <label for="Room_No">Room_No:</label><br>
                        <input type="text" id="Room_No" name="Room_No" placeholder="Room_No" required><br>


                        <br>

                        <label id="CTeacher" >Class Teacher</label><br>
                        <select name="teacher">
                            <?php

                            $sql = mysqli_query($link, "SELECT Staff_id, Fname, Lname FROM teachers");


                            while ($row = $sql->fetch_assoc()) {
                                echo "<option value='{$row['Staff_id']}'>{$row['Staff_id']}  {$row['Fname']}  {$row['Lname']} </option>";
                            }

                            ?>
                        </select>

                        <br>




                        <label for="Class_Capacity">Class_Capacity:</label><br>
                        <input type="text" id="Class_Capacity" name="Class_Capacity" placeholder="Class_Capacity" required><br>

                        <!-- <label for="Class_Teacher">Class_Teacher:</label><br>
                            <input type="text" id="Class_Teacher" name="Class_Teacher" placeholder="Class_Teacher" required><br> -->



                        <input id="submit" type="submit" name="submit" value="submit">
                </div>

                <hr style="height:3px;border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">


                </form>


            </div>


        </div>


    </div>
    </div>






</body>
<footer>
    <div class="container-fluid mt-3">
        <div class="raw">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-xl-12 col-xxl-12">
                <marquee class="copyrights" behavior="alternate"> &#169; 2023 &#124; Rishton Academy Primary School
                    , All rights Reserved.
                </marquee>
            </div>
        </div>
</footer>

</html>