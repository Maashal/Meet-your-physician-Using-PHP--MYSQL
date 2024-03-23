<?php
require 'database.php';

$error = null;
$msg= null;
if(isset($_POST['login'])){
	
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		
		if(!empty($_POST['username']) && !empty($_POST['password'])){
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			$usertype = $_POST['type'];
			$db = new database;
			if($usertype=="admin"){
			$db->execute("SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'");
					if($db->results){
						if($db->countrow()>0){
						$row = $db->fetch_object();
						$userid = $row->admin_id;
						session_start();
							$_SESSION["admin"] = $userid;
							header('Location: admin/header.php');
						}else{$error = "incorrect password or user name";}
					}// db error code
					
			
			}elseif($usertype=="user"){
				$db->execute("SELECT * FROM employee WHERE email = '$username' AND password = '$password'");
					if($db->results){
						if($db->countrow()>0){
						$row = $db->fetch_object();
						$userid = $row->Team_id;
						session_start();
							$_SESSION["employee"] = $userid;
							header('Location: employee/header.php');
						}else{$error = "Incorect Username Or Password";}
					}// db error code
			}
		}else{$error = "fill all the fields";}
	}else{$error = "BuG off Hackers..";}
	if(isset($error)){echo('<script>alert("'.$error.'");</script>');}
}




?>






<!DOCTYPE html>
<html>
<head>
<title> Test Phase</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
<h1 > Employee Information System [Test Phase]</h1>
<div class="mainbox">
<h1> Login Form</h1>
<form method="post" action="">
<p>User Name</p>
<input type="text" name="username" placeholder="Enter Your Name">
<p>Password</p>
<input type="password" name="password" placeholder="Enter Password" style="border-bottom: solid;">
<select id="usertype" name="type">
<option  Value="admin">Admin</option>
<option Value="user">Employee</option>
</select>
<button name="login"> Login </button><br>

</form>
</div>
</body>
</html>