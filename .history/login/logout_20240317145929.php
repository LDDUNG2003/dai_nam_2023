<?php 
    session_start();
    session_destroy();
    setcookie('checkLogin',false,time()-1,'/');
    setcookie('PhanQuyen',false,time()-1,'/');
    header('location:/login');
?>