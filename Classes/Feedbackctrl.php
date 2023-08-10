<?php

    namespace Classes;

    session_start();

    use PDOException;
    use PDO;

    require 'DbConnector.php';

    use Classes\DbConnector;

    $name = $FeedErr = $Feed = "";
    $uid = 1; //$_SESSION["u_id"];
    //if ($_SESSION["u_id"]) {
    if (TRUE) {

        $con_obj = new DbConnector();
        $con = $con_obj->getConnection();
        //$sql = "SELECT Username FROM employee WHERE EmpID = '{$_SESSION['u_id']}' LIMIT 1";
        $sql = "SELECT Username FROM employee WHERE EmpID = '1' LIMIT 1";
        $result = $con->query($sql);


        while ($row = $result->fetch()) {
            $name = $row["Username"];
        }
    }
 
    

    if (isset($_POST["add"])) {
        
        if (empty($_POST["FEED"])) {
            $FeedErr = " <p style='color:red; font-family:Open Sans; font-weight: bold;'>* Feedback is required </p>";
            
        } else {
            $Feed = trim($_POST["FEED"]);
            $Feed = " <p style='color:green; font-family:Open Sans; font-weight: bold; ' >Thank you for your feedback </p>";
            
            $dbcon = new DbConnector();
            $con = $dbcon->getConnection();
            
            $currentDateTime = date("Y-m-d");
            

            $sql= 'INSERT INTO feedback (EmpID,Msj, date) VALUES ("'.$uid.'","' . trim($_POST["FEED"]) . '","'.$currentDateTime.'")' ;
            
            
            if ($con->exec($sql) !== FALSE) {
                
            }
        }
        
    }
    
    //Feedback Cards Section -->
    //name
     public function FID() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT employee.Username FROM employee WHERE employee.EmpID=(SELECT financeteam.EmpID FROM financeteam WHERE financeteam.FID=(SELECT proposalmodify.FID FROM proposalmodify,proposal WHERE proposalmodify.ProID = proposal.ProID AND proposal.ProID = '" . $this->want_id . "')) LIMIT 1;";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Username'];
            return $rs;
        }
    }
    
    
    //feedback
    public function descriptionM() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposalmodify WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['DescriptionM'];
            return $rs;
        }
    }
    
    //Date
 public function Date() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposal WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Date'];
            return $rs;
        }
    }
    
      
?> 