<?php

session_start();

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{


		$objet="Achat E-CommercE";
		$texte="Bonjour" echo '$_SESSION['nom']'", votre achat a bien été validé.";
		$destinataire= "thomas.virondaud@gmail.com"
		$expediteur = "ececommerce@yopmail.com";
		$from  = "From:".$expediteur."\n";
		$from .= "MIME-version: 1.0\n";
		$from .= "Content-type: text/html;
		charset= UTF-8\n";

		$sql = mail($destinataire, $objet,$texte ,$from);




		if(mysqli_query($db_handle, $sql))
		{

		}
	}

	else
	{
		echo "base de donnee introuvable";
	}

?>