

<?php
// Connect to server and select databse.
$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');

// username and password sent from form 
$myusername=$_POST['registerName']; 
$mypassword=$_POST['registerPwd']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$mypassword = hash('sha256', $mypassword . 'abcd');

$myusername = htmlspecialchars($myusername);

$sql = "INSERT INTO Members (username, password)
VALUES (?,?)";
//$stmt = $db->query($sql);
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$stmt->bindParam(2, $mypassword);
$stmt->execute();
//$result = $db->query($sql);
if($stmt){
echo "Registration successful. Now proceed to log in.";
} else {
echo "Username already exists";

}


// header("location: register_completed.php");


?>
<form action="index.php" method="post">
	<input name="backButton" type="submit" value=" Back to login ">
		
</form>

