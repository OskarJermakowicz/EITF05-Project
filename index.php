<!DOCTYPE html>
<html>
	<head>
		<style>
			.indexStyle {
				float: left;
				margin: 5px;
				padding: 15px;
				width: 300px;
				height: 200px;
				border: 1px solid black;
			} 

			.topStyle {
				padding: 15px;
				width: 655px;
				height: 60px;
				border: 1px solid black;
			}
		</style>
		<title>Webshop</title>
	</head>
	
	<body>
	<div class="topStyle">
		<h1>Webshop</h1>
	</div>

	<div class="indexStyle">
  		<h2>Login</h2>
  		<form action="login.php" method="post">
		<p>
			<label>Username:</label>
			<input id="loginName" name="loginName" placeholder="Username" type="text">
		</p>
		<p>
			<label>Password:</label>
			<input id="loginPwd" name="loginPwd" placeholder="**********" type="password">
		</p>
		<p>
			<input name="loginSubmit" type="submit" value=" Login ">
		</p>
</form>
	</div>

	<div class="indexStyle">
		<h2>Register</h2>
		<form action="register.php" method="post">
		<p>
			<label>Username:</label>
			<input id="registerName" name="registerName" placeholder="Username" type="text">
		</p>
		<p>
			<label>Password:</label>
			<input id="registerPwd" name="registerPwd" placeholder="**********" type="password">
		</p>
		<p>
			<input name="registerSubmit" type="submit" value=" Register ">
		</p>
</form>
	</div>
	</body>
</html>
