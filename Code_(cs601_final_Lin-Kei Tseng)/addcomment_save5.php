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
	$sql = "INSERT INTO comment5 (username,comment_text) VALUES ('$username','$comment_text')";
    $conn->exec($sql);
	echo "<h2><i>"."New record created successfully..."."</i></h2>";
	header('refresh:3;url=index_movie.php#5');
    }
catch(PDOException $e)
    {
	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;

	//http://www.w3schools.com/php/php_mysql_insert.asp
?>
