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
  		<form action="" method="post">
		<p>
			<label>Username:</label>
			<input id="loginName" name="username" placeholder="Username" type="text">
		</p>
		<p>
			<label>Password:</label>
			<input id="loginPwd" name="password" placeholder="**********" type="password">
		</p>
		<p>
			<input name="loginSubmit" type="submit" value=" Login ">
		</p>
	</div>

	<div class="indexStyle">
		<h2>Register</h2>
		<form action="" method="post">
		<p>
			<label>Username:</label>
			<input id="registerName" name="username" placeholder="Username" type="text">
		</p>
		<p>
			<label>Password:</label>
			<input id="registerPwd" name="password" placeholder="**********" type="password">
		</p>
		<p>
			<input name="registerSubmit" type="submit" value=" Register ">
		</p>
	</div>
	</body>
</html>
