<!-- Get Cookie of Not -->
<?php if(!isset($_COOKIE["login"])){
	     //No cookie
	     header('refresh:0.1;url=login_page.php');
         //header("Location:http://localhost/CS601/cs601finalV2/login_page.php");
        //將網址改為要導入的登入頁面 
        }
    else{    ?>
<!-- 您已登入    -->
<!-- header('refresh:3;url=HasCookie.php'); -->
<h3>You have logged , Welcome to M&amp;M | Shopping Space</h3>
<h4><i><u><?php echo 'Hello ' . htmlspecialchars($_COOKIE["login"]) . '!';
} ?></i></u></h4>
<!-- Get Cookie_End -->



<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Logged</title>


	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

		<!--<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<!--<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>-->
		<script type="text/javascript" src="http://www.seedway.com/Style%20Library/jquery-ui-1.8.17.custom.min.js"></script> 
<!--(Ajax)Show logged status[Link to logged.php] -->
		<script>
		$(document).ready(function(){
			function showName(){
				$.ajax({
					type:"post",
					//url:"logged.php",
					url:"logged.php",
					//data:"action=showname",
					data:"username=showNAME",
					success:function(data){
						$("#NAME").html(data);//link to Line 154 (Hi,XXX) Logout
					}
		        });
			}

			showName();
		});
	</script>
<!--(Ajax)Show logged status_End  -->	

	<style>
	.white{
		color:white;
	}
	</style>

<!-- New AJAX start(Link to dbcontroller.php + ajax_action.php) -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>
	function showEditBox(editobj,id) {
		$('#frmAdd').hide();
		$(editobj).prop('disabled','true');
		var currentMessage = $("#message_" + id + " .message-content").html();
		var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_'+id+'">'+currentMessage+'</textarea><button name="ok" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
		$("#message_" + id + " .message-content").html(editMarkUp);
	}
	function cancelEdit(message,id) {
		$("#message_" + id + " .message-content").html(message);
		$('#frmAdd').show();
	}
	function cartAction(action,product_code) {
		var queryString = "";
		if(action != "") {
			switch(action) {
				case "add":
				queryString = 'action='+action+'&code='+ product_code+'&quantity='+$("#qty_"+product_code).val();
				break;
				case "remove":
				queryString = 'action='+action+'&code='+ product_code;
				break;
				case "empty":
				queryString = 'action='+action;
				break;
			}	 
		}

		jQuery.ajax({
			url: "ajax_action.php",
			data:queryString,
			type: "POST",
			success:function(data){
				$("#cart-item").html(data);
				if(action != "") {
					switch(action) {
						case "add":
						$("#add_"+product_code).hide();
						$("#added_"+product_code).show();
						break;
						case "remove":
						$("#add_"+product_code).show();
						$("#added_"+product_code).hide();
						break;
						case "empty":
						$(".btnAddAction").show();
						$(".btnAdded").hide();
						break;
					}	 
				}
			},
			error:function (){}
		});
	}
	</script>
	<!-- New AJAX_(Script)end (Link to dbcontroller.php + ajax_action.php) -->

</head>


	<body class="slider-collapse">
		<div id="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<!-- <img src="images/logo.png" alt="" class="logo"> -->
						<div class="logo-text">
							<!-- <h1 class="site-title">Company name</h1>
							<small class="site-description">Tagline goes here</small> -->
							<!-- <h1 class="site-title">M&amp;M Space</h1> -->
							<h1>M&amp;M Space</h1>
							<!-- <small class="site-description">My Used Collection</small> -->
						</div>
					</a> <!-- #branding -->

					<div class="right-section pull-right">
						<a href="index_shop.html" class="cart"><i class="icon-cart"></i> <!-- 0 items in cart --></a>
						<a href="regist_page.php" class="cart">My Accoun  &nbsp;&nbsp;</a>
						
						<a href="regist_page.php" class="cart">
						<!-- Show name by cookie-->
						[ Cookie:] Hello,
						<b>
						<?php 
						if(!isset($_COOKIE["login"])){
							//No Cookie
							echo 'Guest';
						}else{
							//has Cookie 
							echo ' ' .'"'. htmlspecialchars($_COOKIE["login"]) .'"'. ' !'; 
					    }
						?> 
					    </b>                                
						<!--Show name by cookie_End  -->
						</a>
						<a href="regist_page.php" class="cart">
						<!-- Hi,XXX (Using AJAX get name)-->
						[Ajax:] Hi,
						<b class="white" id="NAME"></b>
						<!-- Hi,XXX (AJAX)-->
						</a>

                        <!--if no cookie,don't show "logout button"  -->
						<?php 
						if(!isset($_COOKIE["login"])){
							//No Cookie
						}
						else{
							//has Cookie 
							// echo ' ' .'"'. htmlspecialchars($_COOKIE["login"]) .'"'. '!';?>
							<a href="DeleteCookie.php" class="button">
							Logout
							</a> 
					    <?php } ?> 
						 <!--if no cookie,don't show "logout button"_End  -->

						


					</div> <!-- .right-section -->

					<div class="main-navigation">
						<button class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item home current-menu-item"><a href="index.html"><i class="icon-home"></i></a></li>
							<!-- <li class="menu-item"><a href="products.html">Accessories</a></li> -->
							<!-- <li class="menu-item"><a href="products.html">Promotions</a></li> -->
							<li class="menu-item"><a href="products.html">Video | Collection</a></li>
							<li class="menu-item"><a href="products.html">Album | Collection</a></li>
							<li class="menu-item"><a href="products.html">Xbox | Collection</a></li>
							<!-- <li class="menu-item"><a href="products.html">Wii</a></li> -->
						</ul> <!-- .menu -->
						<div class="search-form">
							<label><img src="images/icon-search.png"></label>
							<input type="text" placeholder="Search...">
						</div> <!-- .search-form -->

						<div class="mobile-navigation"></div> <!-- .mobile-navigation -->
					</div> <!-- .main-navigation -->
				</div> <!-- .container -->
			</div> <!-- .site-header -->

			<div class="home-slider">
				<ul class="slides">
					<li data-bg-image="dummy/slide-1.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">INCEPTION (2010)</h2>
								<small class="slide-subtitle">$3.97</small>
								
								<p>A thief who steals corporate secrets through use of the dream-sharing technology is given the inverse task of planting an idea into the mind of a CEO.</p>
								<p>Director: Christopher Nolan</p>
								<p>Writer: Christopher Nolan</p>
								<p>Stars: Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen </p>
								
								<!-- <a href="login_page.php" class="button">Add to cart</a> -->
							</div>

							<img src="dummy/DVD-cover-1.jpg" class="slide-image">
						</div>
					</li>
					<li data-bg-image="dummy/slide-2.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">The xx (Coexist)</h2>
								<small class="slide-subtitle">$3.79</small>
								
								<p>The xx exist in a time and space of their own making. In 2009 the south London trio s debut album, xx, quietly made at night over the course of two years, bled steadily into the public consciousness to become shorthand for newly refined ideas of teenage desire and anxiety. Articulated with a maturity beyond their years, its hallmarks were restraint and ambiguity. In the age of the over-share, xx was pop with its privacy settings on max.</p>
								<P>Three years later, Romy Madley Croft, Oliver Sim and Jamie Smith release Coexist, and a new perspective. Where xx lent in close to whisper in your ear, Coexist gazes warmly in your eyes. Much has happened to lead to this point: most pertinently, they ve grown up.</P>
								<P>Previously cast as the quietest of the three, Jamie became the public face of The xx in 2011. In-between DJ gigs, he focused on growing his production skills, developing a distinct sound and presence. His remix of Adele s "Rolling In The Deep, " re-imagining of Gil Scott-Heron s final album on We re New Here with its defining single "I ll Take Care Of U, " and his debut solo single "Far Nearer" set him apart as a highly regarded producer in his own right. That position was cemented when Drake asked Jamie to produce the title track of his album Take Care, inspired by "I ll Take Care Of U."</P>
								<P>Above all, though, Coexist is an album of confident adult reflection. "Angels, " sung by Romy, is a perfectly distilled love song. Its counter is "Fiction" led by Oliver, a bittersweet ballad that s strength lies in naming its fear. What has changed for The xx? Nothing, and everything. Older and wiser, surer yet still so tender, Coexist finds itself on the other side of heartbreak, when the light returns.</P>
								<!-- <a href="#" class="button">Add to cart</a> -->
							</div>

							<img src="dummy/cd-cover-2.jpg" class="slide-image">
						</div>
					</li>
					<li data-bg-image="dummy/slide-3.jpg">
						<div class="container">
							<div class="slide-content">
								<h2 class="slide-title">BioShock -Infinite <br> (Xbox 360)</h2>
								<small class="slide-subtitle">$12.47</small>
								
								<p id="b">The City in the Sky - Leave the depths of Rapture to soar among the clouds of Columbia. The flying city is a beautiful and vibrant world that holds a very dark secret.</p>
								<p id="b">Unlikely Mission - Set in 1912 former Pinkerton agent Booker DeWitt must rescue a mysterious girl from the sky-city of Columbia or never leave it alive.</p>
								<p id="b">Tear Through Time - Open Tears in time and space to shape the battlefield and turn the tide in combat by pulling weapons and other resources out of thin air.</p>
								<p id="b">Vigorous Powers - Throw explosive fireballs and shoot lightning as devastatingly powerful Vigors surge through your body to be unleashed against all that oppose you.</p>
								<p id="b">1999 Mode - Open your own Tear to 1999 to experience the design and balance that hardcore gamers enjoyed back in the 20th century.</p>
								
								<!-- <a href="#" class="button">Add to cart</a> -->
							</div>

							<img src="dummy/game-cover-3.jpg" class="slide-image">
						</div>
					</li>
				</ul> <!-- .slides -->
			</div> <!-- .home-slider -->

			<main class="main-content">
				<div class="container">
					<div class="page">
						<section>
							<header id="newProduct">
								<h2 class="section-title">New Products</h2>
								<!-- <a href="#" class="all">Show All</a> -->
							</header>

							<div class="product-list">
								<!--Ajax test(Show Product)(Link to dbcontroller.php) -->
								<!--Paypal test  -->
								<form id="frmCart">
									<?php
									$product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY product_id ASC");
									if (!empty($product_array)) { 
										foreach($product_array as $key=>$value){
											?>

											<!--[Ajax] Show Products -->

											<div class="product">
												<div class="inner-product">
													<div class="figure-image">
														<a href="single.html"><img src="<?php echo $product_array[$key]["product_pic"]; ?>"></a>
													</div>
													<!-- <h3 class="product-title"><a href="#">test</a></h3> -->
													<h3 class="product-title"><a href="#"><?php echo $product_array[$key]["product_name"]; ?></a></h3>
													<small class="price"><?php echo "$".$product_array[$key]["product_price"]; ?></small>
													<!-- <p><?php echo $product_array[$key]["product_desc"]; ?></p> -->
													<!--[Ajax] Show Products_End -->
													<!--Ajax test(Show Product)(Link to dbcontroller.php)_End -->


													<!-- Beginning terrible AJAX(Link to dbcontroller.php + ajax_action.php) -->
													<!-- quantity [ ] -->
													<div>
														<!-- <input type="text" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" size="2" /> -->
														<input type="number" id="qty_<?php echo $product_array[$key]["code"]; ?>" name="quantity" value="1" min="1" max="5" size="1"/>
														<?php
														$in_session = "0";
														if(!empty($_SESSION["cart_item"])) {
															$session_code_array = array_keys($_SESSION["cart_item"]);
															if(in_array($product_array[$key]["code"],$session_code_array)) {
																$in_session = "1";
															}
														}?>
														<!-- button [Add to cart] -->
														<!-- <a href="cart.php" class="button"> -->
														<a href="#shopCart" >
														<input  type="button" 
																id="add_<?php echo $product_array[$key]["code"]; ?>" 
																value="Add to cart" 
																class="btnAddAction cart-action button" 
																onClick = "cartAction('add','<?php echo $product_array[$key]["code"]; ?>')" 
															<?php 
															if($in_session != "0") { ?> 
															style="display:none" 
															<?php } ?> 
														/>
														<!-- button [Added] -->
														<!--<input 
															   type="button" 
															   id="added_<?php echo $product_array[$key]["code"]; ?>" 
															   value="Added" 
															   class="btnAdded button" 
															<?php if($in_session != "1") { ?>
															   style="display:none" 
															<?php } ?> 
														/>-->
														<!-- class="btnAdded" -->
														</a>
													</div>
										<!-- <a href="#" class="button">Add to cart_Old</a>
										<a href="#" class="button muted">Read Details_Old</a> -->
									</div>
								</div><!-- .product -->
								<?php
							}
						}?> 
					</form>
					<!--  -->
				</div> <!-- .product-list -->
				<!--  -->
			</section>

						<section>
							<header id="shopCart">
								<h2 class="section-title">Shopping Cart</h2>
								<!-- <a href="#" class="all">Show All</a> -->
								
							</header>
							   
							   <section>
									<div class="clear-float"></div>
									<div id="shopping-cart">

									<!-- Show products selected by user -->
										<!-- <section> -->
										<div id="cart-item"></div>
									    <!-- </section> -->
									</div>

									<!--Empty Button-->
											<a class="button" id="btnEmpty" class="cart-action" onClick="cartAction('empty','');">
												<b>Empty Cart</b>
											</a class="button">
									<!--Empty Button_End-->		

									<script>
									$(document).ready(function () {
										cartAction('','');
									})
									</script>
<!--Beginning terrible AJAX(Link to dbcontroller.php + ajax_action.php)_end  -->
								</section>

						</section>
					</div>
				</div> <!-- .container -->
			</main> <!-- .main-content -->

			<div class="site-footer">
				<div class="container">
					<div class="row">
							<div class="col-md-6">
								<div class="widget">
									<h3 class="widget-title">Join our newsletter</h3>
									<form action="#" class="newsletter-form">
										<input type="text" placeholder="Enter your email...">
										<input type="submit" value="Subsribe">
									</form>
								</div> <!-- .widget -->
							</div> <!-- column -->
						</div><!-- .row -->

						<div class="colophon">
							<div class="copy">Copyright 2015 M&amp;M Stop. Designed by Lin-Kei Tseng. All rights reserved.</div>
							<div class="social-links square">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div> <!-- .social-links -->
						</div> <!-- .colophon -->
					</div> <!-- .container -->
				</div> <!-- .site-footer -->
			</div>

			<div class="overlay"></div>

			<div class="auth-popup popup">
				<a href="#" class="close"><i class="fa fa-times"></i></a>
				<div class="row">
					<div class="col-md-6">
						<h2 class="section-title">Login</h2>
						<form action="#">
							<input type="text" placeholder="Username...">
							<input type="password" placeholder="Password...">
							<input type="submit" value="Login">
						</form>
					</div> <!-- .column -->
					<div class="col-md-6">
						<h2 class="section-title">Create an account</h2>
						<form action="#">
							<input type="text" placeholder="Username...">
							<input type="text" placeholder="Email address...">
							<input type="submit" value="register">
						</form>
					</div> <!-- .column -->
				</div> <!-- .row -->
			</div> <!-- .auth-popup -->

			<script src="js/jquery-1.11.1.min.js"></script>
			<script src="js/plugins.js"></script>
			<script src="js/app.js"></script>
			
		</body>
		</html>