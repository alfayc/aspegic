<?php

	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
		{
			$mail=isset($_POST['mail'])?$_POST['mail'] : "";
			$password=isset($_POST['password'])?$_POST['password'] : "";

			$connexion = false;

			$logs=array("marieploteau22@gmail.com"=>"piscine19", "faycal.khalaf@edu.ece.fr"=>"piscine19", "thomas.virondaud@gmail.com"=>"piscine19");
		
 				if ($logs[$mail] == $password) 
 				{
					session_start();
					$_SESSION['nom']=$nom;
					$_SESSION['admin']=true;
					header("Location: index.php");
 				}

				else
				{
					session_start();
					$_SESSION['co']=false;
					header("Location: form_admin.php");
				}

		}

	else
	{
		echo "base de donnee introuvable";
	}

?>