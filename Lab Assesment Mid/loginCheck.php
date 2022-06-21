<?php 
	session_start();

	 
	$id = $_POST['id'];
	$password = $_POST['password'];
    
	

	if($id == null || $password == null){
		echo "null username/password";
	}else{
		$file = fopen('user.txt', 'r');
    }
		
		while (!feof($file)) {
			$data=fgets($file);
			$user = explode('|', $data);
			if($id == trim($user[0]) && $password == trim($user[1])){
                if(trim($user[3])=="user")
                {
                    $_SESSION['status'] = true;
                    setcookie('status', 'true', time()+3600, '/');
                    header('location: user.php');

                }
                else if (trim($user[3])=="admin") {
                    $_SESSION['status'] = true;
                    setcookie('status', 'true', time()+3600, '/');
                    header('location: admin.php');
                   
                    
                }
                // $_SESSION['status'] = true;
                // setcookie('status', 'true', time()+3600, '/');
                // header('location: admin.html');
			
			}
            echo "Invalid user";

		}
		
	

	


?>