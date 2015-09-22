<?php

// Connect to server and select databse.
$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');

// username and password sent from form 
$myusername=$_REQUEST['loginName']; 
$mypassword=$_REQUEST['loginPwd']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);


$sql = "SELECT * FROM Members WHERE username='$myusername' and password='$mypassword'";
$stmt = $db->query($sql);
$count = $stmt->rowCount();

if($count == 1){
header("location: webshop.php");
} else {
echo "Wrong username or password. Please try again.";
}


?>

<form action="index.php" method="post">
	<input name="backButton" type="submit" value=" Back to login ">
		
</form>
