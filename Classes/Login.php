<?php

namespace Classes;

use PDOException;
use PDO;
use Classes\DbConnector;

require 'DbConnector.php';



//put your code here
$Err = "";
$uname = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["username"])) {
        $Err = "2";
    } else {
        $uname = trim($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $Err = " 3";
    } else {
        $pass = trim($_POST["password"]);
    }


    if (!empty($uname) && !empty($pass)) {



        $dbcon = new DbConnector();
        $con = $dbcon->getConnection();

        $sql = " SELECT password FROM users WHERE username='$uname' ";
        echo $sql;

        $pstmt = $con->prepare($sql);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($rs as $value) {
            $pword = $value->password;
        }

        echo "$pword";

        if ($pass == $pword) {
            $sql = " SELECT * FROM users WHERE username='$uname' ";

            $pstmt = $con->prepare($sql);
            $pstmt->execute();
            $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($rs as $value) {
               $fullName =$value->FullName;
               $possision =$value->Possion;
               $email =$value->email;
               $PhoneNumOffice =$value->PhoneNumOffice;
               $PhoneNumPersonal =$value->PhoneNumPersonal;
            }
            
            echo "$fullName";
            
            if ($fullName== NULL && $email == NULL && $PhoneNumOffice== 0 && $PhoneNumPersonal == 0) {
                header("Location: ../editProfile.php");
                
            } else if ($possision== "Manager") {
                 header("Location: ../DashMng.php");
                
                
            }else if ($possision== "FTmember") {
                 header("Location: ../DashFTM.php");
                
                
            }else if ($possision== "emp") {
                 header("Location: ../DashEmp.php");
                
                
            } else {
                $Err="6";
            }
            
        } else {
            $Err = "5";
        }
    } else {
        $Err = "4";
    }
} else {
    $Err = "1";
}

