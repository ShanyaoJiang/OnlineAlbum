<?php
//This page is to do the login function,connect the mysql and write the status to the session.
  if($_POST['usrname']){
    require 'info.php';
    $link=mysql_connect($db_host,$db_user,$db_pwd);
    mysql_select_db($db_name) or die(mysql_error());
    $name=mysql_real_escape_string($_POST['usrname']);
    $pwd=mysql_real_escape_string($_POST['pwd']);
    $sqlstr="select * from `$table_user` where `username`='$name' and `password`='$pwd';";
    $result=mysql_query($sqlstr) or die(mysql_error());               
    $rows=mysql_num_rows($result);
    header("Cache-control:no-cache,no-store,must-revalidate"); 
    header("Pragma:no-cache"); 
    header("Expires:0"); 
    if($rows){
      session_start();
	  mysql_close($link);
      $_SESSION['userflag']=$name;
      header("refresh:3;url=5.php");
      print("Welcome! My Friend! Page will jump to the album in 3 seconds!");
      exit;
    }
    else{
	  mysql_close($link);
      header("refresh:3;url=1.php");
      print("Sorry! Wrong Username or Password! Page will jump the the Login in 3 seconds!");
      exit;
    }
  }
?>
