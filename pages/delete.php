<?php
//This page is to do the delete function.
	session_start();
	if(isset($_SESSION['admin'])){
		if($_POST['picname']){
			require 'info.php';
			$link=mysql_connect($db_host,$db_user,$db_pwd);
			mysql_select_db($db_name) or die(mysql_error());
			$name=mysql_real_escape_string($_POST['picname']);
			$sqlstr="delete from `$table_pic` where `name`='$name'";
			$sqlstr1="select * from`$table_pic` where `name`='$name'";
			$result=mysql_query($sqlstr1) or die(mysql_error());
			$row = mysql_fetch_array($result);
			$path=$row['path'];
			if(mysql_num_rows($result)!=0){
			if(mysql_query($sqlstr)){
				unlink($path);
				mysql_close($link);
				header("refresh:2;url=album_manage.php");
				echo "Delete succeed!! Page will jump in 2 seconds!";
			}
			else{
				header("refresh:2;url=album_manage.php");
				echo "Delete failed!! Please try it again in 2 seconds!";
			}}
			else{
				header("refresh:2;url=album_manage.php");
				echo "We don't have that photo! Please try it again in 2 seconds!";
			}
		}
		else{
			header("refresh:2;url=album_manage.php");
			echo "Empty name!! Please try it again in 2 seconds!";
		}
	}
	else{
		header("refresh:2;url=admin.php");
		echo "Please log in!!";
	}
?>