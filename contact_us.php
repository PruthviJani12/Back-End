<!DOCTYPE html>
<html>

<head>

    <title>Rishton Academy Primary School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>






    <script>
        function initMap() {
            // Map coordinates
            const rishtonAcademyCoords = { lat: 51.5074, lng: -0.1278 };
            // Map options
            const mapOptions = {
                zoom: 16,
                center: rishtonAcademyCoords
            };
            // Create map object
            const map = new google.maps.Map(document.getElementById("map"), mapOptions);
            // Marker for Rishton Academy
            const marker = new google.maps.Marker({
                position: rishtonAcademyCoords,
                map: map,
                title: "Rishton Academy Primary School"
            });
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];
       


        $sql = "INSERT INTO inquiry (Name,Email,Messages)
             VALUES ('$name','$email','$msg')";

        if (mysqli_query($link, $sql)) {
            echo "<b>The Message has been Sent Successfully</b> ";
        } else {
            echo "<b>Error Adding New Record.</b>";
        }
    }



    ?>





    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img id="logo" src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Students</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="enrol_student.php">Enrol New Student</a></li>
                                <li><a class="dropdown-item" href="view_student.php">View All students</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Parents</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="add_parents.php">Add Parent</a></li>
                                <li><a class="dropdown-item" href="view_parents.php">View Parent Data</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Class</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="enrol_class.php">Enrol in Class</a></li>
                                <li><a class="dropdown-item" href="view_class.php">View all Classes</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Teacher</a>
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

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-6 col-xl-6 col-xxl-6">
            <div class="contact-form">

                <form action="contact_us.php" method="post">
                    <h3>Get in touch</h3>
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" required></textarea><br>
                    <button name="submit" type="submit">Submit</button><br>
                </form>
            </div>


        </div>

        <div id="fr" class="col-sm-6 col-md-6 col-lg-6 col-xs-6 col-xl-6 col-xxl-6">
            <h1>Contact Us</h1>
            <div class="contact-info">
                <h2>Address</h2>
                <p>Rishton Academy Primary School<br>
                    123 Main Street<br>
                    Rishton, AB12 3CD<br>
                    United Kingdom</p>
                <h2>Phone</h2>
                <p>General Enquiries: 01234 567890<br>
                    Admissions: 01234 567891</p>
                <h2>Email</h2>
                <p>General Enquiries: info@rishtonacademy.co.uk<br>
                    Admissions: admissions@rishtonacademy.co.uk</p>
                <h2>Social Media</h2>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>

    </div>
    </div>

    <div class="map">
        <h2>Find us on the map</h2>
        <div id="map" style="width:100%; height:400px;">
            <img src="images/maps.png" width="100%">
        </div>
    </div>





    <!-- // Initialize Google Maps -->



</body>

</html>