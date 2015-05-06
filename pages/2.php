<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--This page is to sign up-->
<html>
	<head>
		<title>Register</title>
		<script language="Javascript" src="leaf.js"></script>
		<style>
			body {
				text-align: center;
			}
			div {
				margin: 0 auto;
				width: 55%;
				text-align: center;
			}
			p {
				font-size: 25px;
				color: orange;
				margin: 10px;
				font-weight: bold;
			}
			tr {
				color: orange;
			}
			td.t1 {
				font-size: 25px;
			}
			td.t2 {
				font-size: 15px;
			}
			input.i1 {
				font-size: 20px;
				width: 100px;
				height: 30px;
				color: orange;
				background-color: gray;
			}
		</style>
	</head>
	<body bgcolor="Khaki">
		<hr>
		<p>
			Welcome&#33;&nbsp;Please&nbsp;fill&nbsp;your&nbsp;Username&nbsp;and&nbsp;Password&nbsp;in&nbsp;the&nbsp;blank&#33;
			<br/>
			Thank&nbsp;you&#33;
		</p>
		<form id="signup" name="signupform" action="4.php" method="post" onsubmit="return validate_form(this)">
			<div>
				<table border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="t1">Username&#58;&nbsp;</td>
						<td>
						<input type="text" name="regusrname"/>
						</td>
						<td class="t2">(Length of username must be less than 10)</td>
					</tr>
					<tr>
						<td class="t1">Password&#58;&nbsp;</td>
						<td>
						<input type="password" name="regpwd1"/>
						</td>
						<td class="t2">(Length of password is 6 to 9)</td>
					</tr>
					<tr>
						<td class="t1">RetypePassword&nbsp;&#58&nbsp;</td>
						<td>
						<input type="password" name="regpwd2"/>
						</td>
					</tr>
				</table>
			</div>
			<hr>
			<input type="submit" name="regsubmit" value="Submit" class="i1"/>
		</form>
		<script language="Javascript">
		//This part is to validate the input of the signup form and alert the error.
			function validate_form(form) {
				var elist = new Array();
				with (form) {
					if (regusrname.value == "" || regusrname.value == null) {
						elist.push("1");
					}
					if (regusrname.value.length > 10) {
						elist.push("2");
					}
					if (regpwd1.value == "" || regpwd1.value == null) {
						elist.push("3");
					}
					if (regpwd1.value.length > 10) {
						elist.push("4");
					}
					if (regpwd1.value.length < 6 && regpwd1.value.length > 0) {
						elist.push("5");
					}
					if (regpwd1.value != regpwd2.value) {
						elist.push("6");
					}
					if (elist.length == 0) {
						return true;
					}
					var str = "";
					for (var key in elist) {
						switch(elist[key]) {
							case "1":
								str = str + "Username is empty!\n";
								break;
							case "2":
								str = str + "Username is too long!\n";
								break;
							case "3":
								str = str + "Password is empty!\n";
								break;
							case "4":
								str = str + "Password is too long!\n";
								break;
							case "5":
								str = str + "Password is too short!\n";
								break;
							case "6":
								str = str + "Retype password is not the same with the first one!";
								break;
						}
					}
					alert(str);
					document.forms[0].reset();
					return false;
				}
			}
		</script>
	</body>
</html>