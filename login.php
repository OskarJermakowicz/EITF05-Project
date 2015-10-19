
<?php
session_start();


// Connect to server and select databse.
$db = new PDO('mysql:host=localhost;dbname=db1;charset=utf8', 'root', '');

// username and password sent from form 
$myusername=$_POST['loginName']; 
$mypassword=$_POST['loginPwd'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$myusername = htmlspecialchars($myusername);

$mypassword = hash('sha256', $mypassword . 'abcd');


$sql = "SELECT * FROM Members WHERE username=? and password=?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$stmt->bindParam(2, $mypassword);
$stmt->execute();
$count = $stmt->rowCount();

if($count != 0){
$sql = "UPDATE Members SET count = 0 WHERE username=?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$db->query($sql);
 $_SESSION['username'] = $myusername;
header("location: webshop.php");
exit();
} else {
echo "Wrong username or password. Please try again.";

$sql = "UPDATE Members SET count = count + 1 WHERE username=?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$stmt->execute();

$sql = "select count from Members WHERE username=?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$stmt->execute();


$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row["count"] > 3) {

echo "<br> Too many failed login tries" ; 

$sql = "UPDATE Members SET count = 0 WHERE username=?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$stmt->execute();


}



}


?>

<form action="index.php" method="post">
	<input name="backButton" type="submit" value=" Back to login ">
		
</form>
