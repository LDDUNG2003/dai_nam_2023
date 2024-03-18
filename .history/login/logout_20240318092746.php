<?php 
    session_start();
    session_destroy();
    setcookie('checkLogin',null,time()-1,'/');
    setcookie('PhanQuyen',null,time()-1,'/');
    header('location:/login');
?>