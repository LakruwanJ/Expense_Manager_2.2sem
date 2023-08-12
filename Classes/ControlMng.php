<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once 'Notification.php';
    $noti = new Classes\Notification();

    require_once 'DbConnector.php';
    $dbcon = new Classes\DbConnector();


    if (isset($_POST['Add_Income'])) {

      
        
    } elseif (isset($_POST['Add_expenses'])) {

       
    }
}else{
    header("Location: ../Index.php");
}
