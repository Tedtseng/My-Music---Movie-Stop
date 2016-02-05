<?php
//table----------------------------------------
/*echo "<table style='border: solid 1px black;'>";
echo "<tr><th>test</th></tr>";

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
} */

//table_End--------------------------------------
/*define('DB_HOST','localhost');
define('DB_NAME', 'metcs');
define('DB_USER','root');
define('DB_PASSWORD','');*/
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";	

//$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
//$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$email = $_POST['email'];
  $username = $_POST['username'];
  //$email = $_POST['email']; 
  //$password = $_POST['password'];
  //$stmt = $conn->prepare("SELECT username FROM class WHERE username='$username'"); 
  $stmt = $conn->prepare("SELECT aes_decrypt( username ,'sugar') FROM users WHERE username = aes_encrypt('$username','sugar')");
  //"SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$username','$email', 'sugar')"
  $stmt->execute();
  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	if(!$result){	   
          echo "No this register's email: ";
	}else{
          
          // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
          // echo "Hello!". $v;}
          if($stmt->fetchAll()) { 
                echo "<h1>"."Hello!". " ".$username." " ." ...logging..."."</h1>"; ?>
                <!-- header('refresh:3;url=index-logged.php'); -->
                
                <!-- Set/Save Cookie -->
                <?php 
                    // if($_POST[password] == 'ted' 
                    //     && $_POST[username] == 'ted'){
                           setcookie("login", $username, time()+3600);
                           // setcookie("login",'USER', time()+3600);
                           //header("http://localhost/CS601/cs601finalV2/index-logged.php"); 
                           header('refresh:3;url=index-logged.php'); //將網址改為登入成功後要導向的頁面
                    // } 
                ?> 


        <?php  }else{
                echo "No this account.Try again!";
                header('refresh:5;url=login_page.php');
          }           
          // echo "</table>";
	}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
//echo "</table>";

//--------------------------------------------------------------
//$rarray = "";
/*$query = "SELECT password FROM class WHERE username='$username'"; 
$result = mysql_query($query); 
if($result) 
  { 
    $rarray=mysql_fetch_array($result);
    if($rarray[0]=$password)
	     echo "Successfully login database";
    else{
          die('Error: '.mysql_error($con));
        } 
  } 
  else 
  { 
	  die('Error: '.mysql_error($con)); 
	} */
          
//mysql_close($con);
$conn = null;

?>
<!--  -->
<!--<html>
 <head>
   <meta charset="utf-8" />
   <title>Loggining...</title>
   <script language="Javascript">
	    var speed = 1500;
	    setTimeout("goto()", speed);	
	    function goto() 
	    {
    	   location = "widescreen.php";
	    }
   </script>
 </head>
 <body>
 </body>
</html>-->