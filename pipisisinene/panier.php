<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Panier</title>
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
						<li class="listenav"><a href="panier.php" style="color: white">Panier</a></li>
						<li class="listenav"><a href="form_admin.php" style="color: white">Admin</a></li>
					</ul>
				</div>
			</div>
		
		</div>
		


	</nav>
	<div >
		<div >
			<ul>
		   	<li>
		   		
		   		<div >
		   			<div class="col-md-10 col-md-offset-1 text-center">
		   				<div>
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>PANIER</h2> <br> <br>
		   					
		   					<br><br><br><br><br>
							
                               <?php
							   

							   $database = "piscine";
							   $db_handle = mysqli_connect('localhost', 'root', '');
							   $db_found = mysqli_select_db($db_handle, $database);
					   
							   $sql="SELECT * FROM panier";
							   $req = mysqli_query($db_handle,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

							  ?>  <?php								 
								

							   while ($row=mysqli_fetch_assoc($req)) 
								{
									
									
                                    ?>  <?php  
                                    $ID_Produit=$row['ID_Produit'];
                                    $sql2="SELECT * FROM produit WHERE ID_Produit = $ID_Produit";
                                    $req2 = mysqli_query($db_handle,$sql2) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
                                    
                                    while ($row2=mysqli_fetch_assoc($req2)) {
                                    	
                                    
                                    ?> 
                                    <div class="prod_conteneur">
										<div class="prod_text prod_nom" style="">
											<?php echo $row2['nom'];?>
										</div>
										<div class="prod_conteneur_text">
											<div class="prod_photo">
											<img  src="<?php echo "ima	ges/".$row2['photo']; ?>" alt="image prod" style="height: 150px; width: 150px; border-radius: 10px; border-color: darkgrey; border: solid">
										</div>
										<div class="prod_text prod_desc">
											<?php echo $row2['description']; ?>
										</div>
										<div class="prod_prix">
											<?php echo $row2['prix'],"€"; ?>
										</div>
										<div class="prod_bouton_acheteur" style="background-color: red">
											<br><br>
									<form action="supp_produit_panier.php">
												<input type="submit" name="supprimer" value="Supprimer"></button>
											</form>
										</div>
									</div>	

<?php   }
                                    ?>
                                    
                                    
                                   
                                    &nbsp;  

								
									
								
									
									<?php
									echo "</br>";
									echo "</br>";

								}
							?>
                           
							<p><a href="form_livraison.php" class="btn btn-primary btn-lg">Aller au payement</a></p>
		   					

		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</div>

	
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

