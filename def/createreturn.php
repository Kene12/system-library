<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    require_once '../model/create.inc.php';
    require_once '../model/update.inc.php';
    
    $id_rec = isset($_GET['id_rec']) ? $_GET['id_rec'] : null;
    $id_book = isset($_GET['id_book']) ? $_GET['id_book'] : null;
    $receiver = isset($_GET['receiver']) ? $_GET['receiver'] : null;
    if($id_rec == null and $id_book == null){
        echo "<script>alert('Value is Null')</script>";
        echo "<script>window.location.assign(createborrow.php')</script>";
    }else{
        $objCreate = new Create();
        $objRead = new Read();
        $objUpdate = new Update();
            $data = $objRead->readBorrow1($id_rec,$id_book);
            if($data[1] == 1){
                $borrowTime = $data[3];
            }else{
                $borrowTime = $data[2];
            }
            $id_borrow = $data[0];
            $tomorrow  = $data[4];
            $status = 'borrow';
            $alert = $objCreate->createBorrow($id_rec,$id_book,$id_borrow,$receiver,$tomorrow);
            $alert = $objUpdate->UpdateSbook($status,$id_book);
            if($alert){
                echo "<script>alert('$id_book')</script>";
            
                echo "<script>window.location.assign('../borrow.php')</script>";
            }else{
                echo "<script>alert('Failed')</script>";
                echo "<script>window.location.assign('addborrow.php')</script>";
        
        }
    }

    
?>