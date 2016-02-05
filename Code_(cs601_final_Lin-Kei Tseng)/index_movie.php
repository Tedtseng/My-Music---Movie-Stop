<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>M&amp;M | Movie</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background-color: #060613;
        }
    </style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">M&amp;M Stop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="index_music.php" target="_blank">Music</a>
                    </li>
                    <li>
                        <a href="http://localhost:3000/" target="_blank">Chat Space</a>
                    </li>
                    <li>
                        <a href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Navigation_End -->

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/d2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>MOVIE // M</h1>
                        <hr class="small">
                        <span class="subheading">My Favorite &amp; Recommendation</span>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- Page Header -->

    
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">The Moive
                    <small>I LOVE</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <!-- Project One -->
            <div class="row">
                    <div class="col-md-7">
                        <a href="#" id="1">
                            <iframe width="600" height="300" src="https://www.youtube.com/embed/lTV-UJqqRRY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                            <!-- add comment UI + Button -->
                                <h2>Comments</h2>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" href="#collapse1">See comments detail  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </h4>
                                      </div><!--panel-title--> 
                                  
                                    <div id="collapse1" class="panel-collapse collapse in">
                                        <!-- show comment DB_old -->
                                        <?php 
                                        $servername = "localhost";
                                        $username ="root";
                                        $password = ""; 
                                        $dbname = "cs601finaldb";

                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT username,comment_text FROM comment1"); 
                                            $stmt->execute();
                                            $iterator = $stmt->fetchAll();
                                            foreach($iterator as $lin) { ?>
                                            <!-- show comment DB_old -->
                                            <div class="panel-body">
                                                <?php  echo "<b>".$lin[0]."</b>"."<b>:</b> ". $lin[1]. "<br>"; ?>
                                            </div><!--panel-body-->
                                            <!-- show comment DB_old -->
                                            <?php }                           
                                            }
                                            catch(PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            $conn = null;
                                            ?><!-- show comment DB_old -->

                                     </div><!--panel-collapse collapse-->
                                 </div><!--panel-default-->
                                </div><!--panel-group-->
                            <!-- add comment UI + Button_End -->
                        </a>
                        <!-- add comment button -->
                        <a class="btn btn-primary" href="#" data-target="#pwdModal1" data-toggle="modal">Add Comment  &rarr;</a>
                        <!-- add comment button  -->

            <!--modal_addComment_Page-->
                        <div id="pwdModal1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h1 id="black" class="text-center">What Do You What to Say?(1)</h1>
                                  </div>
                                  <div class="modal-body">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="text-center">
                                                  <p id="DarkSlateGray">You can post your comments after pressing "Submit".</p>
                                                  <div class="panel-body">
                                                    <form method="POST" action="addcomment_save1.php">
                                                      <fieldset>
                                                        <div class="form-group">
                                                            <input class="form-control input-lg" id="username" type="text" name="username" placeholder="My name is..." >
                                                            <br>
                                                            <input class="form-control input-lg" id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >                                                      
                                                        </div>
                                                        <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit">
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
            <!--modal_addComment_End-->


                    </div><!--col-md-7-->

                    <div class="col-md-5">
                        <h3>Memento</h3>
                        <h4>(2000)</h4>
                        <p>Leonard Shelby wears expensive, tailored suits, drives a late model Jaguar sedan, but lives in cheap anonymous motels, paying his way with thick wads of cash. Although he looks like a successful businessman, his only work is the pursuit of vengeance: tracking and punishing the man who raped and murdered his wife. His suspicions dismissed by the police, Leonard's life has become an all-consuming quest for justice.</p>
                        <p>The difficulty, however, of locating his wife's killer is compounded by the fact that Leonard suffers from a rare, untreatable form of memory loss. Although he can recall details of life before his "accident", Leonard can't remember what happened fifteen minutes ago, where he is, where he's going, or why.</p>
                        <a class="btn btn-primary" href="http://www.imdb.com/title/tt0209144/" target="_blank">View Detail <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div><!--col-md-5-->
            </div><!--row-->

        <hr>

<!-- Project Two -->
         <div class="row">
                    <div class="col-md-7">
                        <a href="#" >
                            <iframe width="600" height="300" src="https://www.youtube.com/embed/66TuSJo4dZM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                            <!-- add comment UI + Button -->
                                <h2 id="2">Comments</h2>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" href="#collapse2" id="2">See comments detail  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </h4>
                                      </div><!--panel-title--> 
                                  
                                    <div id="collapse2" class="panel-collapse collapse in">
                                        <!-- show comment DB_old -->
                                        <?php 
                                        $servername = "localhost";
                                        $username ="root";
                                        $password = ""; 
                                        $dbname = "cs601finaldb";

                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT username,comment_text FROM comment2"); 
                                            $stmt->execute();
                                            $iterator = $stmt->fetchAll();
                                            foreach($iterator as $lin) { ?>
                                            <!-- show comment DB_old -->
                                            <div class="panel-body">
                                                <?php  echo "<b>".$lin[0]."</b>"."<b>:</b> ". $lin[1]. "<br>"; ?>
                                            </div><!--panel-body-->
                                            <!-- show comment DB_old -->
                                            <?php }                           
                                            }
                                            catch(PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            $conn = null;
                                            ?><!-- show comment DB_old -->
                                      </div> <!--panel-collapse collapse-->
                                 </div><!--panel-default-->
                                </div><!--panel-group-->
                            <!-- add comment UI + Button_End -->
                        </a>
                        <!-- add comment button -->
                        <a class="btn btn-primary" href="#" data-target="#pwdModal2" data-toggle="modal">Add Comment  &rarr;</a>
                        <!-- add comment button  -->

            <!--modal_addComment_Page-->
                        <div id="pwdModal2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h1 id="black" class="text-center">What Do You What to Say?(2)</h1>
                                  </div>
                                  <div class="modal-body">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="text-center">
                                                  <p id="DarkSlateGray">You can post your comments after pressing "Submit".</p>
                                                  <div class="panel-body">
                                                    <form method="POST" action="addcomment_save2.php">
                                                      <fieldset>
                                                        <div class="form-group">
                                                            <input class="form-control input-lg" id="username" type="text" name="username" placeholder="My name is..." >
                                                            <br>
                                                            <input class="form-control input-lg" id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >                                                      
                                                        </div>
                                                        <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit">
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
            <!--modal_addComment_End-->


                    </div><!--col-md-7-->

                    <div class="col-md-5">
                        <h3>Inception</h3>
                        <h4>(2010)</h4>
                        <p>A thief who steals corporate secrets through use of the dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.</p>
                        <a class="btn btn-primary" href="http://www.imdb.com/title/tt1375666/?ref_=fn_al_tt_1" target="_blank">View Detail <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div><!--col-md-5-->
            </div><!--row-->

        <hr>

        <!-- Project Three -->
                <div class="row">
                    <div class="col-md-7">
                        <a href="#3">
                            <iframe width="600" height="300" src="https://www.youtube.com/embed/5iaYLCiq5RM?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                            <!-- add comment UI + Button -->
                                <h2 id="3">Comments</h2>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" href="#collapse3">See comments detail  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </h4>
                                      </div><!--panel-title--> 
                                  
                                    <div id="collapse3" class="panel-collapse collapse in">
                                        <!-- show comment DB_old -->
                                        <?php 
                                        $servername = "localhost";
                                        $username ="root";
                                        $password = ""; 
                                        $dbname = "cs601finaldb";

                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT username,comment_text FROM comment3"); 
                                            $stmt->execute();
                                            $iterator = $stmt->fetchAll();
                                            foreach($iterator as $lin) { ?>
                                            <!-- show comment DB_old -->
                                            <div class="panel-body">
                                                <?php  echo "<b>".$lin[0]."</b>"."<b>:</b> ". $lin[1]. "<br>"; ?>
                                            </div><!--panel-body-->
                                            <!-- show comment DB_old -->
                                            <?php }                           
                                            }
                                            catch(PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            $conn = null;
                                            ?><!-- show comment DB_old -->

                                     </div><!--panel-collapse collapse-->
                                 </div><!--panel-default-->
                                </div><!--panel-group-->
                            <!-- add comment UI + Button_End -->
                        </a>
                        <!-- add comment button -->
                        <a class="btn btn-primary" href="#" data-target="#pwdModal3" data-toggle="modal">Add Comment  &rarr;</a>
                        <!-- add comment button  -->

            <!--modal_addComment_Page-->
                        <div id="pwdModal3" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h1 id="black" class="text-center">What Do You What to Say?(3)</h1>
                                  </div>
                                  <div class="modal-body">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="text-center">
                                                  <p id="DarkSlateGray">You can post your comments after pressing "Submit".</p>
                                                  <div class="panel-body">
                                                    <form method="POST" action="addcomment_save3.php">
                                                      <fieldset>
                                                        <div class="form-group">
                                                            <input class="form-control input-lg" id="username" type="text" name="username" placeholder="My name is..." >
                                                            <br>
                                                            <input class="form-control input-lg" id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >                                                      
                                                        </div>
                                                        <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit">
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
            <!--modal_addComment_End-->


                    </div><!--col-md-7-->

                    <div class="col-md-5">
                        <h3>Shutter Island</h3>
                        <h4>(2010)</h4>
                        <p>A U.S Marshal investigates the disappearance of a murderess who escaped from a hospital for the criminally insane.</p>
                        <a class="btn btn-primary" href="http://www.imdb.com/title/tt1130884/" target="_blank">View Detail <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div><!--col-md-5-->
            </div><!--row-->

        <hr>

        <!-- <hr> -->

    <!-- Project Four -->
                        <div class="row">
                    <div class="col-md-7">
                        <a href="#" id="4">
                            <iframe width="600" height="300" src="https://www.youtube.com/embed/EXeTwQWrcwY?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                            <!-- add comment UI + Button -->
                                <h2>Comments</h2>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" href="#collapse4">See comments detail  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </h4>
                                      </div><!--panel-title--> 
                                  
                                    <div id="collapse4" class="panel-collapse collapse in">
                                        <!-- show comment DB_old -->
                                        <?php 
                                        $servername = "localhost";
                                        $username ="root";
                                        $password = ""; 
                                        $dbname = "cs601finaldb";

                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT username,comment_text FROM comment4"); 
                                            $stmt->execute();
                                            $iterator = $stmt->fetchAll();
                                            foreach($iterator as $lin) { ?>
                                            <!-- show comment DB_old -->
                                            <div class="panel-body">
                                                <?php  echo "<b>".$lin[0]."</b>"."<b>:</b> ". $lin[1]. "<br>"; ?>
                                            </div><!--panel-body-->
                                            <!-- show comment DB_old -->
                                            <?php }                           
                                            }
                                            catch(PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            $conn = null;
                                            ?><!-- show comment DB_old -->

                                     </div><!--panel-collapse collapse-->
                                 </div><!--panel-default-->
                                </div><!--panel-group-->
                            <!-- add comment UI + Button_End -->
                        </a>
                        <!-- add comment button -->
                        <a class="btn btn-primary" href="#" data-target="#pwdModal4" data-toggle="modal">Add Comment  &rarr;</a>
                        <!-- add comment button  -->

            <!--modal_addComment_Page-->
                        <div id="pwdModal4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h1 id="black" class="text-center">What Do You What to Say?(4)</h1>
                                  </div>
                                  <div class="modal-body">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="text-center">
                                                  <p id="DarkSlateGray">You can post your comments after pressing "Submit".</p>
                                                  <div class="panel-body">
                                                    <form method="POST" action="addcomment_save4.php">
                                                      <fieldset>
                                                        <div class="form-group">
                                                            <input class="form-control input-lg" id="username" type="text" name="username" placeholder="My name is..." >
                                                            <br>
                                                            <input class="form-control input-lg" id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >                                                      
                                                        </div>
                                                        <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit">
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
            <!--modal_addComment_End-->


                    </div><!--col-md-7-->

                    <div class="col-md-5">
                        <h3>The Dark Knight</h3>
                        <h4>(2008)</h4>
                        <p>When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.</p>
                        <a class="btn btn-primary" href="http://www.imdb.com/title/tt0468569/?ref_=fn_al_tt_1" target="_blank">View Detail <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div><!--col-md-5-->
            </div><!--row-->

        <hr>

        <!-- <hr> -->

<!-- Project Five -->
         <div class="row">
                    <div class="col-md-7">
                        <a href="#" id="5">
                           <iframe width="600" height="300" src="https://www.youtube.com/embed/-BF8hnw6OEw?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                            <!-- add comment UI + Button -->
                                <h2>Comments</h2>
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" href="#collapse5">See comments detail  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                        </h4>
                                      </div><!--panel-title--> 
                                  
                                    <div id="collapse5" class="panel-collapse collapse in">
                                        <!-- show comment DB_old -->
                                        <?php 
                                        $servername = "localhost";
                                        $username ="root";
                                        $password = ""; 
                                        $dbname = "cs601finaldb";

                                        try {
                                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            $stmt = $conn->prepare("SELECT username,comment_text FROM comment5"); 
                                            $stmt->execute();
                                            $iterator = $stmt->fetchAll();
                                            foreach($iterator as $lin) { ?>
                                            <!-- show comment DB_old -->
                                            <div class="panel-body">
                                                <?php  echo "<b>".$lin[0]."</b>"."<b>:</b> ". $lin[1]. "<br>"; ?>
                                            </div><!--panel-body-->
                                            <!-- show comment DB_old -->
                                            <?php }                           
                                            }
                                            catch(PDOException $e) {
                                                echo "Error: " . $e->getMessage();
                                            }
                                            $conn = null;
                                            ?><!-- show comment DB_old -->

                                     </div><!--panel-collapse collapse-->
                                 </div><!--panel-default-->
                                </div><!--panel-group-->
                            <!-- add comment UI + Button_End -->
                        </a>
                        <!-- add comment button -->
                        <a class="btn btn-primary" href="#" data-target="#pwdModal5" data-toggle="modal">Add Comment  &rarr;</a>
                        <!-- add comment button  -->

            <!--modal_addComment_Page-->
                        <div id="pwdModal5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                      <h1 id="black" class="text-center">What Do You What to Say?(4)</h1>
                                  </div>
                                  <div class="modal-body">
                                      <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <div class="text-center">
                                                  <p id="DarkSlateGray">You can post your comments after pressing "Submit".</p>
                                                  <div class="panel-body">
                                                    <form method="POST" action="addcomment_save5.php">
                                                      <fieldset>
                                                        <div class="form-group">
                                                            <input class="form-control input-lg" id="username" type="text" name="username" placeholder="My name is..." >
                                                            <br>
                                                            <input class="form-control input-lg" id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >                                                      
                                                        </div>
                                                        <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit">
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
            <!--modal_addComment_End-->


                    </div><!--col-md-7-->

                    <div class="col-md-5">
                        <h3>Drive</h3>
                        <h4>(2011)</h4>
                        <p>A mysterious Hollywood stuntman and mechanic moonlights as a getaway driver and finds himself trouble when he helps out his neighbor.</p>
                        <a class="btn btn-primary" href="http://www.imdb.com/title/tt0780504/?ref_=fn_al_tt_1" target="_blank">View Detail <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div><!--col-md-5-->
            </div><!--row-->

        <hr>

        <!-- <hr> -->

        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr> <!--New Page Content_end -->
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="index_music.php" target="_blank">Music Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr><!-- Pager -->

    <!-- Footer -->
<!--     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>
 -->


    <!-- jQuery -->
    <!--<script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <!--script src="js/clean-blog.min.js"></script>-->

</body>

</html>



<!-- add comment textbox -->
<!-- select database PHP(Read)  -->
<div class="container">
    <h2 id="0">Comments with this Movie Blog</h2>
    <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" href="#collapse">See Detail  <span class="glyphicon glyphicon-chevron-down"></span></a>
          </h4>
      </div> 
      <div id="collapse" class="panel-collapse collapse in">
        <div class="row">
            <div class="col-md-7">
    <!-- <div class="row">
      <div class="col-xs-4">  
        <table class="table table-hover"> -->
            <!-- <p class="bg-warning"> -->
            <?php 
            $servername = "localhost";
            $username ="root";
            $password = ""; 
            $dbname = "cs601finaldb";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT username,comment_text FROM comment"); 
                $stmt->execute();
                $iterator = $stmt->fetchAll();
        //foreach($iterator as $k=>$v) { 
                foreach($iterator as $lin) { ?>
                <!-- echo "<tr><th>Your Comment is:</th></tr>". $v; -->
               <!--  <tr class="warning"></tr> 
                <tr>
                 <td class="warning"> -->

                    <!-- <div class="panel-body">Panel Body</div> -->

                    <div class="panel-body">
                        <?php  echo "<b>".$lin[0]."</b>"."<b>:</b> ". $lin[1]. "<br>"; ?>
                    </div>
                    <!-- <div class="panel-footer">Panel Footer</div> -->
                    
                    <!-- </td> -->
                    <!-- </tr> -->

                    <?php }                           
                }
                catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                $conn = null;
                ?>

   <!--  </table>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-5">
    </div>
</div>
<!-- </p> -->
<!-- Comment text box -->


<!-- add comment UI -->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- pop out window CSS -->
    <!--new css-->
    <link href='http://fonts.googleapis.com/css?family=Oswald:700|Lobster|Pacifico|Armata|Josefin+Sans|Lobster|Shadows+Into+Light|Black+Ops+One' rel='stylesheet' type='text/css'>
    <!--JQ and JS-->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <!-- pop out window CSS -->
    <style>
    body{
        background-color: #060613;
    }
    </style>

</head>
<!-- <form method="POST" action="addcomment_save.php">
  <fieldset>
    <legend>Add Comment?</legend>
    Username:<br>
    <input id="username" type="text" name="username" placeholder="My name is..." >
    <br>
    Comment:<br>
    <input id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form> -->
<!-- add comment UI_End -->



<!--  -->
<!-- button effect test -->
<!-- <a class="white" href="#" data-target="#pwdModal" data-toggle="modal"> [Add Comment?_test] </a> -->
<!-- <button class="button" href="#" data-target="#pwdModal" data-toggle="modal"> [Add Comment?_test] </button> -->


<body>
    <!-- button effect UI(pop out) -->
    <div class="container">
        <a class="btn btn-primary" href="#" data-target="#pwdModal" data-toggle="modal">Add Comment (Try me) <span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
    <!-- button effect UI(pop out) -->    

    <!--modal_NewForgetPassword_Page-->
    <div id="pwdModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h1 id="black" class="text-center">What Do You Want to Say?</h1>
              </div>
              <div class="modal-body">
                  <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center">

                              <p id="DarkSlateGray">You can post your comments after pressing "Submit".</p>
                              <div class="panel-body">
                                <form method="POST" action="addcomment_save.php">
                                  <fieldset>
                                    <!-- <legend>Add Comment?</legend> -->
                                    <!-- Username:<br> -->
                                    <div class="form-group">
                                        <input class="form-control input-lg" id="username" type="text" name="username" placeholder="My name is..." >
                                        <br>
                                        <!-- Comment:<br> -->
                                        <input class="form-control input-lg" id="comment_text" type="text" name="comment_text" placeholder="Write a comment..." >
                                        <!-- <br><br> -->
                                        <!-- <input type="submit" value="Submit"> -->
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block"  type="submit" value="Submit">
                                </fieldset>
                            </form>
                            <!--Old  -->
                        <!-- <form method="POST" action="password_SH.php">    
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control input-lg" placeholder="E-mail Address" name="email" type="email">
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                            </fieldset>
                        </form> -->
                        <!-- Old -->
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

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Lin-Kei Tseng Website 2015</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer_End -->

</body>
</html>





