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
				margin: 5px;
				padding: 15px;
				width: 642px;
				height: 50px;
				border: 1px solid black;
			}
		</style>
		<title>Webshop</title>
	</head>
	
	<body>

<?php 
$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');
$sql = "delete from basket";
$db->query($sql);

session_regenerate_id();
$_SESSION['logged_in'] = TRUE;


$token = md5(uniqid(rand(), TRUE));
$_SESSION['token'] = $token;
$_SESSION['token_time'] = time();

if (!isset($_SESSION['token']))
{
    $_SESSION['token'] = md5(uniqid(rand(), TRUE));
}


?>

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
