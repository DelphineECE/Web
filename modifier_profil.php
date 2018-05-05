<?php 
session_start();


	$id = $_SESSION['id'];
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
	$email = isset($_POST["email"])? $_POST["email"] : "";
	$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
	$emploi = isset($_POST["emploi"])? $_POST["emploi"] : "";
	$age = isset($_POST["age"])? $_POST["age"] : "";

	
	//identifier le nom de base de données 
	$database = "projet_web";
	//connecter l'utilisateur dans BDD
	//votre serveur = localhost | votre login = root | votre mot de pass = ‘’ (rien)
	$db_handle = mysqli_connect('localhost', 'root', ''); 
	$db_found = mysqli_select_db($db_handle, $database);
	//si le BDD existe, faire le traitement 

	if ($db_found) {
		$sql = "UPDATE auteur SET nom='" . $nom . "', prenom='".$prenom."', Email_Client='" . $email . "', Pseudo='" . $pseudo . "', emploi='" . $emploi . "', age='" . $age . "' WHERE id=".$id;
		$result = mysqli_query($db_handle, $sql); 
		}

		header("Location: vous.php?id=".$_SESSION['id']);

?>
