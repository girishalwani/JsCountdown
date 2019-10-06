<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'config.php';

if(isset($_POST['subs'])){
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $dup = "SELECT * FROM people WHERE email = '$email'";
    
    $result = mysqli_query($db, $dup);
    
    if(mysqli_num_rows($result)){
        $_SESSION['msg'] = "Email already exist!!";
    }
    else{
        $code = md5(crypt(mt_rand(), 'aa'));
        
        $sql = "INSERT INTO people(email,reset_code) VALUE('$email','$code')";
        
        $sqlQuer= mysqli_query($db, $sql);
        $_SESSION['msg'] = "Please Check Your email";
        
        $message ="Hi!! you just subscribed on my upcoming website.In order to get all the updates verify your email"
                . "Please Verify by Clicking <a href='http://localhost:8080/counter/verify_email.php?rescode = $code'>HERE</a>";
        
      
        
        send_mail([
            'from'=>'Babloo Fighter',
            'to' => $email,  
            'message'=> $message,
            'subject'=> 'Verify Email',
        ]);
        
                
        
    }
    
    
    
    
    
}
