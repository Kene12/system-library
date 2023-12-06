<?php
    session_start();
    require_once './model/database.inc.php';
    require_once './model/read.inc.php';
    $id_rec = $_SESSION['ID_rec'];
    $objLogin = new Read();
      $data = $objLogin->readData($id_rec);
      $id = $data[0];
      $username = $data[1];
      $password = $data[2];
      $prename = $data[3];
      $firstname = $data[4];
      $lastname = $data[5];
      $gender = $data[6];
      $age = $data[7];
      $address = $data[8];
      $mobile = $data[9];
      $email = $data[10];
      $type_id = $data[11];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="menu.css">
    <title>ข้อมูลผู้ใช้</title>
</head>
<body>
<ul>
    <li><a class="active" href="userporfie.php">ข้อมูลผู้ใช้</a></li>
    <li><a href="searchUser.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
    <li><a href="login.php">ออกจากระบบ</a></li>
</ul>
<div class="topnav" style="height: 50px;">
  <div class="search-container">
    <form action="searchUser.php" method="GET">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" style="
    width: 70px;
    height: 32px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
    <div style="margin-left:15%;padding:1px 16px;height:1000px;margin-top: 10px;">
    
    <h1>ข้อมูลผู้ใช้</h1><hr/>
    <div class="grid-e">
      <div>
        <h4 class="item2">รหัสผู้ใช้:<?=$id?></h4>
        <p>ชื่อผู้ใช้: <?=$username?></p>
        <p>ชื่อ: <?=$firstname?></p>
        <p>นามสกุล: <?=$lastname?></p>
        <p>เพศ: <?=$gender?></p>
        <p>อายุ: <?=$age?></p>
        <p>เบอร์: <?=$mobile?></p>
        <p>Email: <?=$email?></p>
        <p><button type="submit" onclick="window.history.back();">กลับ</button></p>
      </div>
      </div>
    
    
    </div>
</body>
</html>