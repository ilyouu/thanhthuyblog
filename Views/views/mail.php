<?php 

$submit = $_POST['submit'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


if(isset($submit)){
    
    
    if(!empty($name) && !empty($email) && !empty($message)){
        
        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your website contact form";
        mail("admin@bootstrapcafe.net", $subject, $message, $from);
        header("Location: thank-you.html");
        
        
    } else {
        
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        
    }
    
    
}
