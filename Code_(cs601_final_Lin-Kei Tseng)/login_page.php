<!-- Get Cookie or not -->
<h3 align="center"><b><i>
  <?php if(!isset($_COOKIE["login"])){
        echo "You need to log in this website";
        //header('refresh:3;url=login_page.php'); 
        //將網址改為要導入的登入頁面
        /*println ("You need to login!");*/
      } 
    else{ 
          /*header('refresh:3;url=login_page.php'); */  
      echo "You had logged";
      header('refresh:0.3;url=HasCookie.php'); 
    } 
    ?>
      <i></b></h3>
<!-- Get Cookie_End  -->

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Login</title>
  
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!--new css-->
  <link href='http://fonts.googleapis.com/css?family=Oswald:700|Lobster|Pacifico|Armata|Josefin+Sans|Lobster|Shadows+Into+Light|Black+Ops+One' rel='stylesheet' type='text/css'>
  <!--JQ and JS-->
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script> 
  
  <!-- Universal selector:  means all character data will take on the Raleway font-family look -->
  <style>

  body{
    background: black;
     /*#006AD1*/
  }

 form{
  margin: 100px auto;
  width: 400px;
}
h1{
  font-family: 'Lobster', calibri, arial;
  color: white;
  border-right: 5px solid white;
  font-size: 25px;
  letter-spacing: 2px;
}
h2{
  font-family:'Pacifico',arial;
  font-size: 20px;
  color: white;
  font-weight: normal;
}
div.input{
  background: #E0E0E0;
  border: 3px solid white;
  font-famil: 'Oswald', calibri;
  margin-bottom: 10px;
  color: #006AD1;
}
input.input{
  color: #006AD1;
  border: none;
  font-family: '#006AD1', calibri;
  background: transparent;
  width: 95%;
}
.button{
  background:#006AD1;
  border: none;
  color: #F7F7F7;
  padding: 5px 20px;
  font-weight: bold;
  font-family: 'Josefin Sans',calibri;
  font-size: 20px;
  transition-duration: 0.5s;
}
.button:hover{
  color:#006AD1;
  border: none;
  background: #F7F7F7;
  transition-duration: 0.5s;}
  *, *:before, *:after{ 
    box-sizing: border-box; 
    -moz-box-sizing: border-box; 
    -webkit-box-sizing: border-box; 
  } 
  .css-shapes-preview{ 
    position: relative; 
    height: 200px; 
    width: 200px; 
    background-color: ; 
    -webkit-transform: rotate(45deg); 
    transform: rotate(45deg); 
    top: 100px;
  }
  .headng{
    font-family:'Black Ops One';
    border:none;
    text-align:center;
    font-size:30px;
    font-weight: 900;
    text-decoration:underline;
  }
  p{
    font-family:'Shadows Into Light';
    color:#E0E0E0;
    text-align:center;
  }

  a{
    color: #FFFFFF;
  }

  #black{
    color: #000000;
  }

  #DarkSlateGray{
    color: #2F4F4F;
    font-size: 150%
  }    
  </style>
  
</head>

<body> 

<a class="navbar-brand" href="index.html"><b>M&amp;M Stop</b></a>

  <!--Login_New_2-->
  <div class="row">
    <div class="col-md-6">
      <!-- <form class="form-signin" method="POST" action="login_save.php" > -->
      <form class="form-signin" method="POST" action="login_save.php" >
        <div class="row">
          <div class="col-md-6"><h1>Please Login</h1></div>
          <div class="col-md-6"><h2>Welcome back</h1><br /></div>
        </div>
        <div class='input'>
          <label for='username'><span class='glyphicon glyphicon-user'></span></label>
          <input type='text' class='input' placeholder='Username' name='username'/><br />
        </div>
        <div class='input'>
          <label for='username'><span class='glyphicon glyphicon-lock'></span></label>
          <input type='password'   class='input' placeholder='Password' name='password' /><br />
        </div>
        <input type="submit" class='button' value='Login' />
        <!--Reset and Show password-->
        <!--<div>-->
        <a class="white" href="resetPassword_page.php"><!-- Reset My Password(old) --></a> &nbsp; &nbsp;
        <a class="white" href="#" data-target="#pwdModal" data-toggle="modal">  Forgot My Password |</a>
        <a class="white" href="#" data-target="#pwdModal-0" data-toggle="modal">| Reset My Password(New)</a>
        <!--<a class="white" href="showPassword_page.php">Show My Password</a>-->
        <!--new ForgotMyPassword-->
        <!--<div class="container">-->

       
        <!--</div>-->
        <!--</div>-->
      </form>
      <!--Login_New_2_End-->

<!--modal_NewForgetPassword_Page-->
<div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 id="black" class="text-center">What's My Password?</h1>
      </div>
      <div class="modal-body">
          <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          
                          <p id="DarkSlateGray">If you have forgotten your password you can see it here.</p>
                            <div class="panel-body">
                            <form method="POST" action="password_SH.php">    
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                </fieldset>
                            </form>
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
<!--modal_FotgetPassword_End-->

<!--modal_ResetPW_Page-->
<div id="pwdModal-0" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h1 id="black" class="text-center">Are You Sure to Reset Password?</h1>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-center">

                <p id="DarkSlateGray">If you have forgotten your password you can get new one here.</p>
                <div class="panel-body">
                  <form method="POST" action="resetPass_RS.php">    
                    <fieldset>
                      <div class="form-group">
                        <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
                      </div>
                      <input class="btn btn-lg btn-primary btn-block" value="Reset My Password" type="submit">
                    </fieldset>
                  </form>
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
<!--modal_ResetPW_Page_End-->



</div>

<!-- pop up register page -->
<div class="col-md-1">
  <div class="css-shapes-preview">
    <!-- <h1 class='headng'> M&amp;M Stop</h1> -->
    <!-- <a class="headng" href="regist_page.php" data-target="#pwdModal-2" data-toggle="modal">Go Sign Up!</a> <p>Nice To See You Again -->
    <a class="headng" href="regist_page.php" data-target="#pwdModal-2" data-toggle="">Go Sign Up!</a> <p>Nice To See You Again</p>
    <!-- <p>Nice To See You Again</p> -->
  </div>
</div>    
</body>
</html>

<!--http://bootsnipp.com/snippets/7X9yV-->
<!--http://www.bootply.com/8uTyD9obfl