<?php
    $uri .= $_SERVER['HTTP_HOST'];
    if(isset($_COOKIE['checkLogin'])){
        if($_COOKIE['checkLogin'] === 1){
        header('Location: '.$uri.'/admin/');
        }
        else{
        header('Location: '.$uri.'Personnel');

        }
    }
    else{
        header('Location: '.$uri.'login.php');
    }
?>