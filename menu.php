<?php
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=baselafaune1;charset=utf8', 'lafaune', 'secret');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
?>

<nav>
    <ul>
        <h2>Nos produits</h2>
        <?php
			$reponse = $bdd->query('SELECT * FROM categorie');

			while ($donnees = $reponse->fetch())
			{
			    ?>
			    <li><a href="listePdt.php?categ=<?php echo $donnees['cat_code']; ?>"><?php echo $donnees['cat_libelle']; ?></a></li>
			    <?php
			}

		$reponse->closeCursor();

		?>

    </ul> 

    <hr />
	<form action="panier.php" target="menu" method="get">
	<input type="submit" name="action" value="Vider le panier" />
	</form>

	<form action="commande.php" target="page" method="get">
	<p><input type="submit" name ="action" value="Commander" /></p>
	</form>

	<ul>
		<li><A HREF="mail.php">Envoyer un mail</A></li>
		<li><A HREF="inscription.php">Inscription</A></li>
	</ul>

</nav>
