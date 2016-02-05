<?php
// set the expiration date to one hour ago
//setcookie("login", "", time() - 3600);
// setcookie("login", "", time() - 3600, "/~rasmus/", ".utoronto.ca", 1);
header('refresh:3;url=index-logged.php')
?>

<h1><i>Welcome,logging...</i></h1>