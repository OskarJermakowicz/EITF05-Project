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
			
			.bottomStyle {
				margin: 5px;
				padding: 15px;
				width: 642px;
				height: 3px;
				border: 1px solid black;
			}
			
			.floatLeft {
				float: left;
			}
		</style>
		<title>Webshop</title>
	</head>
	
	<body>
	<?php
		$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');
	?>

	<div class="topStyle">
		<h1>Webshop</h1>
	</div>

	<div class="bottomStyle">
		<b>Logged in as:</b> 

<?php
echo $_GET["username"];

?>
	</div>

	<div class="indexStyle">
  		<h2>Haj</h2>
  		<form method="post">
		<b>Price:</b> 9 SEK
		<p>
			<input name="submitHaj" type="submit" value=" Add to cart ">
		</p>
		</form>
		<?php
			if(isset($_REQUEST['submitHaj']))
			{
				echo "Added to cart.";
				$sql = "INSERT INTO Basket (itemName, price)
				VALUES ('haj', 9)";
				$db->query($sql);

			}
		?>
	</div>
	
	<div class="indexStyle">
  		<h2>Katt</h2>
  		<form method="post">
		<b>Price:</b> 4 SEK
		<p>
			<input name="submitKatt" type="submit" value=" Add to cart ">
		</p>
		</form>
		<?php
			if(isset($_REQUEST['submitKatt']))
			{
				echo "Added to cart.";
				$sql = "INSERT INTO Basket (itemName, price)
				VALUES ('Katt', 4)";
				$db->query($sql);
			}
		?>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="indexStyle">
  		<h2>Ko</h2>
  		<form method="post">
		<b>Price:</b> 5 SEK
		<p>
			<input name="submitKo" type="submit" value=" Add to cart ">
		</p>
		</form>
		<?php
			if(isset($_REQUEST['submitKo']))
			{
				echo "Added to cart.";
				$sql = "INSERT INTO Basket (itemName, price)
				VALUES ('Ko', 5)";
				$db->query($sql);
			}
		?>
	</div>
	
	<div class="indexStyle">
  		<h2>Hund</h2>
  		<form method="post">
		<b>Price:</b> 3 SEK
		<p>
			<input name="submitHund" type="submit" value=" Add to cart ">
		</p>
		</form>
		<?php
			if(isset($_REQUEST['submitHund']))
			{
				echo "Added to cart.";
				$sql = "INSERT INTO Basket (itemName, price)
				VALUES ('Hund', 3)";
				$db->query($sql);
			}
		?>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="floatRight">
		<form action="logout.php" method="post">
			<input name="logoutButton" type="submit" value=" Logout">
		</form>
		<br>
		<form action="checkout.php" method="post">
			<input name="checkoutButton" type="submit" value=" To checkout">
		</form>
	</div>
</body>
</html>
