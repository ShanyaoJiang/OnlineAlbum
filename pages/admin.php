<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--This page of admin login.-->
<html>
	<head>
		<title>Welcome!!</title>
		<style>
			p{
				font-size: 25px;
				color: orange;
				margin: 5px;
			}
			input.i1{
				font-size: 20px;
				color:orange;
				background-color: gray;
				width:100px;
				height:30px;
			}
		</style>
	</head>
	<body bgcolor="Khaki">
		<hr>
		<center>
			<p>Welcome&#44;&nbsp;This&nbsp;page&nbsp;is&nbsp;for&nbsp;the&nbsp;Administrator&#33;<br/>Thank&nbsp;you&#33;</p>
			<form id="reg" name="regform" method="post" action="6.php" onsubmit="return validate_form(this)">
				<p>Username&#58;&nbsp;<input type="text" name="usrname"/></p>
				<p>Password&#58;&nbsp;<input type="password" name="pwd"/></p>
				<hr>
				<input class="i1" type="submit" name="loginsubmit" value="Login"/>
			</form>
		</center>
		<script language="Javascript">
			function validate_form(form){
				with(form) {
					if((usrname.value==null||usrname.value=="")&&(pwd.value==null||pwd.value=="")){
						alert("Username and Password is empty!");
						document.forms[0].reset();
						return false;
					}
					else if(pwd.value==null||pwd.value==''){
						alert("Password is empty!");
						document.forms[0].reset();
						return false;
					}
					else if(usrname.value==null||usrname.value==''){
						alert("Username is empty!");
						document.forms[0].reset();
						return false;
					}
					else{
						return true;
					}
				}
			}
		</script>
	</body>
</html>