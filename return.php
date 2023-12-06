<?php
    require_once 'model/database.inc.php';
    require_once 'model/read.inc.php';
    $objRead = new Read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ข้อมูลการคืนหนังสือ</title>
</head>
<body>
<ul>
  <li><a  href="useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a href="book.php">ข้อมูลหนังสือ</a></li>
  <li><a  href="admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a  href="borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a class="active" href="return.php">ข้อมูลการคืนหนังสือ</a></li>
  <li><a href="search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
  <li><a href="login.php">ออกจากระบบ</a></li>
</ul>
<div class="topnav" style="height: 50px;">
  <div class="search-container">
    <form action="search.php" method="GET">
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
        <div class="grid-container" style="width: 220px; padding-left: 0px;"><h1 class="grid-item">ข้อมูลการคืนหนังสือ</h1> 
        <a href='def/addreturn.php'><button type="submit" class="grid-item1 button-49" role="button">เพิ่ม</button></div></a>
        <hr>
        <table border="1" style="width: 1102px;">
        <thead>
            <th>รหัสการคืน</th>
            <th>รหัสหนังสือ</th>
            <th>ชื่อหนังสือ</th>
            <th>รหัสผู้ยืม</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>รหัสการยืม</th>
            <th>ผู้รับหนังสือ</th>
            <th>เวลาที่คืน</th>
            <th>เวลาที่ยืม</th>
            <th>edit delete</th>
        </thead>
        <tbody>
            <?php
                $objRead->readreturnn();
            ?>
            
        </tbody>
        </table>
    </div>
</body>
</html>