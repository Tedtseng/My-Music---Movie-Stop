<?php 
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";

/*insert databade*/
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	 // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Cannot create the same account----------------------------------------------------------------
	//$username = $_POST['username'];
	//$comment_text = $_POST['comment_text']; 
    //$stmt = $conn->prepare("SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$email', 'sugar')");
	/*$stmt = $conn->prepare("SELECT * FROM comment "); 
    $stmt->execute();
	if(!$stmt->fetchAll())*/
	//{
	$username = $_POST['username'];
	$comment_text = $_POST['comment_text']; 
    // $passw = $_POST['password'];
	//$sql = "INSERT INTO users (email,password) VALUES (aes_encrypt('$email', 'sugar'),aes_encrypt('$passw', 'sugar'))";
	$sql = "INSERT INTO comment1 (username,comment_text) VALUES ('$username','$comment_text')";
	// $sql = "INSERT INTO comment (username,comment_text) VALUES ($username,$comment_text)";
	// use exec() because no results are returned
    $conn->exec($sql);
	//}
	echo "<h1>"."New record created successfully..."."</h1>";
	//header('refresh:3;url=addcomment_page.php');
	header('refresh:3;url=index_movie.php#collapse1');
    }
catch(PDOException $e)
    {
	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
	/*insert databade_End*/

	//http://www.w3schools.com/php/php_mysql_insert.asp
?>
