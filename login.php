
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


//$sql = "SELECT * FROM Members WHERE username='$myusername' and password='$mypassword'";
$sql = "SELECT * FROM Members WHERE username=? and password=?";
//$stmt = $db->query($sql);
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$stmt->bindParam(2, $mypassword);
$stmt->execute();
$count = $stmt->rowCount();


if($count == 1){
$sql = "UPDATE Members SET count = 0 WHERE username=?";
$stmt = $db->prepare($sql);
$stmt->bindParam(1, $myusername);
$db->query($sql);
 $_SESSION['username'] = $myusername;
//header("location: webshop.php?username=" . $myusername);
header("location: webshop.php");
exit();
} else {
echo "Wrong username or password. Please try again.";

$sql = "UPDATE Members SET count = count + 1 WHERE username='$myusername'";
$db->query($sql);

$sql = "select count from Members WHERE username='$myusername'";
$stmt = $db->query($sql);


$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row["count"] > 3) {

echo "<br> Too many failed login tries" ; 

$sql = "UPDATE Members SET count = 0 WHERE username='$myusername'";
$db->query($sql);

}



}


?>

<form action="index.php" method="post">
	<input name="backButton" type="submit" value=" Back to login ">
		
</form>
