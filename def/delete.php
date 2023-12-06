<?php 
    require_once '../model/database.inc.php';
    require_once '../model/delete.inc.php';
    require_once '../model/read.inc.php';

    $objDelete = new Delete();
    $objRead = new Read();

    $arrData = $objRead->readPicture($_GET['id']);
    $name = $arrData[2];
    $path = $arrData[3];
    $status = "off";
    
    if($objDelete->checkFile($name,$path)){
        $objDelete->deleteData($_GET['id']);
        $objDelete->deletePicture($_GET['id']);
        $objDelete->deleteFile($name,$path);
        $status = "on";
    }else{
        $objDelete->deleteData($_GET['id']);
        $status = "on";
    }
    
?>

<script>
    let status = '<?=$status?>';
    if(status == 'on'){
        message('Status: OK.');
        pageRead();
    }else{
        message('Status: File.');
        pageRead();
    }
    function message(msg){
        alert(msg);
    }

    function pageRead(){
        window.location = ('../useredit.php');
    }


</script>