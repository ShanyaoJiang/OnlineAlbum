<html>
<!--This page is to do the function of show one of pictures when you click it.-->
<head>
	<style>
		div{
			float: left;
			margin:10px;
			border:1px solid red;
			width:800px;
			height:600px;
		}
	</style>
</head>
<body bgcolor="Khaki">
<?php
	require 'info.php';
	$link=mysql_connect($db_host,$db_user,$db_pwd);
	mysql_select_db($db_name) or die(mysql_error());
	$name=mysql_real_escape_string($_GET['picname']);
	$sqlstr="select * from `$table_pic` where `name`='$name'";
	$result=mysql_query($sqlstr) or die(mysql_error());
	@$row=mysql_fetch_array($result) or die(mysql_error());
	$path=$row['path'];
	$story=$row['story'];
	mysql_close($link);
	echo "<div><img src='".$path."' width='100%' height='100%'><br></div>";
	echo "<br>";
	echo "<textarea cols='50' rows='10' disabled='disabled'>".$story."</textarea>";
?>
</body>
</html>