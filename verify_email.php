<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './config.php';
require_once './process.php';

if(isset($_GET['rescode'])){
    
    $code = $_GET['rescode'];
    $sqlres = "SELECT * FROM people WHERE reset_code='$code'";
    $res = mysqli_query($db, $sqlres);
    
    if(mysqli_num_rows($res)==1){
        $data = mysqli_fetch_object($res);
    
    
    if($data->reset_code==$code){
        
        $sqlup="UPDATE people SET is_active=1, reset_code='verified' WHERE reset_code='$code'";
        $resup = mysqli_query($db, $sqlup);
        
        $message = "Hi! you can download your confirmation by <a href='http://localhost:8080/counter/ebook.pdf> CLICK HERE </a>'";
        
        send_mail([
            'to' => $data->email,
            'from' => 'Babloo Fighter',
            'subject' => 'Verify email',
            'message' => $message
        ]);
        
        unset($_SESSION['msg']);
        $_SESSION['msg'] = "Congrats!! Your confirmation have been sent to your email. Plese Check your email and download your confirmation pass";
        
    }
    
   }
   else{
       $_SESSION['msg'] = "Record not found";
   }
   
   header('Location:index.php');

    
}