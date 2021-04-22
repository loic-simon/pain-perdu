<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr"> <!--Ouverture de la page-->
<head> <!--Ouverture de l'en-tête-->

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!--Blabla-->
	<META NAME="robots" CONTENT="index"> <!--Google Robots-->
	<title>Association Pain Perdu | Site officiel</title> <!--Titre de la page-->
	<link rel="shortcut icon" href="./images/favicon.ico"> <!--Favicon-->
	<?php include("Mobile-Detect/Mobile_Detect.php");
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) {
		echo "<link rel='stylesheet' href='./stylesMobile.css' />"; // Fichier CSS Mobile
	} else {
		echo "<link rel='stylesheet' href='./styles.css' />"; // Fichier CSS Fixe
	}
	$pageActuelle=0 ; ?>

</head><body> <!--Passage au corps du texte-->

<?php include "./menu.php" ; //inclusion du menu ?>

<div class="corps">

<h1>Association Pain Perdu</h1>

<p>Bienvenue sur le site de l'association Pain Perdu !<BR></p>
<h3>En r&#233;sum&#233;</h3>
<p>Pain Perdu est une <a class="lien"  href="http://www.juniorassociation.org" title="Site web du RNJA">Junior Association</a> ayant pour but de r&#233;cup&#233;rer le surplus de
pain de <a class="lien"  href="./partenaires/boulangeries.php" title="Rubrique Partenaires > Boulangeries">nos boulangeries partenaires</a> pour le donner &#224;
des <a class="lien"  href="./partenaires/redistributeurs.php" title="Rubrique Partenaires > Redistributeurs">organismes</a> d'aide
aux personnes en difficult&#233;. <i> <a class="lien"  href="./association/qui-sommes-nous.php" title="Rubrique Association > Qui sommes-nous ?">En savoir plus</a></i></p>
<p>Nous sommes pour l'instant sp&#233;cialis&#233;s dans le pain et les viennoiseries, m&#234;me si un &#233;largissement futur n'est pas impossible.
Pour toute question, n'h&#233;sitez-pas &#224; nous <a class="lien"  href="./contact.php" title="Rubrique Contact">contacter</a> !</p>

<?php include "footer.php" ; //inclusion du footer ?>

</div>

</body>
</html>
