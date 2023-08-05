<!DOCTYPE html>
<?php
// Establish a connection to the MySQL server
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "expensemanager";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users WHERE id='3'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["FullName"];
        $pos = $row["Possion"];
        $mail = $row["email"];
        $pno = $row["PhoneNumOffice"];
        $pnp = $row["PhoneNumPersonal"];
    }
}
$conn->close();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!--add external files-->
        <link rel="Stylesheet" href="css/navbar.css">
        <script src="navbar.js"></script>

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet"/>

        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

        <style>
            /* Hide scrollbar for Chrome, Safari and Opera */
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
                    </style>

    </head>
    <body> 

        <section style="background-color: #eee; padding-top: 20px">    
            <div class="container py-5">

                <!--nav bar-->
                <br>
                <div class="row">
                    <div class="col">
                        <nav class="bg-light rounded-3 p-3 mb-4">
                            <ol class="breadcrumb mb-0">
                                <li>Home </li>
                                <li>&nbsp;&nbsp; > &nbsp;&nbsp;</li>
                                <li>Our Team</li>
                                <li>&nbsp;&nbsp; > &nbsp;&nbsp;</li>
                                <li class="active">User Profile - <?php echo $name ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <!--user Information-->
                <div class="row">

                    <!--propic and name-->
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="Images/propic.JPG" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3"><?php echo $name ?></h5>
                                <p class="text-muted mb-1"><?php echo $pos ?></p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="editProfile.php"><button type="button" class="btn btn-primary">Edit Profile</button></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8">

                        <!--main information-->
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0">ID</p></div>
                                    <div class="col-sm-8"><p class="text-muted mb-0"><?php echo $id ?></p></div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0">Full Name</p></div>
                                    <div class="col-sm-8"><p class="text-muted mb-0"><?php echo $name ?></p></div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0">Possition</p></div>
                                    <div class="col-sm-8"><p class="text-muted mb-0"><?php echo $pos ?></p></div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0">Email</p></div>
                                    <div class="col-sm-8"><p class="text-muted mb-0"><?php echo $mail ?></p></div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0">Phone Number(Office)</p></div>
                                    <div class="col-sm-8"><p class="text-muted mb-0"><?php echo $pno ?></p></div>
                                </div><hr>
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0">Phone Number(Personal)</p></div>
                                    <div class="col-sm-8"><p class="text-muted mb-0"><?php echo $pnp ?></p></div>
                                </div>
                            </div>
                        </div>

                        <!--praposals-->
                        <br>
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4"><p class="mb-0"><b>Proposal Details</b></p></div><hr>
                                </div>
                                <div class="row">
                                    <p class="mb-0">Proposal 1</p>
                                </div><hr>
                                <div class="row">
                                    <p class="mb-0">Proposal 2</p>
                                </div><hr>
                                <div class="row">
                                    <p class="mb-0">Proposal 3</p>
                                </div><hr>
                                <div class="row">
                                    <p class="mb-0">Proposal 4</p>
                                </div><hr>
                                <div class="row">
                                    <p class="mb-0">Proposal 5</p>
                                </div><hr>
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="proposals.php"><button type="button" class="btn btn-primary">See all</button></a>
                                </div>
                            </div>
                        </div>
                    </div>   


                </div>
            </div>
        </section>


    </body>
</html>
