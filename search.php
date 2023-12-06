<?php
    session_start();
    require_once './model/database.inc.php';
    require_once './model/read.inc.php';
    $search = $_GET['search'];
    if($search == ""){
      $search = 'null';
    }
    $objSearch = new Read();
    $objRead = new Read();
    $objPicture = new Read();
    if($search == null){
      $id_book = null;
      $bookname = null;
      $author = null;
      $publisher = null;
      $price = null;
    }else{
      $data = $objSearch->readSearch($search);
      $id_book = $data[0];
      $bookname = $data[1];
      $author = $data[2];
      $publisher = $data[3];
      $price = $data[4];
      $picture = $objPicture->readPicture($id_book);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="menu.css">
    <title>ค้นหาข้อมูลหนังสือ</title>
</head>
<body>
<ul>
    <li><a  href="useredit.php">ข้อมูลสมาชิก</a></li>
    <li><a href="book.php">ข้อมูลหนังสือ</a></li>
    <li><a  href="admin.php">ข้อมูลเจ้าหน้าที่</a></li>
    <li><a href="borrow.php">ข้อมูลการยืนหนังสือ</a></li>
    <li><a href="return.php">ข้อมูลการคืนหนังสือ</a></li>
    <li><a class="active" href="search.php?search=null">ค้นหาข้อมูลหนังสือ</a></li>
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
    <div style="margin-left:15%;padding:1px 16px;height:1000px;margin-top: 10px;">
    <?php
      if($search == 'null'){
    ?>
    <h1>ค้นหาข้อมูลหนังสือ</h1><hr/>
      <div class="search-container"style="padding-left: 10px;">
    <form action="search.php" method="GET">
      <input type="text" placeholder="ค้นหาหนังสือ" name="search" style="padding-top: 6px;padding-bottom: 6px;">
      <button type="submit" style="
    width: 70px;
    height: 32px;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;"><i class="fa fa-search"></i></button>
    <div class="grid-container" style="width: 220px;padding-left: 0px;border-top-width: 100px;margin-top: 50px;"><h1 class="grid-item"></h1></div></a>
        <table border="1">
        <thead>
            <th>ID_Book</th>
            <th>Book Name</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php
                $objRead->readBooks();
            ?>
            
        </tbody>
        </table>
    </form>
  </div>
    <?php
      }else{
    ?>
    <h1>ข้อมูลหนังสือ</h1><hr/>
    <div class="grid-e">
      <?php
        if($id_book == $picture[1]){
          echo "<img src='".$picture[3].$picture[2]."' width='250' height='500' class='item1' />";
        }else{
          echo "No picture";
        }
      ?>
      <div>
        <h4 class="item2">รหัสหนังสือ:<?=$id_book?></h4>
        <p>ชื่อหนังสือ: <?=$bookname?></p>
        <p>ชื่อผู้แต่ง: <?=$author?></p>
        <p>สำนักพิมพ์: <?=$publisher?></p>
        <p>ราคา: <?=$price?></p>
        <p><button type="submit" onclick="window.history.back();">กลับ</button></p>
      </div>
      </div>
        <div class="grid-container" style="width: 220px; padding-left: 0px;"><h1 class="grid-item">ข้อมูลเจ้าหน้าที่</h1> </div>
        <hr>
        <table border="1">
        <thead>
            <th>รหัสหนังสือ</th>
            <th>ชื่อหนังสือ</th>
            <th>รหัสผู้ยืม</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>สถาณะ</th>
        </thead>
        <tbody>
            <?php
                $objRead->readBookbr($id_book);
            ?>
            
        </tbody>
        </table>
    <?php
      }
    ?>
    
    
    </div>
</body>
</html>