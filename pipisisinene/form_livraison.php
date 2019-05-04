<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Livraison</title>
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
				<div class="col-sm-2 col-xs-12">


					<!-- LOGO en haut à gauche --> 

					<a href="index.php" title="accueil">
							<img
							src="images/logo.png" 
							alt="[logo ECE]"
							width="200px"
					/>
					</a>
					
				</div>
				
				<div id="menu">
					<ul>
						<li class="categories"><a href="Categories.php">Catégories</a>
							<ul class="submenu">
								<li><a href="#">Livres</a></li>
								<li><a href="#">Musiques</a></li>
								<li><a href="#">Vêtements</a></li>
								<li><a href="#">Sports et Loisir</a></li>
							</ul>
						</li>
						<li><a href="vendre1.php">Vendre</a></li>
                        <li><a href="AchatConnection.php">Votre compte</a></li>
						<li><a href="#">Panier</a></li>
						<li><a href="form_admin.php">Admin</a></li>
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
						   </br></br></br></br>
		   					<h1>COORDONNÉES DE LIVRAISON</h1>
		   					<form method="post" action="traitement_livraison.php">
								<label for="nom_livraison">Nom :</label>
								<input type="text" name="nom_livraison">
								<br>
								<label for="prenom_livraison">Prénom :</label>
								<input type="text" name="prenom_livraison"/>
								<br>
								<label for="adresse_postale">Adresse postale :</label>
								<textarea name="adresse_postale"></textarea>
								<br>
								<label for="ville">Ville :</label>
								<input type="text" name="ville"/>
								<br>
								<label for="code_postal">Code postal :</label>
								<input type="number" name="code_postal"/>
								<br>
								<label for="pays">Pays :</label>
								<input type="text" name="pays"/>
								<br>
								<label for="numero_tel">Numéro de téléphone :</label>
								<input type="number" name="numero_tel"/>
								<br>
								<label for="type_paiement">Type de paiement :</label>
								<select name="type_paiement">
									<option value="visa">Visa</option>
									<option value="mastercard">MasterCard</option>
									<option value="american_express">American Express</option>
									<option value="paypal">PayPal</option>
								</select>
								<br>
								<label for="numero_carte">Numéro de carte :</label>
								<input type="number" name="numero_carte"/>
								<br>
								<label for="nom_carte">Nom indiqué sur la carte :</label>
								<input type="text" name="nom_carte"/>
								<br>
								<label for="date_exp">Date d'expiration :</label>
								<input type="number" name="date_exp"/>
								<br>
								<label for="cryptogramme">Cryptogramme :</label>
								<input type="number" name="cryptogramme"/>
								<br>
								<input class="btn btn-primary btn-lg pull-left" style="margin-left:  400px" type="submit" name="envoyer" value="Envoyer"/>
							</form>
		   					
		   					<br>
		   					

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

