<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr"> <!--Ouverture de la page-->
<head> <!--Ouverture de l'en-tête-->

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!--Blabla-->
	<META NAME="robots" CONTENT="index"> <!--Google Robots-->
	<title>Membres - Association Pain Perdu</title> <!--Titre de la page-->
	<link rel="shortcut icon" href="../images/favicon.ico"> <!--Favicon-->
	<?php include("../Mobile-Detect/Mobile_Detect.php");
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) {
		echo "<link rel='stylesheet' href='../stylesMobile.css' />"; // Fichier CSS Mobile
	} else {
		echo "<link rel='stylesheet' href='../styles.css' />"; // Fichier CSS Fixe
	}
	$pageActuelle=13 ; ?>

</head><body> <!--Passage au corps du texte-->

	<?php include "../menu.php" ; //inclusion du menu ?>

<!--	<iframe src="https://mapsengine.google.com/map/embed?mid=zDe1YUHGFtk4.keZiEoOi6huA" width="100%" height="90%"></iframe> -->

<div class="corps">

<h1>Membres</h1>

<ul>
<p><li><u>Gestion :</u>
	<ul>
		<p><li><b>Candice</b>, Pr&eacute;sidente <i>(en L1 &agrave; Paris)</i></li></p>
		<p><li><b>Lo&iuml;c</b>, Tr&eacute;sorier <i>(en Terminale au Lyc&eacute;e Lakanal, Sceaux)</i> (webmaster)</li></p>
		<p><li><b>Pauline</b>, Responsable des partenariats <i>()</i></li></p>
	</ul></p>
<p><li><u>R&eacute;seau Bourg-la-Reine/L'Ha&yuml;-les-Roses/Arcueil :</u>
	<ul>
		<p><li><b>Clara</b>, Secr&eacute;taire <i>(en L1 &agrave; Sceaux)</i></li></p>
		<p><li><b>Mohammed</b>, Membre <i>(en Quatri&egrave;me &agrave; l'&eacute;tablissement Notre-Dame, Bourg-la-Reine)</i></li></p>
		<p><li><b>Sol&egrave;ne</b>, Membre <i>()</i></li></p>
	</ul></p>
<p><li><u>R&eacute;seau Orsay (en cr&eacute;ation) :</u>
	<ul>
		<p><li><b>Yseult</b>, Membre <i>()</i></li></p>
	</ul></p>
<BR>
<p><li>Anciennement membres : Julien, Florent et Pierre</li></p>
<p><li>Int&eacute;ress&eacute;(e) ?&nbsp;&nbsp;<i><a class="lien" href="../contact.php">Nous contacter</a></i></li></p>
</ul>

<?php include "../footer.php" ; //inclusion du footer ?>

</div>
</body>
</html>
