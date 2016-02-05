<?php
// set the expiration date to one hour ago
setcookie("login", "", time() - 3600);
// setcookie("login", "", time() - 3600, "/~rasmus/", ".utoronto.ca", 1);
header('refresh:3;url=index.html')
?>

<h1><i>logging out...</i></h1>