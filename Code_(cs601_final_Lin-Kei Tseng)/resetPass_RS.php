<?php 
//drawing table
echo "<table style='border: solid 1px black;'>";
echo "<tr><th></th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cs601finaldb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $email = $_POST['email'];
    $stmt = $conn->prepare("SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$email', 'sugar')"); 
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$iterator = new TableRows(new RecursiveArrayIterator($stmt->fetchAll()));
    foreach($iterator as $k=>$v)
	    {
			echo "<tr><th>Your original password is:</th></tr>".$v;
			
	    }	
	if(!$stmt->fetchAll()){
		echo "<tr><th>error</th></tr>";
	}
	//update process---------------------------------------------------------------------------------------------
	$email = $_POST['email'];
	$upDateMyQuery = "update USERS set password=aes_encrypt('750407', 'sugar') where email = aes_encrypt('$email', 'sugar')";
	mysql_query($upDateMyQuery); 
	//echo "<h1>Your new password is 750407</h1>";
	echo "<tr><th>Your new password is 750407</tr></th>";
    // Prepare statement
    //$stmt = $conn->prepare($upDateMyQuery);
	$sql = $conn->prepare($upDateMyQuery);
    // execute the query
    //$stmt->execute();
	$sql->execute();
    // echo a message to say the UPDATE succeeded
	//echo "<h1>\"". $stmt->rowCount()."\" records UPDATED successfully</h1><br>";
	echo "<h1>\"". $sql->rowCount()."\" records UPDATED successfully</h1><br>";
	//---------------------------------------------------------
	
    }
catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }

	$conn = null;
	echo "</table>";
	//http://www.w3schools.com/php/php_mysql_update.asp
?>

<!DOCTYPE html>
<html>
<head>
 <style>
	#w{
		width:10%;
		float: left;
	}
 </style>
</head>	
<body>
 <fieldset id="w">
 <button onclick="goBack()">Go Back</button>
 </fieldset>
 <script>
    function goBack() {
    window.history.back();
	//location = "regist_page.php";
    }
 </script>
</body>
</html>