<?php

namespace Classes;

use PDOException;
use PDO;

require 'DbConnector.php';

use Classes\DbConnector;

class EditPro {
    private $want_id;
    private $possion_type;
    private $is_reject = FALSE;

    public function set_possion($ptype) {
        $this->possion_type = $ptype;
    }


    public function set_id($id){
        $this->want_id = $id;
      }

    public function description() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposal WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Description'];
            return $rs;
        }
    }

    public function approve() {

        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        $Status = "Approved";

        $sql = "UPDATE proposal SET Status = '$Status' WHERE ProID = '{$this->want_id}'";

        if ($con->exec($sql) === FALSE) {
            echo 'some errors plz check the code ';
        }
    }

    public function reject() {

        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        $Status = "Rejected";

        $sql = "UPDATE proposal SET Status = '$Status' WHERE ProID = '{$this->want_id}'";

        if ($con->exec($sql) == FALSE) {
            echo 'some errors plz check the code ';
        }
    }

    public function descriptionF() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposalmodify WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['DescriptionF'];
            return $rs;
        }
    }

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

    public function Addcomment($cmmt,$pssn) {

        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        if ($pssn == "manager") {
            $sql = "UPDATE proposalmodify SET DescriptionM ='".$cmmt."' WHERE ProID = '{$this->want_id}'";
            if ($con->exec($sql) !== FALSE){
                return TRUE;
            }
        }elseif ($pssn == "finance team") {
            $sql = "UPDATE proposalmodify SET DescriptionF ='".$cmmt."' WHERE ProID = '{$this->want_id}'";
            if ($con->exec($sql) !== FALSE){
                return TRUE;
            }
        }
    }

    public function EmpID() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT employee.Username FROM employee WHERE employee.EmpID = (SELECT proposal.EmpID FROM proposal WHERE proposal.ProID = '" . $this->want_id . "')";


        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Username'];
            return $rs;
        }
    }

    public function subject() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposal WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Subject'];
            return $rs;
        }
    }

    public function SDate() {
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

    public function Category() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposal WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Category'];
            return $rs;
        }
    }

    public function Amount() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposal WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Amount'];
            return $rs;
        }
    }

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

    public function DateF() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposalmodify WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Date'];
            return $rs;
        }
    }

    public function DateM() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT * FROM proposalmodify WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        // create prepare statement
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Date'];
            return $rs;
        }
    }

    public function MngID() {
        //create db conection
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();

        //$want_id = "p002";
        // set quary
        $sql_1 = "SELECT employee.Username FROM employee WHERE employee.EmpID=(SELECT manager.EmpID FROM manager,proposalmodify WHERE manager.MngID = proposalmodify.MngID AND proposalmodify.PM_ID=(SELECT proposalmodify.PM_ID FROM proposalmodify,proposal WHERE proposalmodify.ProID = proposal.ProID AND proposal.ProID = '" . $this->want_id . "')) LIMIT 1";
        // create prepare statement
       
        $pstmt = $con->query($sql_1);
        while ($row = $pstmt->fetch()) {
            $rs = $row['Username'];
            return $rs;
        }
    }
    
    public function is_rejected(){
        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();
        
        $sql = "SELECT Status FROM  proposal WHERE ProID = '" . $this->want_id . "' LIMIT 1";
        $result = $con->query($sql);
        while ($row = $result->fetch()){
            if ($row['Status'] != null) {
                $this->is_reject = TRUE;
                return $this->is_reject;
            }
        }
        return $this->is_reject;
    }

    public function Edit() {

        $db_obj = new DbConnector();
        $con = $db_obj->getConnection();  
    }

}
