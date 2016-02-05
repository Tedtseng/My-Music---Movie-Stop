<!--This is practice for show logged Name on page-->
<?php
mysql_connect("localhost","root","");
mysql_select_db("cs601finaldb");
//$action=$_POST["action"];

$username = $_POST['username'];
//if($action=="showname"){
if($username==true){
//$showN=mysql_query("SELECT aes_decrypt( username ,'sugar') FROM users WHERE username = aes_encrypt('$username','sugar')");
$result=mysql_query("SELECT aes_decrypt( username ,'sugar') FROM users");


 while($row=mysql_fetch_array($result)){ 
   //echo "$row[username]";
   echo $row["aes_decrypt( username ,'sugar')"];  
   //echo "Test!". $username ." ...logging...";
   }
 }  
//} 
?>
<!--This is practice-->