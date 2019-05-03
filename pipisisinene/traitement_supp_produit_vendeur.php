<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$nom=isset($_POST['nom'])?$_POST['nom'] : "";
		$ID_Vendeur=isset($_POST['ID_Vendeur'])?$_POST['ID_Vendeur'] : "";

		$sql="DELETE * FROM produit WHERE nom LIKE $nom AND ID_Vendeur LIKE $ID_Vendeur";

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