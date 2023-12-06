<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    session_start();
    $_SESSION['IDCOM'] = $_GET['id'];
    $getID = $_GET['id'];
    $objRead = new Read();
    $objPic = new Read();
    $data = $objRead->readBorrowr($getID);
    $id_book = $data[0];
    $lender = $data[1];
    $id_rec = $data[2];
    $id_borrow = $data[3];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>แก้ไขข้อหนังสือ</title>
</head>
<body>
<ul>
  <li><a href="../useredit.php">ข้อมูลสมาชิก</a></li>
  <li><a  href="../book.php">ข้อมูลหนังสือ</a></li>
  <li><a  href="../admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a class="active" href="../borrow.php">ข้อมูลการยืนหนังสือ</a></li>
  <li><a href="../return.php">ข้อมูลการคืนหนังสือ</a></li>
  <li><a href="../search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
  <li><a href="../login.php">ออกจากระบบ</a></li>
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
    <h1>แก้ไขข้อหนังสือ</h1><hr/>
    </form>
    <form action="updateborrow.php?id=<?=$id_borrow?>" method="get">
        <p>รหัสการยืม <input type="text" method="get" name="id_borrow" disabled="disabled" value="<?=$id_borrow?>"></p>
        <p>รหัสหนังสือ <input type="text" method="get" name="id_book" value="<?=$id_book?>"></p>
        <p>ผู้ให้ยืม <input type="text" method="get" name="lender" value="<?=$lender?>"></p>
        <p>รหัสผู้ยืม <input type="text" method="get" name="id_rec" value="<?=$id_rec?>"></p>
        <p><button type="submit">Save</button></p>
    </form>
    <p><button type="submit" onclick="window.history.back();">Back</button></p>
    </div>
</body>
</html>