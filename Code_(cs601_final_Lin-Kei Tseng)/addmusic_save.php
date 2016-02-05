<?php 
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";

/*insert databade*/
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$music_name = $_POST['music_name'];
	$music_desc = $_POST['music_desc']; 
	$youtube = $_POST['youtube'];
	$sql = "INSERT INTO addmusic (music_name,music_desc,youtube) VALUES ('$music_name','$music_desc','$youtube')";
    $conn->exec($sql);
	echo "<h3><i>"."New record created successfully..."."</i></h3>";
	header('refresh:3;url=index_music.php#0');
    }
catch(PDOException $e)
    {
	echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;

	//http://www.w3schools.com/php/php_mysql_insert.asp
?>
