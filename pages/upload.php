<?php
	session_start();
	if(isset($_SESSION['admin'])){
	if(is_uploaded_file($_FILES['picfile']['tmp_name'])){
		require 'info.php';
		$link=mysql_connect($db_host,$db_user,$db_pwd);
		mysql_select_db($db_name) or die(mysql_error());
		$type=$_FILES["picfile"]["type"];
		$size=$_FILES["picfile"]["size"];
		$tmp_name=$_FILES["picfile"]["tmp_name"];
		if($_POST["picname"]){
			$name=mysql_real_escape_string($_POST["picname"]);
		}
		else{
			$name=date('YmdHis');
		}
		switch($type){
 			case 'image/pjpeg':
				$pictype='.jpg';
  				break;
 			case 'image/jpeg' :
 				$pictype='.jpg';
  				break;
 			case 'image/gif' :
				$pictype='.gif';
  				break;
 			case 'image/png' :
				$pictype='.png';
  				break;
		}
		$story=mysql_real_escape_string($_POST['txt']);
		$context="../vault/";
		$path=mysql_real_escape_string($context.$name.$pictype);
		header("Cache-control:no-cache,no-store,must-revalidate"); 
		header("Pragma:no-cache"); 
		header("Expires:0"); 
	 	if(move_uploaded_file($tmp_name,$path)){
	 		$sqlstr="insert into pictures(name,path,story) values('$name','$path','$story')";
			mysql_query($sqlstr) or die(mysql_error());
			mysql_close($link);
			header("refresh:3;url=album_manage.php");
			print("Upload Succeed! Page will jump in 3 senconds!");
	 	}
		else {
			header("refresh:3;url=album_manage.php");
			print("Upload Failed! Try it again in 3 seconds!");
		}	
	}
	else{
		header("Cache-control:no-cache,no-store,must-revalidate"); 
		header("Pragma:no-cache"); 
		header("Expires:0"); 
		header("refresh:3;url=album_manage.php");
		print("You don't upload a file or the file is too big! You can try it again in 3 senconds!");
	}}
	else {
		header("Cache-control:no-cache,no-store,must-revalidate"); 
		header("Pragma:no-cache"); 
		header("Expires:0"); 
		header("refresh:2;url=admin.php");
	    print("Log in please!!");		
	}
?>
