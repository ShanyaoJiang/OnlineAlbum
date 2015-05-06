<?php
//This page is to do the Admin log in.
	if($_POST['usrname']){
		$name=$_POST['usrname'];
		$pwd=$_POST['pwd'];
		header("Cache-control:no-cache,no-store,must-revalidate"); 
		header("Pragma:no-cache"); 
		header("Expires:0"); 
		if($name==="jackjiang2" && $pwd==="0400052358"){
			session_start();
			$_SESSION['admin']="admin";
			header("refresh:3;url='album_manage.php'");
			print("Welcome! Shanyao Jiang!! Page will jump in 3 seconds!!");
			exit;
		}
		else{
			header("refresh:5;url='1.php'");
			print("Alert! You are not Administrator!!");
			exit;
		}
	}
	exit;
?>
