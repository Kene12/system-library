<?php 
    require_once '../model/database.inc.php';
    require_once '../model/delete.inc.php';
    require_once '../model/read.inc.php';

    $objDelete = new Delete();
    $objRead = new Read();

        $objDelete->deleteData($_GET['id']);
        $status = "on";
    
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
        window.location = ('../admin.php');
    }


</script>