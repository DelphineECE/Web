
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>



ul {
    list-style-type: none;
    margin-left: 300px;
    margin-right: 435px;

    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>








  <div class="container-fluid">
  <form action="monreseau1.php" method="post">

<ul>
  <li><a class="active" href="accueil.php">ACCUEIL</a></li>
  <li><a href="vous.php">VOUS</a></li>
  <li><a href="monreseau1.php">MON RESEAU</a></li>
  <li><a href="#about">NOTIFICATIONS</a></li>
  <li><a href="emplois.php">EMPLOIS</a></li>
</ul>


<h4> <strong> <u> Offres d'Emplois : <br> <br></u> </strong>  </h4>



</form>



   
  

<?php

//identifier le nom de base de données 
$database = "projet_web";
//connecter l'utilisateur dans BDD
//votre serveur = localhost | votre login = root | votre mot de pass = ‘’ (rien)
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);
//si le BDD existe, faire le traitement 


if ($db_found) {
	$sql = "SELECT NomEntreprise, LogoEntreprise, Statut, LieuEntreprise FROM emploi ORDER BY NomEntreprise ";
	$result = mysqli_query($db_handle, $sql); 

	while ($data = mysqli_fetch_assoc($result)) {?>
		

  <table border="0"  width="30%">
    <tr>
    <td valign="top">
      <p>
        <?php
        echo  '<img src= "'.$data['LogoEntreprise'].'"  width="100" height="100" >' ;  ?>
      </p>
    </td>
      <td  >
        <p>
          <?php
          echo  ' ' .$data['Statut'] .'<br>';
          echo  ' ' .$data['NomEntreprise'] .'<br>';
          echo  ' ' .$data['LieuEntreprise'] .'<br>'.'<br>'; ?>
        </p>
      </td>
    </tr>
    
  </table>


        
    
</p>

<?php
	  
		 

	}//end while
}//end if
//si le BDD n'existe pas
else {
echo "Database not found";
}//end else
//fermer la connection mysqli_close($db_handle); 

?>
</div>
</body>
