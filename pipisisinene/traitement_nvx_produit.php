<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$nom=isset($_POST['nom'])?$_POST['nom'] : "";
		$description=isset($_POST['description'])?$_POST['description'] : "";
		$photo=isset($_POST['photo'])?$_POST['photo'] : "";
		$video=isset($_POST['video'])?$_POST['video'] : "";
		$prix=isset($_POST['prix'])?$_POST['prix'] : "";
		$categorie=isset($_POST['categorie'])?$_POST['categorie'] : "";
		$quantite=isset($_POST['quantite'])?$_POST['quantite'] : "";
		$ID_Vendeur=isset($_POST['ID_Vendeur'])?$_POST['ID_Vendeur'] : "";


		$sql="INSERT INTO produit VALUES ('$ID_Vendeur', $nom', '$description', '$photo', '$video', '$prix', '$categorie', '$quantite')";

		if(mysqli_query($db_handle, $sql))
		{
			echo "ok";
		}

		else
		{
			echo "pb";
		}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>