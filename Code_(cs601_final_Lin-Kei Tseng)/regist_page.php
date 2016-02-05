<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Regist</title>
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 
<!-- CSS old -->
 <style>
	 body {
   /* background-color: lightblue;*/
   background-color: black;
}

.form-box {
    width: 50%;
    margin: auto;
    padding-top:20px;
}

.form-box h1 {
    text-align: center;
    font-weight: bold;
    text-transform: uppercase;
    color: tomato;
}

.form-box h1 span {
    font-weight: lighter;
}
</style> 
<!-- CSS_End -->

</head>

<body>
<a class="navbar-brand" href="index.html"><b>M&amp;M Stop</b></a>
<!-- New register page -->
<div class="container">
	<div class="row">
		<div class="form-box">
        <h1>Form <span>Registration</span></h1>
    	    <form role="form" id="contact-form" method="POST" action="regist_Save.php">
            <!-- name field -->
                <div class="form-group">
                <div id="nameError" class="alert" role="alert"></div>
                <label for="form-name-field" class="sr-only">Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        <!--<input name="username" type="text" class="form-control" id="form-name-field" value="" placeholder="Name">-->
                        <input name="username" type="text" class="form-control" id="form-name-field" value="" placeholder="Name">
                    </div>
                </div>
            <!-- email field -->
                <div class="form-group">
                <div id="emailError" class="alert" role="alert"></div>
                <label for="form-email-field" class="sr-only">Email</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                        <!--<input name="email" type="email" class="form-control" id="form-email-field" value="" placeholder="Email">-->
                        <input name="email" type="email" class="form-control" id="form-email-field" value="" placeholder="Email">
                    </div>
                </div>
            <!-- password field_Old -->
                <div class="form-group">
                <div id="passwordError" class="alert" role="alert"></div>
                <label for="form-password-field" class="sr-only">Password</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <!--<input name="password" type="password" class="form-control" id="form-password-field" value="" placeholder="Password">-->
                        <input name="password" type="password" class="form-control" id="form-password-field" value="" placeholder="Password">
                        
                    </div>
                </div>
            <!-- password field_End -->
            <!--New password field -->
            <div class="form-group">
                <!--<label>Confirm Password</label>-->
                <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-resize-vertical"></span></span>
                    <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm Password" required>
                </div>
            </div>
            <!--New password field_End -->
                
            <div class="checkbox">
                <label>
                    <input type="checkbox"> I agree to terms and condition.
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>

    	    </form>
<!--Go Regist  -->

    <a class="headng" href="login_page.php" data-target="#pwdModal-2" data-toggle=""><h2>Go to Login!</h2></a> 
    
<!--Go Regist    -->
		</div>
	</div>
</div>
<!--New register page_End-->



<!--Old Sign up page_Keep-->
<!-- <form method="POST" action="regist_Save.php">
  <fieldset>
    <legend>Personal information:(old)</legend>
    E-mail:<br>
    <input id="name" type="text" name="email" placeholder="Username" >
    <br>
	Password:<br>
    <input id="password" type="password" name="password" placeholder="Password" >
	<br><br>
    <input type="submit" value="Submit">
  </fieldset>
    <div>
        <a href="resetPassword_page.php">Reset My Password</a> &nbsp; &nbsp;
        <a href="showPassword_page.php">Show My Password</a>
    </div>
</form> -->
<!--Old Sign up page-->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    
    //JS code----------------------------------
   document.getElementById("contact-form").onsubmit = function() {
    var nameValidate = /[a-z]/;
    //Validate Name
    if(document.getElementById("form-name-field").value == "") {
        document.getElementById("nameError").innerHTML = "Please Enter A Name";
        document.getElementById("nameError").className = "alert-danger";
    }
   }

</script>
</body>
</html>	 

<!--http://bootsnipp.com/snippets/23ryx-->