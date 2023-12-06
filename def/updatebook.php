<?php 
    require_once '../model/database.inc.php';
    require_once '../model/update.inc.php';

    $id = $_GET['id_book'];
    $bookname = $_GET['bookname'];
    $author = $_GET['author'];
    $publisher = $_GET['publisher'];
    $price = $_GET['price'];
    $stu = $_GET['stu'];
    $ter = $_GET['ter'];
    
    $objUpdate = new Update();
    $alert = $objUpdate->Updatebook($id,$bookname,$author,$publisher,$price,$stu,$ter);

    
        if($alert){
            echo "<script>alert('Updated.')</script>";
            echo "<script>window.location.assign('../book.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('editbook.php')</script>";
        }
    

?>