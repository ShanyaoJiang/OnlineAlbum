<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--This page is to login and you can get my resume-->
<html>
	<head>
		<title>Welcome!!</title>
		<script language="Javascript" src="leaf.js"></script>
		<style type="text/css">
			p.f1 {
				text-align: right;
				font-weight: bold;
			}
			p.f2 {
				font-size: 25px;
				color: orange;
				margin: 5px;
				font-weight: bold;
			}
			p.f3{
				font-size: 25px;
				color: orange;
				margin: 5px;
			}
			p {
				text-align: center;
				margin: 0px;
			}
			a {
				color: red;
				font-size: 20px;
			}
			input.i1 {
				font-size: 20px;
				width: 100px;
				height: 30px;
				color: orange;
				background-color: gray;
			}
			button {
				font-size: 20px;
				width: 100px;
				height: 30px;
				color: orange;
				background-color: gray;
			}
		</style>
	</head>
	<body bgcolor="Khaki">
		<p class="f1">
			<a href="../docs/resume.pdf">Download&nbsp;My&nbsp;Resume</a>&nbsp;&nbsp;<a href="admin.php">Admin&nbsp;Login</a>&nbsp;&nbsp;
		</p>
		<p class="f2">
			Welcome&#33;&nbsp;If&nbsp;you&nbsp;want&nbsp;to&nbsp;view&nbsp;my&nbsp;pictures&#44;&nbsp;you&nbsp;must&nbsp;login&#33;&nbsp;Thank&nbsp;you&#33;
		</p>
		<form id="reg" name="regform" method="post" action="3.php" onsubmit="return validate_form(this)">
			<p class="f3">
				Username&#58;&nbsp;
				<input type="text" name="usrname"/>
			</p>
			<p class="f3">
				Password&#58;&nbsp;
				<input type="password" name="pwd"/>
			</p>
			<hr>
			<p>
				<input type="submit" name="loginsubmit" value="Login" class="i1"/>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<button type="button" onclick="javascript:window.location.href='2.php'">
					Signup
				</button>
			</p>
		</form>
		<script language="Javascript">
			//This part is to validate the input of the form.
			function validate_form(form) {
				with (form) {
					if ((usrname.value == null || usrname.value == "") && (pwd.value == null || pwd.value == "")) {
						alert("Username and Password is empty!");
						document.forms[0].reset();
						return false;
					} else if (pwd.value == null || pwd.value == '') {
						alert("Password is empty!");
						document.forms[0].reset();
						return false;
					} else if (usrname.value == null || usrname.value == '') {
						alert("Username is empty!");
						document.forms[0].reset();
						return false;
					} else {
						return true;
					}
				}
			}
		</script>

	</body>
</html>
