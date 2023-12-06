<?php 
    require_once '../model/database.inc.php';
    require_once '../model/update.inc.php';

    $id_rec = $_GET['id_rec'];
    $id_student = $_GET['username'];
    $passwd = $_GET['password'];
    $prename = $_GET['prename'];
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $gender = $_GET['gender'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    $mobile = $_GET['mobile'];
    $email = $_GET['email'];
    $type_id = $_GET['type_id'];
    
    $objUpdate = new Update();
    $alert = $objUpdate->UpdateData($id_student,$passwd,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$type_id,$id_rec);

    if($type_id == 1){
        if($alert){
            echo "<script>alert('Updated.')</script>";
            echo "<script>window.location.assign('../admin.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('register.php')</script>";
        }
    }else{
        if($alert){
            echo "<script>alert('Updated.')</script>";
            echo "<script>window.location.assign('../useredit.php')</script>";
        }else{
            echo "<script>alert('Failed')</script>";
            echo "<script>window.location.assign('register.php')</script>";
        }
    }

?>