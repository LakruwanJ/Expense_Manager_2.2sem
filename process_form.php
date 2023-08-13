<?php

include_once 'Classes/DbConnector.php';

if (isset($_POST['submit'])) {
    $category = $_POST['category'];
    $empID = $_POST['empID'];
    $subject = $_POST['subject'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $status = 'pending';

    // Assuming your dbconnector.php has a class and method for database connection
    $dbcon = new Classes\DbConnector();
    $conn = $dbcon->getConnection();

    // Perform the SQL query to insert data into the database
    $query = "INSERT INTO proposal (EmpID, Category, Subject, Amount, Date, Description, Status) 
              VALUES ('$empID', '$category', '$subject', '$amount', '$date', '$description', '$status')";

    if ($conn->query($query) === TRUE) {
        echo "Proposal added successfully";
//notification part start
        require_once 'Classes/Notification.php';
        $noti = new Classes\Notification();
        $proid = "";
        $query = "SELECT ProID FROM proposal ORDER BY ProID DESC LIMIT 1";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($rs as $pro) {
            $proid = $pro->ProID;
        }
        $msj = "Sucessfully Added Proposal by $empID, Proposal ID : $proid";
        $Date = date("Y-m-d");
        $Time = date("H:i:s");

        $noti->AddProSuccess($proid, $empID, $msj, $Date, $Time);
        $msj = "New Proposal Added by $empID, Proposal ID : $proid";
        $noti->NewProToAllF($proid, $empID, $msj, $Date, $Time);
        //notification part start
    } else {
//        echo "Error: " . $conn->error;
    }
}

