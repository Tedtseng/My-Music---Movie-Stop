<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShowPassword</title>
  <style>
	  * { font-family: Raleway; }
  </style>
 </head>
<body>

<form method="POST" action="resetPass_RS.php">
  <fieldset>
    <legend>Get your new password:</legend>
    E-mail:<br>
    <input id="name" type="text" name="email" placeholder="Username" >
    <br>
	<!--Password:<br>
    <input id="password" type="password" name="password" placeholder="Password" >-->
	<br><br>
    <input type="submit" value="Submit">
    
	<!--<button onclick="goBack()">Go Back</button>
    <script>
     function goBack() 
     {
       window.history.back();
     }
    </script>-->
  </fieldset>
    <!--<div>
        <a href=".php">Forgot My Password</a>
        <a href=".php">Show My Password</a>
    </div>-->
</form>

</body>
</html>