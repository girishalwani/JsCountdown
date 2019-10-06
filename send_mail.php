<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require './phpmailer/PHPMailerAutoload.php';

 

function send_mail($detail = array()){
    
    if(!empty($detail['to']) && !empty($detail['message']) && !empty($detail['subject']) && !empty($detail['from'])){
        
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug=2;
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'dunksocial@gmail.com';                 // SMTP username
        $mail->Password = 'SociallyFucked@000';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port =465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('no-reply@BablooFighter.com', $detail['from']);
        $mail->addAddress($detail['to'], '');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $detail['subject'];
        $mail->Body    = $detail['message'];
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if(!$mail->send()){
            return false;
        }
        else{
            return true;
        }

    }
    
    else{
        echo 'set mail parameters';
    }
    
}

?>
