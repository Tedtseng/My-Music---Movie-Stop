<!doctype html>
<html>
 <head>
</head>
<!--Old Sign up page_Keep-->
<form method="POST" action="addcomment_save.php">
  <fieldset>
    <legend>Read Comment Page:</legend>
    Username:<br>
    <input id="username" type="text" name="username" placeholder="username" >
    <br>
	Comment:<br>
    <input id="comment_text" type="text" name="comment_text" placeholder="comment" >
	<br><br>
    <input type="submit" value="Submit">
  </fieldset>
    <!-- <div>
        <a href="resetPassword_page.php">Reset My Password</a> &nbsp; &nbsp;
        <a href="showPassword_page.php">Show My Password</a>
    </div> -->
</form>
<!--Old Sign up page-->
</body>
</html>


<!-- select database -->
<?php 
$servername = "localhost";
$username ="root";
$password = ""; 
$dbname = "cs601finaldb";

//----------------------------------------------
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$email = $_POST['email'];
    $stmt = $conn->prepare("SELECT username,comment_text FROM comment"); 
    $stmt->execute();
    // set the resulting array to associative
    //$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //$iterator = new TableRows(new RecursiveArrayIterator($stmt->fetchAll()));
    $iterator = $stmt->fetchAll();
    //foreach($iterator as $k=>$v) { 
    foreach($iterator as $lin) { 
               //echo "<tr><th>Your Comment is:</th></tr>". $v;
               echo "<b>Name:</b> ".$lin[0]."<b>Your Comment is:</b> ". $lin[1]. "<br>";
               //header('refresh:10;url=readcomment_page.php');
           }
           
    // Create connection----------------------------------------------
    //$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
   /* if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error);
        } */
    // fliter account name  
/*  $sql = "SELECT aes_decrypt(password, 'sugar') FROM users WHERE email = aes_encrypt('$email', 'sugar')";
    $result = $conn->query($sql);      
    if(!$result->num_rows > 0){
              echo "<tr><th>No this register's email!!! Try Again!</th></tr>";
              header('refresh:10;url=login_page.php');
              } 
    $conn->close();*/     
    //----------------------------------------------------------------------                            
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}



    $conn = null;
    //echo "</table>";
/*select databade_end---------------*/

    //http://www.w3schools.com/php/php_mysql_insert.asp
?>
