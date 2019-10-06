<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

$db = mysqli_connect("localhost", "root", "", "js", "3308");

if(mysqli_connect_errno()){
    echo 'not connected to database'. mysqli_connect_error();
    die();
}

require_once './send_mail.php';


header('Location:index.php');
?>