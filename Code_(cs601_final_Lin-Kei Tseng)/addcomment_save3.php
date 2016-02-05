<?php 
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";

/*insert databade*/
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$username = $_POST['username'];
	$comment_text = $_POST['comment_text']; 
	$sql = "INSERT INTO comment3 (username,comment_text) VALUES ('$username','$comment_text')";
    $conn->exec($sql);
	echo "<h1>"."New record created successfully..."."</h1>";
	header('refresh:3;url=index_movie.php#3');
    }
catch(PDOException $e)
    {
	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;

	//http://www.w3schools.com/php/php_mysql_insert.asp
?>
