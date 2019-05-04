<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Livres</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Projet Web Dynamique ING3" />

	<!-- icon -->

	<link rel="sortcut icon" type="image/png" href="images/petitlogo.png">


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- W3school css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="ubea-loader"></div>
	
	<div id="page">
<nav class="ubea-nav" role="navigation">
		<div class="ubea-container">
			<div class="row">
				<div id="conteneur">
					<div class="col-sm-2 col-xs-12" >


					<!-- LOGO en haut à gauche --> 

					<a href="index.php" title="accueil">
							<img
							src="images/logo.png" 
							alt="[logo ECE]"
							width="200px"
					/>
					</a>
					
					</div>

					<div class="wrap">
						<div class="search">
							 <input type="text" class="searchTerm" style="width: 500px" placeholder="Que voulez-vous chercher?">
							 <button type="submit" class="searchButton" style="border-radius: 7px">
								 <i class="fa fa-search"></i>
							</button>
						</div>
					 </div>

					 <div>
					 		
					 		<?php

					 		if(isset($_SESSION['nom']) && !empty($_SESSION['nom']))
					 		{
					 			echo "Bonjour " . $_SESSION['nom'];
					 		?>

					 			<a class="listenav" href="index.php" style="color: white">Déconnexion</a>

					 		<?php

					 		session_unset();
					 		session_destroy();

					 		}
					 		

					 		else
					 		{

					 		?>
					 			
					 		<a class="listenav" href="AchatConnection.php" style="color: white">Mon compte</a>
					 		
					 		<?php

					 		}

					 		?>
					 		
					 	
					 </div>
				</div>
				
				<div id="menu">
					<ul>
						<li class="categories listenav"><a href="Categories.php" style="color: white">Catégories</a>
							<ul class="submenu fondblanc">
								<li><a href="#">Livres</a></li>
								<li><a href="#">Musiques</a></li>
								<li><a href="#">Vêtements</a></li>
								<li><a href="#">Sports et Loisir</a></li>
							</ul>
						</li>
						<li class="listenav"><a href="vendre1.php" style="color: white">Vendre</a></li>
						<li class="listenav"><a href="#" style="color: white">Panier</a></li>
						<li class="listenav"><a href="form_admin.php" style="color: white">Admin</a></li>
					</ul>
				</div>
			</div>
		
		</div>
		


	</nav>
	<div id="ubea-hero" class="js-fullheight"  data-section="home">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-color: #ffb347">
		   		<div class="overlaypqvendre"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>LIVRES</h2> <br> <br>
		   					
		   					
							   <?php
							   

							   $database = "piscine";
							   $db_handle = mysqli_connect('localhost', 'root', '');
							   $db_found = mysqli_select_db($db_handle, $database);
							   //$categorie = isset($_POST['categorie'])?$_POST['categorie'] : "";
					   
							   $sql="SELECT * FROM produit WHERE categorie = 'livre'" ;
							   $req = mysqli_query($db_handle,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 
							  // while($data = mysql_fetch_assoc($req)) 
{
							  
					
}




							   ?> 
		   					

		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</div>

	<footer id="ubea-footer" role="contentinfo">
			<div class="ubea-container">
				
				<div class="row copyright">
					<div class="col-md-12">
						<p class="pull-left">
							<small class="block">E-CommercE - ECE Paris.Lyon</small> 
							<small class="block">Réalisé par le groupe 92</small>
						</p>
						<p class="pull-right">
							<ul class="ubea-social-icons pull-right">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
	
			</div>
		</footer>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

