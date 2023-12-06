<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    $objRead = new Read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>เพิ่มข้อมูลสมาชิก</title>
</head>
<body>
<ul>
<li><a class="active" href="../useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a href="../book.php">ข้อมูลหนังสือ</a></li>
  <li><a  href="../admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a href="../borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a href="../return.php">ข้อมูลการคืนหนังสือ</a></li>
  <li><a href="../search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
  <li><a href="../login.php">ออกจากระบบ</a></li>
</ul>
<div class="topnav" style="height: 50px;">
  <div class="search-container">
    <form action="../search.php" method="GET">
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
    <h1>Register</h1><hr/>
    <form action="create.php" method="get">
        <p>Username <input type="text" name="id_student"></p>
        <p>Password <input type="password" name="password"></p>
        <p>prename <input type="text" name="prename"></p>
        <p>firstname <input type="text" name="fname"></p>
        <p>lastname <input type="text" name="lname"></p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <p>age <input type="text" name="age"></p>
        <p>address <input type="text" name="address"></p>
        <p>mobile <input type="text" name="mobile"></p>
        <p>email <input type="text" name="email"></p>
        <input type="radio" id="stude" name="type" value="stude">
        <label for="stude">stude</label>
        <input type="radio" id="teacher" name="type" value="teacher">
        <label for="teacher">teacher</label>
        <p><button type="submit"  >Save</button></p>
    </form>
    <p><button type="submit" onclick="window.history.back();">Back</button></p>
    </div>
</body>
</html>