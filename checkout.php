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

		$sql = "SELECT * FROM Basket";
		$stmt = $db->query($sql);


if ($stmt->rowCount() > 0) {
    // output data of each row
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<b>Item:</b> " . $row["itemName"]. " <b>Price:</b> " . $row["price"]. " SEK<br>";
    }
} else {
    echo "No items in your cart.";
}

$sql = "SELECT sum(price) FROM basket";
$stmt2 = $db->query($sql);

if ($stmt2->rowCount() > 0) {
    // output data of each row
    while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        echo "<br><b>The price of all items:</b> " . $row["sum(price)"]. " SEK<br>";
    }
} else {
    echo "<br> No items in your cart.";
}


?>
		


</form>
<form action="pay.php" method="post">
	<input name="payButton" type="submit" value=" Pay ">
		
</form>

	</div>


	</body>
</html>
