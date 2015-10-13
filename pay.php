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
	<div class="topStyle">
		<h1>Webshop</h1>
	</div>

	<div class="indexStyle">
  		<h2>Your cart</h2>

  		<form method="post">
<?php 
// Connect to server and select databse.
$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');

		$sql = "delete from basket";
		$stmt = $db->query($sql);



?>
	

</form>

<form action="webshop.php" method="post">
	<input name="logoutButton" type="submit" value=" Back to webshop">
</form>

<form action="logout.php" method="post">
	<input name="checkoutButton" type="submit" value="Logout">
</form>

	</div>


	</body>
</html>
