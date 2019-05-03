<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$nom_livraison=isset($_POST['nom_livraison'])?$_POST['nom_livraison'] : "";
		$prenom_livraison=isset($_POST['prenom_livraison'])?$_POST['prenom_livraison'] : "";
		$adresse_postale=isset($_POST['adresse_postale'])?$_POST['adresse_postale'] : "";
		$ville=isset($_POST['ville'])?$_POST['ville'] : "";
		$code_postal=isset($_POST['code_postal'])?$_POST['code_postal'] : "";
		$pays=isset($_POST['pays'])?$_POST['pays'] : "";
		$numero_tel=isset($_POST['numero_tel'])?$_POST['numero_tel'] : "";
		$type_paiement=isset($_POST['type_paiement'])?$_POST['type_paiement'] : "";
		$numero_carte=isset($_POST['numero_carte'])?$_POST['numero_carte'] : "";
		$nom_carte=isset($_POST['nom_carte'])?$_POST['nom_carte'] : "";
		$date_exp=isset($_POST['date_exp'])?$_POST['date_exp'] : "";
		$cryptogramme=isset($_POST['cryptogramme'])?$_POST['cryptogramme'] : "";

		$sql="INSERT INTO acheteur(nom_livraison, prenom_livraison, adresse_postale, ville, code_postal, pays, numero_tel, type_paiement, numero_carte, nom_carte, date_exp, cryptogramme) VALUES ('$nom_livraison', '$prenom_livraison', '$adresse_postale', '$ville', '$code_postal', '$pays', '$numero_tel', '$type_paiement', '$numero_carte', '$nom_carte', '$date_exp', '$cryptogramme')";

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