<?php 
    echo "Logged out successfully";

    session_start();
    session_destroy();
    setcookie('checkLogin',false,time()-1,'/');
?>