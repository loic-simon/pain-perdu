<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr"> <!--Ouverture de la page-->
<head> <!--Ouverture de l'en-tête-->

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!--Blabla-->
	<META NAME="robots" CONTENT="index"> <!--Google Robots-->
	<title>Boulangeries - Association Pain Perdu</title> <!--Titre de la page-->
	<link rel="shortcut icon" href="../images/favicon.ico"> <!--Favicon-->
	<?php include("../Mobile-Detect/Mobile_Detect.php");
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) {
		echo "<link rel='stylesheet' href='../stylesMobile.css' />"; // Fichier CSS Mobile
	} else {
		echo "<link rel='stylesheet' href='../styles.css' />"; // Fichier CSS Fixe
	}
	$pageActuelle=21 ; ?>

</head><body> <!--Passage au corps du texte-->

	<?php include "../menu.php" ; //inclusion du menu ?>


<div class="corps">

<h1>Boulangeries</h1>
<BR>

<iframe src="https://mapsengine.google.com/map/embed?mid=zDe1YUHGFtk4.k2RqYVvsPMSo" width="100%" height="90%"></iframe>

<ul>
<li>Boulangerie du <b style="color:#7c3592">Petit Robinson</b><BR></li>
	<p class="boulAdresse"><i>94240 L'Ha&yuml;-les-Roses</i></p>
<li>Boulangerie de <b style="color:#62af44">l'Arbre &agrave; Pains</b></li>
	<p class="boulAdresse"><i>2 avenue Carnot<BR>
		94230 Cachan</i></p>
<li>Boulangerie de <b style="color:#db4436">l'&Eacute;pi d'Or</b></li>
	<p class="boulAdresse"><i>94110 Arcueil</i></p>
<li>Boulangerie de l'<b style="color:#4186f0">Avenue</b></li>
	<p class="boulAdresse"><i>45 avenue du G&eacute;n&eacute;ral Leclerc<BR>
		92340 Bourg-la-Reine</i></p>
<li>Boulanger ?&nbsp;&nbsp;<i><a class="lien" href="../contact.php">Nous contacter</a></i></li>
</ul>

<?php include "../footer.php" ; //inclusion du footer ?>

</div>
</body>
</html>
