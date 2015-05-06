<?php
//This page is to do the gallery function.Connect the mysql and get the urls of pictures from the mysql and show them.
session_start();
if (isset($_SESSION["userflag"])) {
	require 'info.php';
	$link = mysql_connect($db_host, $db_user, $db_pwd);
	mysql_select_db($db_name) or die(mysql_error());
	$sqlstr = "select * from `pictures`";
	$result = mysql_query($sqlstr) or die(mysql_error());
	echo "<html>";
	echo "<head><title>My Album</title></head>";
	echo "<script language='Javascript' src='leaf.js'></script>";
	echo "<style>";
	echo "p{text-align:center;font-size:25px;color:orange;}";
	echo "div.d1{float:left;margin:10px;border:1px solid red;width:200px;height:180px;}";
	echo "</style>";
	echo "<body bgcolor='Khaki'>";
	if (mysql_num_rows($result) == 0) {
		mysql_close($link);
		echo "<hr>";
		echo "<p>Sorry! The Album is empty! The Admin is working on it!</p>";
		echo "<p><a href='1.php'>Retrun</a></p>";
	} else {
		while ($row = mysql_fetch_array($result)) {
			echo "<div class='d1'><a href='7.php?picname=".$row['name']."'><img src='".$row['path']."' width='100%' height='100%'></a><br>" . $row['name'] . "</div>";
		}
		mysql_close($link);
		echo "<div style='clear:both'></div>";
		echo "<br>";
		echo "<hr>";
		echo "<p><a href='1.php'>Return</a></p>";
	}
	echo "</body>";
	echo "</html>";
} else {
	header("Cache-control:no-cache,no-store,must-revalidate");
	header("Pragma:no-cache");
	header("Expires:0");
	echo "Log in please!!";
	header("refresh:2;url='1.php'");
}
?>
