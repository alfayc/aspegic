<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$mot = isset($_POST['mot'])?$_POST['mot'] : "";

		$sql = "SELECT * FROM produit WHERE description LIKE '%$mot%'";
		$result = mysqli_query($db_handle, $sql);
		while($ligne=mysqli_fetch_assoc($result))
		{
			echo $ligne['nom'];
		}
	}

	else
	{
		echo "base de donnee introuvable";
	}


?>