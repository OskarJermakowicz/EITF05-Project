<?php
// Connect to server and select databse.
$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');

// username and password sent from form 
$myusername=$_REQUEST['registerName']; 
$mypassword=$_REQUEST['registerPwd']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$mypassword = hash('ripemd160', $mypassword . 'abcd');

$sql = "INSERT INTO Members (username, password)
VALUES ('$myusername', '$mypassword')";
$result = $db->query($sql);
if($result){
echo "Registration successful. Now proceed to log in.";
} else {
echo "Username already exists";

}


// header("location: register_completed.php");


?>
<form action="index.php" method="post">
	<input name="backButton" type="submit" value=" Back to login ">
		
</form>

