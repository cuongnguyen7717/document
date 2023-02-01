<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE user='$uname' AND pass='$pass'";

		$result = mysqli_query($links, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user'] === $uname && $row['pass'] === $pass) {
            	$_SESSION['user'] = $row['user'];
            	$_SESSION['nameuser'] = $row['nameuser'];
            	$_SESSION['iduser'] = $row['iduser'];
            	header("Location: ../customer.php");
		        exit();
            }else{
				header("Location: login.php?error=Sai tài khoản hoặc mật khẩu");
		        exit();
			}
		}else{
			header("Location: login.php?error=Sai tài khoản hoặc mật khẩu");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}
