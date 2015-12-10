<?php

session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Titre</title>
        <h1>Récapitulatif des articles commandés</h1>
    </head>

    <body>
    <?php
    try
{
    $bdd = new PDO('mysql:host=localhost;dbname=baselafaune1;charset=utf8', 'lafaune', 'secret');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if (isset($_SESSION["reference"]))
{
$j = 0;
$i = count($_SESSION["reference"]);


   ?>        <table align="center" border="4">
            <tr>
                <th>Référence</th>
                <th>Désignation</th>
                <th>Prix unitaire</th>
                <th>Quantité</th>
                <th>Montant</th>
            </tr> <?php





while ($j < $i) 
{
	?>
	<tr>
		<td><?php echo $_SESSION["reference"][$j]; ?></td>
		<td>
			<?php
                $reponse = $bdd->prepare('SELECT * FROM produit WHERE pdt_ref = ? ');
                $reponse->execute(array($_SESSION["reference"][$j] ));
                while ($donnees = $reponse->fetch())
                {
                    echo $donnees['pdt_designation']; 
                }
                $reponse->closeCursor();
            ?>
		</td>
		<td>
			<?php
                $reponse = $bdd->prepare('SELECT * FROM produit WHERE pdt_ref = ? ');
                $reponse->execute(array($_SESSION["reference"][$j] ));
                while ($donnees = $reponse->fetch())
                {
                    echo $donnees['pdt_prix']. '€ ';
                    $prix = $donnees['pdt_prix'];
                }
                $reponse->closeCursor();
            ?>
		</td>
		<td><?php echo $_SESSION["quantite"][$j]; ?></td>
		<td>
			<?php 

				$montant = $prix * $_SESSION["quantite"][$j];
				echo $montant. '€';

			?> 
		</td>
	<tr/>
	<?php
	$j = $j+1;
}
?>
<table/>
<?php

?>

<br/>
<form method="post" action="envoyer.php" >
   <p>
       <label for="code_client">Code client</label> : <input type="text" name="code_client" id="code_client" />          
       <label for="password">Mot de passe</label> : <input type="password" name="password" id="password" /><br/><br/>
       <input type="submit" name ="action" value="Envoyer la commande" />
   </p>
</form>
    </body>
</html>

<?php
}

else
    echo "aucun article commandé";
?>