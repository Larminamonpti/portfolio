<?php

session_start();

if($_POST['submit']){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $name =htmlspecialchars(htmlentities($_POST['name']))  ;
        $email = htmlspecialchars(htmlentities($_POST['email']));
        $message = htmlspecialchars(htmlentities($_POST['message']));
        $to = 'quentin.jeannet@gmail.com' ;
        $body = '';
        $body .= "From: ". $name  ."\r\n"; 
        $body .= "Email: " . $email . "\r\n"; 
        $body .= "Message: " . $message . "\r\n"; 

        mail($to, 'test', $body);    
        $_SESSION['success'] = 'Mail correctement envoyé';
    }else{
        $_SESSION['erreur'] = 'Veuillez remplir tous les champs';

    }
}



header('location:./index.php#fourth');

?>