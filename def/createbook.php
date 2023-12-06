<?php
    require_once '../model/database.inc.php';
    require_once '../model/create.inc.php';
    
    $bookname = isset($_GET['bookname']) ? $_GET['bookname'] : null;
    $author = isset($_GET['author']) ? $_GET['author'] : null;
    $publisher = isset($_GET['publisher']) ? $_GET['publisher'] : null;
    $price = isset($_GET['price']) ? $_GET['price'] : null;
    $stu = isset($_GET['stu']) ? $_GET['stu'] : null;
    $ter = isset($_GET['ter']) ? $_GET['ter'] : null;



    if($bookname == null){
        echo "<script>alert('Value is Null')</script>";
        echo "<script>window.location.assign('addbook.php')</script>";
    }else{
        $objCreate = new Create();
        $alert = $objCreate->createBook($bookname,$author,$publisher,$price,$stu,$ter);
        
        if($alert){
            echo "<script>alert('Save')</script>";
            echo "<script>window.location.assign('../book.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('addbook.php')</script>";
        }
    }

    
?>