<?php
if(isset($_GET["txNIM"])){
    echo $_GET["txNAMA"];
    echo $_GET["txNIM"];
    echo $_GET["txTGLMASUK"];
}else{
    header("location: Pert4Latihan01.php");
}