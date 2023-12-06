<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    require_once '../model/read.inc.php';
    session_start();
    $_SESSION['IDCOM'] = $_GET['id'];
    
    $objRead = new Read();
    $getID = $_GET['id'];
    $data = $objRead->readreturnr($getID);
    $borrow_date = $data[0];
    $id_book = $data[1];
    $bookname = $data[2];
    $id_returnn = $data[3];
    $_SESSION['ID_r'] = $data[3];
    $_SESSION['ID_B'] = $data[1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ยืนยันคืนหนังสือ</title>
</head>
<body>
<ul>
<li><a  href="../useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a  href="../book.php">ข้อมูลหนังสือ</a></li>
  <li><a  href="../admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a href="../borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a class="active" href="../return.php">ข้อมูลการคืนหนังสือ</a></li>
  <li><a  href="../search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
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
    
    <h1>ยืนยันคืนหนังสือ</h1><hr/>
    <form action="createverify.php" method="get" >
        <p>ผู้รับหนังสือ<input type="text" name="receiver" method="get"></p>
        <p>รหัสหนังสือ<input type="text" name="id_book" disabled="disabled" value="<?=$id_book?>" method="get"></p>
        <p>ชื่อหนังสือ<input type="text" name="bookname" disabled="disabled" value="<?=$bookname?>"></p>
        <p>วันที่ยืม<input type="text" name="borrow_date" disabled="disabled" value="<?=$borrow_date?>"></p>
        <p><button type="submit"  >Save</button ></p>
    </form>
    <p><button type="submit" onclick="window.history.back();">Back</button></p>
    </div>
</body>
</html>