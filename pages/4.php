<?php
//This page is to do the sign up function.Connect the mysql and store the data.
  if($_POST['regusrname']){
    require 'info.php';
    $link=mysql_connect($db_host,$db_user,$db_pwd);
    mysql_select_db($db_name) or die(mysql_error());
    $name=mysql_real_escape_string($_POST['regusrname']);
    $pwd=mysql_real_escape_string($_POST['regpwd1']);
    $sqlstr="insert into userdata(username,password) values('$name','$pwd')";
    mysql_query($sqlstr);
    mysql_close($link);
    header("Cache-control:no-cache,no-store,must-revalidate"); 
    header("Pragma:no-cache"); 
    header("Expires:0"); 
    header("refresh:3;url=1.php");
    print('Thank you for signup! Page will jump to the login page in 3 seconds!');
    exit;
  }
?>
