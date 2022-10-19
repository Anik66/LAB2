<?php
		session_start();

		$uname = $password = "";
		$unameErr = $unameErr = "";
		$isValid = true;

		if (isset($_SESSION['uname'])) {		
			header("location: /LABTASK/view/login.php");
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (!isset($_POST['uname']) || empty($_POST['uname'])) {
				$unameErr = "User Name is required";
				$isValid = false;
			}
			else{
				$username = $_POST['uname'];
			}

			if (!isset($_POST['pname']) || empty($_POST['pname'])) {
				$unameErr = "Password is required";
				$isValid = false;
			}
			else{
				$password = $_POST['pname'];
			}
		
			if($isValid) {
				$data = json_decode(file_get_contents('../control/data.json'), true);

				if(is_array($data)){
					$message = "User not found";

					foreach($data as $key => $value){
						if ($value['uname'] == $_POST['uname']) {
							if ($value['pname'] == $_POST['pname']) {
								$_SESSION['data'] = $value;
								$_SESSION['uname'] = $uname;
								header("location: /LABTASK/view/login.php");
							}
							else{
								$message = "Password does not match";
							}
						}
					}
				}
				else{
					$message = "User not found";
				}
			}
		}
	?>