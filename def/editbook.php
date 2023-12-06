<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    session_start();
    $_SESSION['IDCOM'] = $_GET['id'];
    $getID = $_GET['id'];
    $objRead = new Read();
    $objPic = new Read();
    $data = $objRead->readBookdata($getID);
    $Picture = $objRead->readPicture($getID);
    $id = $data[0];
    $bookname = $data[1];
    $author = $data[2];
    $publisher = $data[3];
    $price = $data[4];
    $stu = $data[5];
    $ter = $data[6];

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
  <li><a class="active" href="../book.php">ข้อมูลหนังสือ</a></li>
  <li><a  href="../admin.php">ข้อมูลเจ้าหน้าที่</a></li>
  <li><a href="../borrow.php">ข้อมูลการยืนหนังสือ</a></li>
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
    <?php
      if($Picture[1] != $getID){
    ?>
    <form action="../uploadPictureuser.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload[]" id="fileUpload" multiple="multiple">
    <button type="submit">UploadFile</button>
    <?php
      }
    ?>
    </form>
    <form action="updatebook.php" method="get">
    <p>รหัสหนังสือ <input type="hidden" name="id_book" value="<?=$id?>"></p>
        <p>ชื่อหนังสือ <input type="text" name="bookname" value="<?=$bookname?>"></p>
        <p>ชื่อผู้แต่ง <input type="text" name="author" value="<?=$author?>"></p>
        <p>สำนักพิมพ์ <input type="text" name="publisher" value="<?=$publisher?>"></p>
        <p>ราคา <input type="text" name="price" value="<?=$price?>"></p>
        <p>จำนวนวันที่สามารถยืมได้ <input type="text" name="stu" value="<?=$stu?>"> วัน(นักเรียน)</p>
        <p>จำนวนวันที่สามารถยืมได้ <input type="text" name="ter" value="<?=$ter?>"> วัน(ครูหรือเจ้าหน้าที่)</p>
        <p><button type="submit">Save</button></p>
    </form>
    <p><button type="submit" onclick="window.history.back();">Back</button></p>
    </div>
</body>
</html>