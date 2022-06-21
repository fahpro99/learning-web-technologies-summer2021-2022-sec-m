<?php 
	session_start();

	$id = $_POST['id'];
	$password = $_POST['password'];
    $confirmPassword= $_POST['confirmPassword'];
    $name=$_POST['name'];
    $userType=$_POST['userType'];
    
	if($id == null || $password == null ||  $confirmPassword == null||  $name == null||  $userType== null){
		echo "null username/password/email";
	}
    else{   
            $user = $id."|".$password."|".$name."|".$userType."\r\n";
            $file = fopen('user.txt', 'a');
		    fwrite($file, $user);
		    header('location: login.html');

        }
     
	
?>