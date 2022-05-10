<?php
    $_name=$_POST['name'];
    $_visitor_email=$_POST['email'];
    $_massage=$_POST['massage'];


    $_email_from='teamkbb14@gmail.com';

    $_subject='KBB Form Submition';

    $_email_body="Name: $_name./n".
                    "Email: $visitor_email./n".
                        "Massage: $massage./n";
    
                        
    $to ="bhewa2010@gmail.com";

    $navs= "From: $email_from/r/n"; 
    
    $navs .= "reply To: $visitors_email/r/n";

    mail($to,$email_subject,$email_body,$navs);

    nav("location: contact.html");
?>