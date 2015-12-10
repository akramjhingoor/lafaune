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
        <h1>Inscription</h1>
<form action="#" method="post">
        
            <table align="center">
            
            <tr>
            
            <td><label for="login"><strong>Nom :</strong></label></td>
            <td><input type="text" name="login" id="login"/></td>
            
            </tr>
            
            
            <tr>
            
            <td><label for="adresse"><strong>Adresse :</strong></label></td>
            <td><input type="text" name="adresse" id="adresse"/></td>

            </tr>

            <tr>
            
            <td><label for="tel"><strong>Téléphone :</strong></label></td>
            <td><input type="text" name="tel" id="tel"/></td>

            </tr>

            <tr>
            
            <td><label for="email"><strong>Email :</strong></label></td>
            <td><input type="mail" name="email" id="email"/></td>

            </tr>

            <tr>
            
            <td><label for="pass"><strong>Mot de passe :</strong></label></td>
            <td><input type="password" name="pass" id="pass"/></td>
            
            </tr>

            </table>
            <br />
        
        <input type="submit" name="register" value="S'inscrire"/>
        
        </form>
        </section>

        <footer>
            <div id = "copyright">
                <p align="center"> Copyright - Akram - Kevin</p>
            </div>
        </footer>
    </body>
</html>

