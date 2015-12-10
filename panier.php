<?php
session_start();

if (!isset($_SESSION["reference"]))
{
    $_SESSION["reference"]=array();
    $_SESSION["quantite"]=array();
}

$trouver = 0;
$j = 0;

if (isset($_GET["action"]) AND isset($_GET["refPdt"]) AND isset($_GET["quantite"]))
{
	$i = count($_SESSION["reference"]);
	while ($j < $i) 
	{
		if (strcmp($_SESSION["reference"][$j], $_GET["refPdt"]) == 0)
		{
			$_SESSION["quantite"][$j] = $_SESSION["quantite"][$j] + $_GET["quantite"];
			$trouver = 1;
		}
	$j = $j +1;
	}
	if ($trouver == 0)
	{
		$_SESSION["reference"][$i] = $_GET["refPdt"];
		$_SESSION["quantite"][$i] = $_GET["quantite"];
	}



$j = 0;

while ($j < $i+1) 
{
	echo "reference: ". $_SESSION["reference"][$j];
	echo "  quantite: ".$_SESSION["quantite"][$j];
	echo "<br />";
	$j = $j+1;
}
	header("Location: accueil.php");
}

if (isset($_GET["action"]) AND $_GET["action"] == "Vider le panier")
{
	echo "panier vidé";
	session_destroy();
}
?>
