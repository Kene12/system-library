<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    
    $getID = $_GET['id'];
    $objRead = new Read();
    $data = $objRead->readData($getID);
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
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php
    if($data[11] == 1){
  ?>
    <title>ข้อมูลเจ้าหน้าที่</title>
  <?php
    }else{
  ?>
    <title>ข้อมูลสมาชิก</title>
  <?php
    }
  ?>
    
    
</head>
<body>
<ul>
  <?php
  if($data[11] == 1){
  ?>
  <li><a href="../useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a href="../book.php">ข้อมูลหนังสือ</a></li>
  <li><a class="active" href="../admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a href="../borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a href="../return.php">ข้อมูลการคืนหนังสือ</a></li>
  <li><a href="../search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
  <li><a href="../login.php">ออกจากระบบ</a></li>
  <?php
  }else{
  ?>
  <li><a class="active" href="../useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a href="../book.php">ข้อมูลหนังสือ</a></li>
  <li><a  href="../admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a href="../borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a href="../return.php">ข้อมูลการคืนหนังสือ</a></li>
  <li><a href="../search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
  <li><a href="../login.php">ออกจากระบบ</a></li>
  <?php
  }
  ?>
  
</ul>
<div class="topnav" style="height: 50px;">
  <div class="search-container">
    <form action="../search.php?type=1" method="GET">
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
    <div style="margin-left:15%;padding:1px 16px;height:1000px;">
    <h1>แก้ไขข้อมูลเจ้าหน้าที่</h1><hr/>
    <form action="update.php" method="get">
        <input type="hidden" name="id_rec" value="<?=$id?>">
        <p>Username: <input type="text" name="username" value="<?=$username?>"></p>
        <p>Password: <input type="text" name="password" value="<?=$password?>"></p>
        <p>Prename: <input type="text" name="prename" value="<?=$prename?>"></p>
        <p>Firstname: <input type="text" name="firstname" value="<?=$firstname?>"></p>
        <p>Lastname: <input type="text" name="lastname" value="<?=$lastname?>"></p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <p>Age: <input type="text" name="age" value="<?=$age?>"></p>
        <p>Address: <input type="text" name="address" value="<?=$address?>"></p>
        <p>Mobile: <input type="text" name="mobile" value="<?=$mobile?>"></p>
        <p>Email: <input type="text" name="email" value="<?=$email?>"></p>
        <p>type_id: <input type="text" name="type_id" value="<?=$type_id?>"></p>
        <p><button type="submit">Save</button></p>
    </form>
    <p><a href="../adminedit.php"><button type="submit">AdminEdit</button></a></p>
    </div>
</body>
</html>