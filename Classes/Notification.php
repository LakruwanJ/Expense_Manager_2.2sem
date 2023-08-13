<?php

namespace Classes;

use PDOException;
use PDO;

require_once 'DbConnector.php';


class Notification {

    //1
    public function AddProSuccess($proid, $EmpID, $msj , $Date, $time) {//$EmpID - employee

        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $EmpID . '","' . $EmpID . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //2
    public function NewProToAllF($proid, $EmpID , $msj , $Date, $time) {

        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $EmpID . '","AllF","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //3
    public function UpdatebyFSuccess($proid, $FID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $FID . '","' . $FID . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();

    }
    
    //4
    public function UpdatebyFToE($proid, $FID, $emp, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $FID . '","' . $emp . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        echo $query;
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //5
    public function NewProToM($proid, $FID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $FID . '","AllM","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();

    }

    //6
    public function UpdatebyMSuccess($proid,   $MngID, $msj , $Date, $time) {

        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $MngID . '","' . $MngID . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();

    }

    //7
    public function UpdatebyMToE($proid, $MngID, $emp, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();
        
        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $MngID . '","' . $emp . '","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

    //8
    public function UpdatebyMToF($proid, $MngID, $msj , $Date, $time) {
        
        $dbcon = new DbConnector();
        $conn = $dbcon->getConnection();

        $query = 'INSERT INTO notification(ProIDOr, Nfrom, Nto, Status, Msj, Date, Time) VALUES ("' . $proid . '","' . $MngID . '","AllF","0","'.$msj .'","'. $Date.'","'. $time.'")';
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
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
        $pstmt->execute();
        
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
        $pstmt = $conn->prepare($query);
        $pstmt->execute();
        
    }

}
