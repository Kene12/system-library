<?php
    session_start();
    require_once '../model/database.inc.php';
    require_once '../model/delete.inc.php';
    require_once '../model/read.inc.php';
    $objLogin = new Read();
    $conn = new Database();

    $username = isset($_GET['username']) ? $_GET['username'] : null;
    $password = isset($_GET['password']) ? $_GET['password'] : null;
      $data = $objLogin->readLogin($username);
      if($data[0] == $username and $data[1] == $password){
        if($data[2] == 1){
          
          echo "<script>window.location.assign('../useredit.php')</script>";
          
        }else{
          
          echo "<script>window.location.assign('../userporfie.php?search=null')</script>";
          $_SESSION['ID_rec'] = $data[3];
        }
      }else{
        echo "<script>";
          echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
          echo "window.history.back()";
        echo "</script>";
      }

    
?>