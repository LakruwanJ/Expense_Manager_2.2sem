<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

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

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
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
<section style="background-color: #eee;" >
    
  <div class="container py-5">
      
    <!--nav bar-->
    <br>
      <div class="row">
      <div class="col">
        <nav class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li><a href="index.php">Home </a></li>
            <li>&nbsp;&nbsp; > &nbsp;&nbsp;</li>
            <li class="active">Our Team</li>
          </ol>
        </nav>
      </div>
    </div>
   
    
<!--    <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
        <form>
         

                   Email input 
          <div class="mb-4">
              <label class="form-label" for="form3Example3">Email address</label>
            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
            
          </div>

           Password input 
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          
          
            <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot password?</a></p>

        
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-block mb-4">Login</button>
             <div class="text-center">
            <p class="small fw-bold mt-2 pt-1 mb-0">Any Question? <a href="#!"
                class="link-danger">click</a></p>
          </div>

      </div>        </form>

      </div>
      </div>
    </div><br><br>-->
    
    
    

<?php
$sql1 = "SELECT value FROM possisions";
$val = [];
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $value = $row["value"];
        array_push($val, $value);        
    }
}
sort($val);
foreach ($val as $i){
    
//print titles    
$sql2 = "SELECT * FROM possisions WHERE value ='".$i."'";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $valPos = $row["name"];      
    }
    echo '
    <div class="row">
        <!--propic and name-->
        <div class="col">
          <div class="card mb-4">
            <div class="card-body text-center"><h4>'.$valPos.'</h4></div>
          </div>
        </div>            
    </div>';
}

//print cards
$cell = 0;
$sql3 = "SELECT id,FullName,email FROM users WHERE Possion='".$valPos."'";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        $name = $row["FullName"];
        $mail = $row["email"];
        if ($cell%4==0){
            echo '<div class="row">';
        }
        if ($cell%2==0){
            echo '<div class="col-lg-6">';
            echo '<div class="row">';            
        }
        
        echo '<div class="col-md-6"><div class="card mb-4">
                        <div class="card-body text-center"><img src="Images/propic.JPG" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">'.$name.'</h5>
                            <p class="text-muted mb-1">'.$mail.'</p><br>
                            <div class="d-flex justify-content-center mb-2">
                            <form action="Profile.php" method="POST">                            
                            <input type="hidden" name="ID" value="" />
                            <input type="submit" value="Profile" class="btn btn-primary"/></form>
                                
                            </div>
                        </div>
                    </div></div>';
                
        $cell++;        
        if ($cell%2==0){
            echo '</div>';
            echo '</div>';
        }
        if ($cell%4==0){
            echo '</div>';
        }
    }
}


}

?>
  
    <!--structure-->
<!--    <div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-md-6">
                    
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            1
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">

                    <div class="card mb-4">
                        <div class="card-body text-center">
                            2
                        </div>
                    </div>
                    
                </div>
                    
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row"> 
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            3
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            4
                        </div>
                    </div>
                </div></div>
        </div>
    </div>
    
        <div class="row">
        <div class="col-lg-6">
            <div class="row"> 
                <div class="col-md-6">
                    
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            5
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-6">

                    <div class="card mb-4">
                        <div class="card-body text-center">
                            6
                        </div>
                    </div>
                    
                </div>
                    
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row"> 
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            7
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            8
                        </div>
                    </div>
                </div></div>
        </div>
    </div>
</div>        -->
      
    
  </div>
</section>
    </body>
</html>
