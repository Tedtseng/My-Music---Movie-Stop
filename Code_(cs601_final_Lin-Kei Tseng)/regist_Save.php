<?php 
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	 // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Cannot create the same account----------------------------------------------------------------
	$username = $_POST['username'];
	$email = $_POST['email'];
    //$stmt = $conn->prepare("SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$email', 'sugar')");
	$stmt = $conn->prepare("SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$username','$email', 'sugar')"); 
    $stmt->execute();
	if(!$stmt->fetchAll())
	{
	$username = $_POST['username'];
	$email = $_POST['email']; 
    $passw = $_POST['password'];
	//$sql = "INSERT INTO users (email,password) VALUES (aes_encrypt('$email', 'sugar'),aes_encrypt('$passw', 'sugar'))";
	$sql = "INSERT INTO users (username,email,password) VALUES (aes_encrypt('$username', 'sugar'),aes_encrypt('$email', 'sugar'),aes_encrypt('$passw', 'sugar'))";
	// use exec() because no results are returned
    $conn->exec($sql);
	}
	echo "New record created successfully";
	header('refresh:3;url=index-logged.php');
    }
catch(PDOException $e)
    {
	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
	//http://www.w3schools.com/php/php_mysql_insert.asp
?>
