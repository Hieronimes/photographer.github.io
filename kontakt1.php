<?php


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: http://muzykablog.pl/'; 
    $to = 'piterdeja@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if(mail($to, $subject, $body, $from)){
    header('Location:page-kontakt.php?msg_sent=true');
}else{
    header('Location:page-kontakt?msg_sent=false');
}

?>