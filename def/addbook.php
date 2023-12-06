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
    <title>เพิ่มข้อมูลหนังสือ</title>
</head>
<body>
<ul>
<li><a  href="../useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a class="active" href="../book.php">ข้อมูลหนังสือ</a></li>
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
    
    <h1>เพิ่มข้อมูลหนังสือ</h1><hr/>
    <form action="createbook.php" method="get" >
        <p>Book name <input type="text" name="bookname" method="get"></p>
        <p>author <input type="text" name="author" method="get"></p>
        <p>publisher <input type="text" name="publisher" method="get"></p>
        <p>price <input type="text" name="price" method="get"></p>
        <p>จำนวนวันที่สามารถยืมได้ <input type="text" name="stu" > วัน(นักเรียน)</p>
        <p>จำนวนวันที่สามารถยืมได้ <input type="text" name="ter" > วัน(ครูหรือเจ้าหน้าที่)</p>
        <p><button type="submit"  >Save</button ></p>
    </form>
    <p><button type="submit" onclick="window.history.back();">Back</button></p>
    </div>
</body>
</html>