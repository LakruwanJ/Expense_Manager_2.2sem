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

    </head>
    <body> 

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid" >

                <!-- Logo area -->
                <a class="navbar-brand" class="navbar-nav d-flex justify-content-end align-items-center" href="#">
                    <p> logo </p>
                </a>

                <!-- Right links -->
                <ul  class="navbar-nav ms-auto d-flex flex-row"> 

                    <li>
                        <a class="nav-link" role="button">
                            <img src="a.jpg" class="rounded-circle" height="40" alt="ProPic"/>
                        </a>
                    </li>
                    <li>&nbsp;</li>            
                </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
    
    
    
<section style="background-color: #eee; padding-top: 50px">    
  <div class="container py-5">
      
    <!--nav bar-->
    <br>
      <div class="row">
      <div class="col">
        <nav class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li><a href="index.php">Home </a></li>
            <li>&nbsp;&nbsp; > &nbsp;&nbsp;</li>
            <li><a href="Our_team.php"> Add Proposal</a></li>
          </ol>
        </nav>
      </div>
      </div>    
    
    <div class="card mb-8">
          <div class="card-body">
              <form action="" method="">
            <div class="row">
                <div class="col-sm-4"><p class="mb-0" style="padding-bottom: 5px" >Add detials</p></div><hr style="padding: 5px">
            </div>
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Author Name</p></div>
              <div class="col-sm-8"><input type="text" name="id" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your Name" /></div>
            </div><hr style="opacity: .05">
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Author Phone Number</p></div>
              <div class="col-sm-8"><input type="text" name="Full Name" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your Phone Number" /></div>
            </div><hr style="opacity: .05">
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Author e-mail</p></div>
              <div class="col-sm-8"><input type="text" name="Possition" id="form3Example3" class="form-control form-control-lg" placeholder="Enter your Email" /></div>
            </div><hr style="opacity: .05">
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Date</p></div>
              <div class="col-sm-8"><input type="text" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="DD/MM/YYYY" /></div>
            </div>
        </div>

          <div class="card-body">
            <div class="row">
                <div class="col-sm-4"><p class="mb-0" style="padding-bottom: 5px" >Add Proposal detials</p></div><hr style="padding: 5px">
            </div>
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Proposal Subject</p></div>
              <div class="col-sm-8"><input type="text" name="id" id="form3Example3" class="form-control form-control-lg" placeholder="" /></div>
            </div><hr style="opacity: .05">
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Category</p></div>
              <div class="col-sm-8"><input type="text" name="Full Name" id="form3Example3" class="form-control form-control-lg" placeholder="" /></div>
            </div><hr style="opacity: .05">
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Description</p></div>
              <div class="col-sm-8"><input type="textArea" name="Possition" id="form3Example3" class="form-control form-control-lg" placeholder="" /></div>
            </div><hr style="opacity: .05">
            <div class="row">
              <div class="col-sm-4"><p class="mb-0">Add Document</p></div>
              <div class="col-sm-8"><input type="text" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="" /></div>
            </div><hr style="opacity: .05">
              </form>
        </div>

        
    </div>
  </div>
 
</section>

    
</body>
</html>
