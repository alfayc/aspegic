<?php

session_start();

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$idproduit=$_SESSION['idproduit'];
		$nom=$_SESSION['nom'];
		$location=$_SESSION['location'];

		$sql="INSERT INTO panier (ID_Produit, nom_acheteur) VALUES ('$idproduit', '$nom')";


		if(mysqli_query($db_handle, $sql))
		{
			header("Location: $location");
		} 
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>