<?php

namespace Classes;

use PDOException;
use PDO;

require_once 'DbConnector.php';


class Notification {

    //1
    public function AddProSuccess($proid,$EmpID) {//$EmpID - employee

        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query2 = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $EmpID . '","' . $EmpID . '","0","1")';
        echo $query2;
        $pstmt2 = $conn->prepare($query2);
        $ok = $pstmt2->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
    }

    //2
    public function NewProToAllF($proid,$EmpID) {

        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
//
//        $query = "SELECT EmpID FROM proposal WHERE ProID = '.$proid.'";
//        $pstmt = $conn->prepare($query);
//        $pstmt->execute();
//        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
//        foreach ($rs as $sw) {
//            $f = $sw->EmpID;
//        }

        $query = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $EmpID . '","AllF","0","2")';
        echo $query;
        $pstmt = $conn->prepare($query);
        $ok = $pstmt->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
    }

    //3
    public function UpdatebyFSuccess($proid, $FID) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $FID . '","' . $FID . '","0","3")';
        echo $query;
        $pstmt = $conn->prepare($query);
        $ok = $pstmt->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
    }
    
    //4
    public function UpdatebyFToE($proid, $FID) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = "SELECT EmpID FROM proposal WHERE ProID = '.$proid.'";
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($rs as $sw) {
            $emp = $sw->EmpID;
        }
        
        $query2 = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $FID . '","' . $emp . '","0","4")';
        echo $query2;
        $pstmt2 = $conn->prepare($query2);
        $ok = $pstmt2->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
        
    }

    //5
    public function NewProToM($proid, $FID) {
        
        $query = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $FID . '","AllM","0","5")';
        echo $query;
        $pstmt = $conn->prepare($query);
        $ok = $pstmt->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
    }

    //6
    public function UpdatebyMSuccess($proid,$MngID) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query2 = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $MngID . '","' . $MngID . '","0","6")';
        echo $query2;
        $pstmt2 = $conn->prepare($query2);
        $ok = $pstmt2->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
        
    }

    //7
    public function UpdatebyMToE($proid,$MngID) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = "SELECT EmpID FROM proposal WHERE ProID = '.$proid.'";
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        $rs = $pstmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($rs as $sw) {
            $emp = $sw->EmpID;
        }
        
        $query2 = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $MngID . '","' . $emp . '","0","7")';
        echo $query2;
        $pstmt2 = $conn->prepare($query2);
        $ok = $pstmt2->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
        
    }

    //8
    public function UpdatebyMToF($proid,$MngID) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification( ProID, Nfrom, Nto, Status, Code) VALUES ("' . $proid . '","' . $MngID . '","AllF","0","8")';
        echo $query;
        $pstmt = $conn->prepare($query);
        $ok = $pstmt->execute();
        if ($ok > 0) {
            header("Location: ../index.php");
        } else {
            
        }
        
    }

    //9 ok
    public function AddExSuccess($ExID, $FID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $ExID . '","' . $FID . '","' . $FID . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //10 ok
    public function AddExSuccessToE($ExID, $FID, $emp, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $ExID . '","' . $FID . '","' . $emp . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $ok = $pstmt->execute();
        
    }

    //11 ok
    public function AddExSuccessToM($ExID, $FID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $ExID . '","' .  $FID . '","AllM","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //12 ok
    public function AddInSuccess($ExID, $FID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
       
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $ExID . '","' . $FID . '","' . $FID . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //13 ok
    public function AddInSuccessToM($InID, $FID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $InID . '","' . $FID . '","AllM","0","'.$msj .'","'. $Date.'","'. $time.'")';
        echo $query;
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
    }

}
