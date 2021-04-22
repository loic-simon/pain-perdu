<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr"> <!--Ouverture de la page-->
<head> <!--Ouverture de l'en-tête-->

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!--Blabla-->
	<META NAME="robots" CONTENT="index"> <!--Google Robots-->
	<title>Redistributeurs - Association Pain Perdu</title> <!--Titre de la page-->
	<link rel="shortcut icon" href="../images/favicon.ico"> <!--Favicon-->
	<?php include("../Mobile-Detect/Mobile_Detect.php");
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) {
		echo "<link rel='stylesheet' href='../stylesMobile.css' />"; // Fichier CSS Mobile
	} else {
		echo "<link rel='stylesheet' href='../styles.css' />"; // Fichier CSS Fixe
	}
	$pageActuelle=22 ; ?>

</head><body> <!--Passage au corps du texte-->

	<?php include "../menu.php" ; //inclusion du menu ?>

<!--	<iframe src="https://mapsengine.google.com/map/embed?mid=zDe1YUHGFtk4.keZiEoOi6huA" width="100%" height="90%"></iframe> -->

<div class="corps">

<h1>Redistributeurs</h1>
<BR>

<iframe src="https://mapsengine.google.com/map/embed?mid=zDe1YUHGFtk4.keEWynEv75l8" width="100%" height="90%"></iframe>

<ul>
<p><li>Relais alimentaire de Bourg-la-Reine</li></p>
<p><li>&Eacute;picerie solidaire Gafib <i>(Fontenay-aux-Roses)</i></li></p>
<p><li>Int&eacute;ress&eacute;(e) ?&nbsp;&nbsp;<i><a class="lien" href="../contact.php">Nous contacter</a></i></li></p>
</ul>

<?php include "../footer.php" ; //inclusion du footer ?>

</div>
</body>
</html>
