<?php 
    session_start();
    session_destroy();
    setcookie('checkLogin',false,time()-1,'/');
    setcookie('',false,time()-1,'/');
    header('location:/login');
?>