<?php 
//table----------------------------------------
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
//----------------------------------------------
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$email = $_POST['email'];
    $stmt = $conn->prepare("SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$email', 'sugar')"); 
    $stmt->execute();
	// set the resulting array to associative
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$iterator = new TableRows(new RecursiveArrayIterator($stmt->fetchAll()));
    foreach($iterator as $k=>$v) { 
			  echo "<tr><th>Your password is:</th></tr>". $v;
			  header('refresh:10;url=login_page.php');
		   }
		   
	// Create connection----------------------------------------------
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) { 
		die("Connection failed: " . $conn->connect_error);
		} 
	// fliter account name	
	$sql = "SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$email', 'sugar')";
	$result = $conn->query($sql);	   
    if(!$result->num_rows > 0){
			  echo "<tr><th>No this register's email!!! Try Again!</th></tr>";
			  header('refresh:10;url=login_page.php');
	          } 
	$conn->close();     
	//---------------------------------------------------------------------- 				   	  	    
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}



	$conn = null;
	echo "</table>";
	//http://www.w3schools.com/php/php_mysql_select.asp
?>



<!--CountDown Clock-->
<?php
   session_start();
   if (!isset($_SESSION['endOfTimer'])){
       $endOfTimer = time() + 10;
       $_SESSION['endOfTimer'] = $endOfTimer;
   }

   $timeTilEnd = $_SESSION['endOfTimer'] - time();

if($timeTilEnd < 0){ 
session_destroy();
}
?>

You have <span id="timer"><?php echo $timeTilEnd; ?></span> seconds left


<script type="text/javascript">
var TimeLeft = <?php echo $timeTilEnd; ?>;

function countdown()
{
TimeLeft -= 1;
document.getElementById('timer').innerHTML = TimeLeft;
}
CountFunc = setInterval(countdown,1000);
</script>
<!--CountDown Clock_End-->
