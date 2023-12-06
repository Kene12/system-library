<?php 
    require_once '../model/database.inc.php';
    require_once '../model/update.inc.php';

    $id = $_GET['id'];
    $id_book = $_GET['id_book'];
    $receiver = $_GET['receiver'];
    $id_rec = $_GET['id_rec'];
    
    $objUpdate = new Update();
    $alert = $objUpdate->UpdatereturnW($id,$receiver,$id_rec,$id_book);

    
        if($alert){
            echo "<script>alert('Updated.')</script>";
            echo "<script>window.location.assign('../borrow.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('editborrow.php')</script>";
        }
    

?>