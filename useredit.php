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
    <title>ข้อมูลสมาชิก</title>
</head>
<body>
<ul>
  <li><a class="active" href="useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a href="book.php">ข้อมูลหนังสือ</a></li>
  <li><a href="admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a href="borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a href="return.php">ข้อมูลการคืนหนังสือ</a></li>
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
        <div class="grid-container" style="width: 220px; padding-left: 0px;"><h1 class="grid-item">ข้อมูลสมาชิก</h1> 
        <a href='def/register.php'><button type="submit" class="grid-item1 button-49" role="button">เพิ่ม</button></div></a>
        <hr>
        <table border="1">
        <thead>
            <th>รหัสผู้ใช้</th>
            <th>Username</th>
            <th>Password</th>
            <th>prename</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>gender</th>
            <th>age</th>
            <th>address</th>
            <th>mobile</th>
            <th>email</th>
            <th>type_id</th>
            <th>edit delete</th>
        </thead>
        <tbody>
            <?php
                $objRead->readDataAll();
            ?>
            
        </tbody>
        </table>
    </div>
</body>
</html>