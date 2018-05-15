<?php
include_once ("model.php");
if(isset($_POST["id"]) && isset($_POST["action"])){
    $reply = $classobj->updateLikes(htmlentities(trim($_POST["id"])), htmlentities(trim($_POST["action"])));
    if($reply === true){
        echo "done";
    }else{
        echo "error";
    }
}else{
    echo "error";
}
?>