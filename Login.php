<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
    <div align="center">
    <h1 > Login <h1>
</div>
</head>
<body>

<?php

include("../process/LoginResult.php");
?>

	

		<form align="center" action="https://www.w3schools.com/html/"method="POST" enctype="multi/form-data">
			
				<table align="center">
					<tr align="center" >
						<td>Enter Doctor User Name :</td>
						<td><input type="text" name="uname" placeholder="">  </td>
					</tr>
					<tr align="center">
						<td> Enter Doctor Password :</td>
						<td><input type="password" name="pname" placeholder=" "> </td>
					</tr>
                    
                    
                    
                  
                  
				
				
                 </table>

                 <table align="center">
                 <tr align="center">
                    <td>
                    <input type="checkbox" id="rname"name="rname" placeholder="">Remember Me

                     </td>
                      </tr>
                  </table>

		
		</form>		
                 <div align="center">
       
				 <input type="submit" name="lname" value="Login">
                 <input type="reset" name="lname" value="Reset">

        </div>
                

       <div align="center">
				 <a href=" http://localhost/SecH/LABTASK/Registration.php">Click for registration</a>

                 <div>
	



	

</body>
</html>


