<?php
if(isset($_POST["txNIM"])){
    echo $_POST["txNAMA"];
    echo $_POST["txNIM"];
    echo $_POST["txTGLMASUK"];
}else{
    header("location: Pert4Latihan01.php");
}