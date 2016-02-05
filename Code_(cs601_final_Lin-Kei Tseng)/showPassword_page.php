<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ShowPassword</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <style>
.center {
    margin-top:50px;   
}

.modal-header {
    padding-bottom: 5px;
}

.modal-footer {
        padding: 0;
}
    
.modal-footer .btn-group button {
    height:40px;
    border-top-left-radius : 0;
    border-top-right-radius : 0;
    border: none;
}
    
.modal-footer .btn-group:last-child > button {
    border-right: 0;
}
</style>
<!-- Popup Modal Window - END -->
 </head>
<body>
<!--old-->
<!--<form method="POST" action="password_SH.php">
  <fieldset>
    <legend>Do you forget your password:</legend>
    E-mail:<br>
    <input id="name" type="text" name="email" placeholder="Username" >
    <br>
	<!--Password:<br>
    <input id="password" type="password" name="password" placeholder="Password" >-->
	<!--<br><br>
    <input type="submit" value="Submit">
    <!---->
    <!--<button onclick="goBack()">Go Back</button>
    <script>
     function goBack() 
     {
       window.history.back();
     }
    </script>
    <!---->
  <!--</fieldset>
    <!--<div>
        <a href=".php">Forgot My Password</a>
        <a href=".php">Show My Password</a>
    </div>-->  
<!--</form>
<!--old_End-->


<!--New show password page-->
<div class="container">
  <a href="#" data-target="#pwdModal" data-toggle="modal">Forgot my password</a>
</div>

<!--modal-->
<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">What's My Password?</h1>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          
                          <p>If you have forgotten your password you can reset it here.</p>
                            <div class="panel-body">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
<!--modal_End-->

</body>
</html>