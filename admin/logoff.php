<?php
session_start();
if(isset($_SESSION['code'])){
    session_destroy();
    echo "<script>location.href=\"../index.php\";</script>";
}





?>