<?php 
    require_once '../model/database.inc.php';
    require_once '../model/delete.inc.php';
    require_once '../model/read.inc.php';
    require_once '../model/update.inc.php';
    $objDelete = new Delete();
    $objRead = new Read();
    $objupdate = new Update();

        $objDelete->deleteborrow($_GET['id']);
        
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
        window.location = ('../borrow.php');
    }


</script>