

<?php 
	session_start();

	$Id = $_REQUEST['id'];
	$Password = $_REQUEST['password'];
	$Confirm_Password = $_REQUEST['confirmPassword'];
    $Name = $_REQUEST['username'];
	 $user_Type= $_REQUEST['user'];
	

	if ($Id == null || $Password == null || $Confirm_Password== null || $Name == null || $user_Type== null ) {
		echo "invalid username/password <br>";
	}else{
		$data = $Id."|".$Password."|".$Confirm_Password."|".$Name."|".$user_Type."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.html');
			}
	
	}



?>
