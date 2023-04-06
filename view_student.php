<html>

<head>
    <title>
        View Students
    </title>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        table {
            color: #f1f1f1;
            text-shadow: 3px 3px 3px 3px #000000;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            text-align: center;
            width: 100%;
            
        }
    </style>



</head>

<body>
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
                            <!-- <li class="nav-item">
          <a class="nav-link" href="#">Parents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Class</a>
        </li>   -->
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
    

    <?php


    $link = mysqli_connect("localhost", "root", "", "rishton");
    // Check connection
    if ($link === false) {
        die("Connection failed: ");
    }
    ?>

    <h2>See all Students</h2>

    <table>

        <tr>
            <th width="150px">student ID<br>
                <hr>
            </th>
            <th width="250px">FName<br>
                <hr>
            </th>
            <th width="250px">LName<br>
                <hr>
            </th>
            <th width="150px">Blood Group<br>
                <hr>
            </th>
            <th width="250px">Date Of Birth<br>
                <hr>
            </th>
            <th width="150px">Gender<br>
                <hr>
            </th>

        </tr>

        <?php
        /* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/
        $sql = mysqli_query($link, "SELECT Student_id,Fname,Lname,Blood_Group,Date_Of_Birth,Gender  FROM pupils");
        while ($row = $sql->fetch_assoc()) {
            echo "
			<tr>
				<th>{$row['Student_id']}</th>
				<th>{$row['Fname']}</th>
                <th>{$row['Lname']}</th>
                <th>{$row['Blood_Group']}</th>
                <th>{$row['Date_Of_Birth']}</th>
                <th>{$row['Gender']}</th>
			</tr>";
        }
        ?>

</body>

</html>