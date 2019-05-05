<!DOCTYPE HTML>
<html>


	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-CommercE &mdash; E-Commerce à l'ECE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Projet Web Dynamique ING3" />


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
							<form method="post" action="recherche.php">
							 	<input type="text" name="mot" class="searchTerm" style="width: 500px" placeholder="Que voulez-vous chercher?">
							 	<button type="submit" class="searchButton" style="border-radius: 7px">
								 	<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					 </div>

					 <div>
					 		
					 		<?php

					 		if(isset($_SESSION['nom']) && !empty($_SESSION['nom']))
					 		{
					 			echo "Bonjour " . $_SESSION['nom'];
					 		?>

					 			<a class="listenav" href="deconnexion.php" style="color: white">Déconnexion</a>

					 		<?php

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
								<li><a href="books.php">Livres</a></li>
								<li><a href="music.php">Musiques</a></li>
								<li><a href="clothes.php">Vêtements</a></li>
								<li><a href="sports.php">Sports et Loisir</a></li>
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

	
</br></br></br></br></br>
		<div class="ubea-section" id="ubea-portfolio" data-section="portfolio">
			<div class="ubea-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center ubea-heading">
						<h2>Promotions du moment</h2>
						<p>Achetez un joli cadeau en promotion parmi la liste ci-dessous à votre maman pour la Fête des Mères le 26 Mai prochain!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<a href="images/chocolats.jpg" class="ubea-card-item image-popup" title="Boîte de chocolats">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/chocolats.jpg" alt="Image" class="img-responsive">
							</figure>
						</a>
					</div>
					<div class="col-md-4">
						<a href="images/bouquet.jpg" class="ubea-card-item image-popup" title="Bouquet de fleurs">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/bouquet.jpg" alt="Image" class="img-responsive">
							</figure>
						</a>
					</div>
					<div class="col-md-4">
						<a href="images/relaxation.jpg" class="ubea-card-item image-popup" title="Coffret de relaxation">
							<figure>
								<div class="overlay"><i class="ti-plus"></i></div>
								<img src="images/relaxation.jpg" alt="Image" class="img-responsive">
							</figure>
						</a>
					</div>

					
				</div>
			</div>
		</div>
        
		<div class="ubea-section" id="ubea-faq" data-section="faq">
			<div class="ubea-container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center ubea-heading">
						<h2>Futures promotions</h2>
						<p>Pour (vous) faire plaisir à moindre coût</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">

						<div class="ubea-accordion">
							<div class="ubea-accordion-heading">
								<div class="icon"><i class="icon-cross"></i></div>
								<h3>Promotions estivales : 21/06 - 30/06</h3>
							</div>
							<div class="ubea-accordion-content">
								<div class="inner">
									<p>L'été arrive... et la plage aussi ! Vous découvrirez notre sélection d'articles de plage à prix réduit !</p>
								</div>
							</div>
						</div>
						<div class="ubea-accordion">
							<div class="ubea-accordion-heading">
								<div class="icon"><i class="icon-cross"></i></div>
								<h3>Rentrée des classes : 01/09 - 10/09</h3>
							</div>
							<div class="ubea-accordion-content">
								<div class="inner">
									<p>Qui dit rentrée des classes dit courses de rentrée ! Des réductions à gogo pour une rentrée moins chère ! </p>
								</div>
							</div>
						</div>
						<div class="ubea-accordion">
							<div class="ubea-accordion-heading">
								<div class="icon"><i class="icon-cross"></i></div>
								<h3>Toussaint : 20/10 - 01/11</h3>
							</div>
							<div class="ubea-accordion-content">
								<div class="inner">
									<p>Rendez hommage à vos disparus avec cette collection de chrysanthèmes en réduction, livraison offerte ! </p>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-6">

						<div class="ubea-accordion">
							<div class="ubea-accordion-heading">
								<div class="icon"><i class="icon-cross"></i></div>
								<h3>Noël : 15/12 - 25/12</h3>
							</div>
							<div class="ubea-accordion-content">
								<div class="inner">
									<p>Offrez des cadeaux à tous vos proches sans vous ruiner ! Toutes catégories d'articles en promo... </p>
								</div>
							</div>
						</div>
						<div class="ubea-accordion">
							<div class="ubea-accordion-heading">
								<div class="icon"><i class="icon-cross"></i></div>
								<h3>Saint-Valentin : 04/02 - 14/02</h3>
							</div>
							<div class="ubea-accordion-content">
								<div class="inner">
									<p>Faites plaisir à votre bien-aimé(e) et scellez votre amour en lui offrant un petit cadeau parmi notre sélection !</p>
								</div>
							</div>
						</div>
						<div class="ubea-accordion">
							<div class="ubea-accordion-heading">
								<div class="icon"><i class="icon-cross"></i></div>
								<h3>Pâques : 02/04 - 12/04</h3>
							</div>
							<div class="ubea-accordion-content">
								<div class="inner">
									<p>Oeufs ou lapins en chocolat, gâtez votre famille sans modération pour Pâques ! </p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>
    

      
	<div id="ubea-contact" data-section="contact" class="ubea-cover ubea-cover-xs" style="background-image:url(images/promotions.jpg);">
		<div class="overlay"></div>
		<div class="ubea-container">
			<div class="row text-center">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-12">
							<h3>Pour toute question ou information complémentaire, </br> contactez-nous : <a href="mailto:?to=ececommerce@yopmail.com &cc=faykha29@gmail.com &subject=Question E-CommercE"> ececommerce@yopmail.com </a>

                            </h3>
						</div>
					</div>
				</div>
			</div>
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

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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

