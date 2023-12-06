<?php
    session_start();
    require_once './model/database.inc.php';
    require_once './model/create.inc.php';
    $idcom = $_SESSION['IDCOM'];
    $id = $_SESSION['IDCOM'];
    $targetFile = "picture/";
    $create = new Create();
    if(isset($_FILES["fileUpload"])){
        foreach ($_FILES['fileUpload']['tmp_name'] as $key => $val){
            $fileName = $_FILES['fileUpload']['name'][$key];
            $fileSize = $_FILES['fileUpload']['size'][$key];
            $fileTmp = $_FILES['fileUpload']['tmp_name'][$key];
            $fileType = $_FILES['fileUpload']['type'][$key];
            if(move_uploaded_file($fileTmp, $targetFile.$fileName)){
                echo "File ".$fileName."has been upload.<br/>";
                $create->createPicture($idcom, $fileName, $targetFile, $id);
                echo "<script>window.location.assign('def/editbook.php?id=$id')</script>";
            }else{
                echo "Sorry, error to upload";
            }
        }
    }
?>