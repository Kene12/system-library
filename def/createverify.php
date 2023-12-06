<?php
    require_once '../model/database.inc.php';
    require_once '../model/create.inc.php';
    require_once '../model/update.inc.php';
    date_default_timezone_set('Asia/Bangkok');
    session_start();
    $objUpdate = new Update();
    $id = $_SESSION['ID_r'];
    $id_book =  $_SESSION['ID_B'];
    $receiver = isset($_GET['receiver']) ? $_GET['receiver'] : null;
    $time = date("l jS \of F Y h:i:s A");
    $alert = $objUpdate->Updatereturn($time,$id,$receiver);
    $alert=$objUpdate->UpdateSbook('return',$id_book);

    
        if($alert){
            echo "<script>alert('Update')</script>";
            echo "<script>window.location.assign('../return.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('../return.php')</script>";
        }

    
?>