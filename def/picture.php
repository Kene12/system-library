<script>
    function back(){
        window.history.back();
    }
</script>
<?php
    require_once '../model/database.inc.php';
    require_once '../model/read.inc.php';
    $id = $_GET['id'];
    $objPicture = new Read();

    $picture = $objPicture->readPicture($id);

    if($id == $picture[1]){
        echo "<img src='".$picture[3].$picture[2]."'/><hr/>";
        echo "<button onclick='back()'>Back</button>";
    }else{
        echo "<script>alert('File')</script>";
        echo "<button onclick='back()'>Back</button>";
    }
?>
    