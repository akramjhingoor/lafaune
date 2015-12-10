<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=baselafaune1;charset=utf8', 'lafaune', 'secret');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Accueil</title>
        <link rel="stylesheet" href="style.css" />
        
    </head>
    <body>

        <header>
            <div id="bloc_accueil"><h1>Sté LaFaune</h1>
            <h2><a href="accueil.php">Accueil</a></h2>
            </div>
            <?php include("menu.php") ; ?>
        </header>

        <section>
            <h1>Envoi d'un mail</h1>
            <p>Contactez-nous à travers ce module pour tout renseignement</p>
            <form action="#" method="POST">
            	<label>Nom :<input type="text"></label>
            </form>
        </section>

        <footer>
            <div id = "copyright">
                <p align="center"> Copyright - Akram - Kevin</p>
            </div>
        </footer>
    </body>
</html>