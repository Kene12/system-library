<?php 
    require_once '../model/database.inc.php';
    require_once '../model/update.inc.php';
    session_start();
    $id_borrow = $_SESSION['IDCOM'];
    $id_book = $_GET['id_book'];
    $lender = $_GET['lender'];
    $id_rec = $_GET['id_rec'];
    
    $objUpdate = new Update();
    $alert = $objUpdate->UpdateBor($id_borrow,$id_book,$lender,$id_rec);

    
        if($alert){
            echo "<script>alert('$id_borrow')</script>";
            echo "<script>window.location.assign('../borrow.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('editborrow.php')</script>";
        }
    

?>