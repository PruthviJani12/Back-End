<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rishton Academy Primary School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>






    <?php


    $link = mysqli_connect("localhost", "root", "", "rishton");

    if ($link == false) {
        die("Connection Failed: ");
    }


    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $add = $_POST['address'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $occu = $_POST['occupation'];
        $child = $_POST['child'];



        $sql = "INSERT INTO parents (Fname,Lname,Addres,Email,Phone_No,Occupation,child_id)
         VALUES ('$fname','$lname','$add','$email','$phone','$occu','$child')";

        if (mysqli_query($link, $sql)) {
            echo "<b>The Parent has been Added Successfully</b> ";
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

                    <form target="_blank" action="add_parents.php" method="post">
                        <p Id="form_title">Add Parents</p>
                        <hr style="height:3px;border-width:0;color:rgb(255, 255, 255);background-color:rgb(255, 255, 255)">
                        <div class="form-group">
                            <!-- <label for="sid">Parent ID</label><br>
                            <input type="text" id="sid" name="sid" placeholder="Student ID"required><br> -->

                            <label for="fname">First name:</label><br>
                            <input type="text" id="fname" name="fname" placeholder="First Name" required><br>
                            <label for="lname">Last name:</label><br>
                            <input type="text" id="lname" name="lname" placeholder="Last Name" required><br>

                            <label for="address">Address:</label><br>
                            <textarea id="address" rows="4" cols="50" placeholder="Address..." name="address" required>
                                </textarea>
                            <br>

                            <label for="email">Email:</label><br>
                            <input type="text" id="email" name="email" placeholder="Email" required><br>
                            <label for="phone">Phone No:</label><br>
                            <input type="tel" id="phone" name="phone" placeholder="Phone No." required><br>

                            <label for="occupation">Occupation:</label><br>
                            <input type="text" id="occupation" name="occupation" placeholder="Occupation" required><br>

                            <br>

                            <label>Select child:</label>
                            <select name="child">
                                <?php

                                $sql = mysqli_query($link, "SELECT Student_id, Fname, Lname FROM pupils");


                                while ($row = $sql->fetch_assoc()) {
                                    echo "<option value='{$row['Student_id']}'>{$row['Student_id']}  {$row['Fname']}  {$row['Lname']} </option>";
                                }

                                ?>
                            </select>

                            <br>


                            <input id="submit" type="submit" name="submit" value="submit">



                            <br>

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
    </div>
</footer>

</html>