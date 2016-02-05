<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Music</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    

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
                        <a href="index_movie.php" target="_blank">Movie</a>
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

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>M // MUSIC</h1>
                        <hr class="small">
                        <span class="subheading">This is what I listen.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <!--New Main Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">The Music
                    <small>I LOVE</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
<!-- <div class="row">         -->
<?php
$music_array = $db_handle->runQuery("SELECT * FROM music ORDER BY music_id ASC");
if (!empty($music_array)) { 
    foreach($music_array as $key=>$value){
        ?>
        <!-- <div class="row"> -->
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <!-- <img class="img-responsive" src="http://placehold.it/700x400" alt=""> -->
                    <!-- <iframe width="350" height="200" src="https://www.youtube.com/embed/fzxag7U3Snk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
                    <?php echo $music_array[$key]["youtube"]; ?>
                </a>
                <h3>
                    <!-- <a href="https://itunes.apple.com/album/crazy-single/id794455910" target="_blank">Gnarls Barkley - Crazy (Cover) by Daniela Andrade</a> -->
                    <a href="<?php echo $music_array[$key]["address"]; ?>" target="_blank">
                        <h3><?php echo $music_array[$key]["music_name"]; ?></h3>
                    </a>
                </h3>
                <p><?php echo $music_array[$key]["music_desc"]; ?></p>
               <!--  <p>An oldie but a goodie. I've loved this song for a long time and just recently came across TEEMID &amp; Joie Tan's cover and really loved the subtle jazzy feel of it. So I thought I'd do my own stripped down version and put my twist on this great song.</p> -->
            </div>
        <!-- </div> -->
 <?php
    }
}?><!--close movie_arrary php--> 

<!--End  -->
            <!-- <div class="col-md-4 portfolio-item">
                <a href="#" target="_blank">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/PElhV8z7I60?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=PElhV8z7I60" target="_blank">The xx - Islands</a>
                </h3>
                <p>'Islands' comes from their debut album, xx. </p>
            </div> -->

           <!--  <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/fdQgPu3iUYk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=fdQgPu3iUYk" target="_blank"> I MiSS U - Joyce Chu </a>
                </h3>
                <p>
                    Red People FB Fanpage:
                    https://www.facebook.com/malaysiaredpeople
                    POET PRODUCTION:
                    https://www.facebook.com/poetproduction
                    JOYCE CHU FB：
                    https://www.facebook.com/JoyceChu </p>
            </div> -->
        <!-- </div> -->
   
<!-- /.row -->

        <!-- Projects Row -->
        <!-- <div class="row"> -->
            <!-- <div class="col-md-4 portfolio-item">
                <a href="#">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/SAG4wFcWunE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=SAG4wFcWunE" target="_blank">Niki & The Dove - Mother's Protect (Goldroom Remix)</a>
                </h3>
                <p>
                    
                    Picture : http://weheartit.com</p>
            </div> -->
            <!-- <div class="col-md-4 portfolio-item">
                <a href="#">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/hr8jWDyb1jg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=hr8jWDyb1jg" target="_blank">Mayday-You Are Not Truly Happy</a>
                </h3>
                <p>MayDay FB:<br>http://www.facebook.com/imayday555</p>
            </div>
            <div class="col-md-4 portfolio-item" >
                <a href="#">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/C-xF2MAFw5s?list=RDC-xF2MAFw5s&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=C-xF2MAFw5s&list=RDC-xF2MAFw5s" target="_blank">ONE OK ROCK </a>
                </h3>
                <p>C.h.a.o.s.m.y.t.h. [Official Music Video]
                    ONE OK ROCK Official Website
                    http://www.oneokrock.com/</p>
            </div> -->
        <!-- </div> -->

        <!-- Projects Row -->
        <!-- <div class="row"> -->
            <!-- <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/kHZVGqqf3gg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=kHZVGqqf3gg" target="_blank">The xx - Basic Space</a>
                </h3>
                <p>'Basic Space' by The xx
                    Directed by Anthony Dickenson</p>
            </div> -->
            <!-- <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/2FpW1ctrDHE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=2FpW1ctrDHE" target="_blank">Summertime Sadness</a>
                </h3>
                <p>Lana Del Rey (Cover) by Daniela Andrade & Gia Margaret</p>
            </div> -->
            <!-- <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x400" alt="">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/LkxSU__Bi3w?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                </a>
                <h3>
                    <a href="https://www.youtube.com/watch?v=LkxSU__Bi3w" target="_blank">Nirvana </a>
                </h3>
                <p>Smells Like Teen Spirit (Cover) by Daniela Andrade</p>
            </div> -->
        <!-- </div> -->
        <!-- /.row -->

        <hr>

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

        <hr><!--New music content_end-->
    
    
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="index_movie.php" target="_blank">Movie Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr><!-- Pager -->

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
                    <!-- <p class="copyright text-muted">Copyright &copy; Your Website 2014</p> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <!--<script src="js/jquery.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="js/bootstrap.min.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <!--<script src="js/clean-blog.min.js"></script>-->

 

</body>

</html>


<!-- add comment textbox -->
<!-- select database PHP(Read)  -->
<div class="container">
    <h2 id="0">New Post in Music Blog</h2>
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
                $stmt = $conn->prepare("SELECT * FROM addmusic"); 
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
                        <?php  echo "<p><b>".$lin[1]."</b></p>". $lin[3]. "<br>".$lin[2]."<br>"."<hr>"; ?>
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
<!-- <div class="row">
    <div class="col-md-5">
    </div>
</div> -->
<!-- </p> -->
<!-- Comment text box -->







<!-- add Music Post UI -->
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
        /*background-color: #060613;*/
    }
    </style>

</head>
<body>

<div class="container">
<table class="table table-striped">
<tr class="warning"></tr>
<tr>
  <td class="warning">    
<form method="POST" action="addmusic_save.php">
  <fieldset>
    <h2>/ Post the Music You like /</h2>
    <i>The Name of Song:</i><br>
    <input id="music_name" type="text" name="music_name" placeholder="Name of Song..." >
    <br><br>
    <i>Description:</i><br>
    <input id="music_desc" type="text" name="music_desc" placeholder="Description..." >
    <br><br>
    <i>Youtube(Embed Link):</i><br>
    <input id="youtube" type="text" name="youtube" placeholder="<iframe...>xxx</iframe>" >
    <input class="btn btn-primary" type="submit" value="Submit">
    <div class="row">
    <div class="col-md-2">
        <ul class="pager">
            <li class="next">
        <a href="https://support.google.com/youtube/answer/171780?hl=en" align="left" class="btn btn-dark" target="_blank">Tutorials!</a>
            </li>
        </ul>
    </div>
    </div>
    <br>
    <hr>
    
    <br>
   <!--  <i>ex:<br>
        &nbsp;&lt;iframe width="350" height="200" src="https://www.youtube.com/embed/fzxag7U3Snk?rel=0&amp;amp;controls=0&amp;amp;showinfo=0" frameborder="0" allowfullscreen &gt;&lt;/ifram&gt;</i>
    <br>
    <i>ex:&nbsp;<iframe width="350" height="200" src="https://www.youtube.com/embed/fzxag7U3Snk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></i>
    <br><br>
    <a class="btn btn-primary" href="https://support.google.com/youtube/answer/171780?hl=en" target="_blank"><b>Tutorials!</b></a> -->
   
  </fieldset>
</form>
</td>
</tr>
</table>
</div>
<!-- add comment UI_End -->
</body>
</html>
