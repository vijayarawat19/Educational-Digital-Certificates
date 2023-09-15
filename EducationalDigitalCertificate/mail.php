<?php
    require_once './PHPMailerAutoload.php';
    function send_mail($to, $subject, $message){
        $mail = new PHPMailer(); 
        $mail->isSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'tls'; 
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; 
        $mail->IsHTML(true);
        $mail->Username = "php.batch.2015@gmail.com";
        $mail->Password = "abc#1234";
        $mail->SetFrom("php.batch.2015@gmail.com");
        $mail->FromName    = 'Unisoft Technologies';
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->AddAddress($to);        
        $mail->send();
    }
?>

