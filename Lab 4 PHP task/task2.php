<?php

   
   session_start();
    
    $email=$_POST['email'];

    for ($i=0; $i <strlen($email) ; $i++) { 
        if($email[$i]=="@"&&$email[++$i]==".")
        {
            echo"Validated email";
        }
     
    }
        
   
   


?>