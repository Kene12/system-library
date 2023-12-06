<?php
    require_once '../model/database.inc.php';
    require_once '../model/create.inc.php';
    
    $username = isset($_GET['id_student']) ? $_GET['id_student'] : null;
    $password = isset($_GET['password']) ? $_GET['password'] : null;
    $fname = isset($_GET['fname']) ? $_GET['fname'] : null;
    $lname = isset($_GET['lname']) ? $_GET['lname'] : null;
    $gender = isset($_GET['gender']) ? $_GET['gender'] : null;
    $prename = isset($_GET['prename']) ? $_GET['prename'] : null;
    $address = isset($_GET['address']) ? $_GET['address'] : null;
    $mobile = isset($_GET['mobile']) ? $_GET['mobile'] : null;
    $email = isset($_GET['email']) ? $_GET['email'] : null;
    $age = isset($_GET['age']) ? $_GET['age'] : null;
    $type = isset($_GET['type']) ? $_GET['type'] : null;
    if($type == 'stude'){
        $admin = 2;
    }else if($type == 'teacher'){
        $admin = 3;
    }else{
        $admin = 1;
    }
    if($username == null and $password == null){
        echo "<script>alert('Value is Null')</script>";
        echo "<script>window.location.assign('registeradmin.php')</script>";
    }else{
        $objCreate = new Create();
        $alert = $objCreate->createLoing($username,$password,$fname,$lname,$gender,$prename,$address,$mobile,$email,$age,$admin);
        if($admin == 1){
            if($alert){
                echo "<script>alert('Save')</script>";
                echo "<script>window.location.assign('../admin.php')</script>";
            }else{
                echo "<script>alert('Failed')</script>";
                echo "<script>window.location.assign('registeradmin.php')</script>";
            }
        }else{
            if($alert){
                echo "<script>alert('Save')</script>";
                echo "<script>window.location.assign('../useredit.php')</script>";
            }else{
                echo "<script>alert('Failed')</script>";
                echo "<script>window.location.assign('register.php')</script>";
            }
        }
        
    }
?>