<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr"> <!--Ouverture de la page-->
<head> <!--Ouverture de l'en-tête-->

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> <!--Blabla-->
	<META NAME="robots" CONTENT="index"> <!--Google Robots-->
	<title>Presse - Association Pain Perdu</title> <!--Titre de la page-->
	<link rel="shortcut icon" href="../images/favicon.ico"> <!--Favicon-->
	<?php include("../Mobile-Detect/Mobile_Detect.php");
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) {
		echo "<link rel='stylesheet' href='../stylesMobile.css' />"; // Fichier CSS Mobile
	} else {
		echo "<link rel='stylesheet' href='../styles.css' />"; // Fichier CSS Fixe
	}
	$pageActuelle=12 ; ?>
	
	<script>
		function showAlHay() {
			if(document.getElementById('alHay').innerHTML == '') {
				document.getElementById('alHay').innerHTML = '<img src="presse/aLHay.jpg" width="95%">';
				document.getElementById('boutAlHay').innerHTML = 'Scan de l\'article (masquer)';
			} else {
				document.getElementById('alHay').innerHTML = '';
				document.getElementById('boutAlHay').innerHTML = 'Scan de l\'article (afficher)';
			}
		}
		function showParisien94() {
			if(document.getElementById('parisien94').innerHTML == '') {
				document.getElementById('parisien94').innerHTML = '<img src="presse/parisien94.jpg" width="95%">';
				document.getElementById('boutParisien94').innerHTML = 'Scan de l\'article (masquer)';
			} else {
				document.getElementById('parisien94').innerHTML = '';
				document.getElementById('boutParisien94').innerHTML = 'Scan de l\'article (afficher)';
			}
		}
		function showPelerin() {
			if(document.getElementById('pelerin').innerHTML == '') {
				document.getElementById('pelerin').innerHTML = '<img src="presse/pelerin.jpg" width="95%">';
				document.getElementById('boutPelerin').innerHTML = 'Scan de l\'article (masquer)';
			} else {
				document.getElementById('pelerin').innerHTML = '';
				document.getElementById('boutPelerin').innerHTML = 'Scan de l\'article (afficher)';
			}
		}
		function showRND() {
			if(document.getElementById('playerRND').innerHTML == '') {
				document.getElementById('playerRND').innerHTML = '<audio controls autoplay><source src="presse/radio_notre_dame.mp3"><source src="presse/radio_notre_dame.ogg"></audio><BR>&nbsp;(<a class="lien" href="presse/radio_notre_dame.mp3">Pour t&eacute;l&eacute;charger le podcast, clic droit sur ce texte > Enrengistrer le lien / la cible (du lien) sous...</a>)';
				document.getElementById('boutRND').innerHTML = 'Podcast de l\'&eacute;mission (masquer le lecteur)';
			} else {
				document.getElementById('playerRND').innerHTML = '';
				document.getElementById('boutRND').innerHTML = 'Podcast de l\'&eacute;mission (&eacute;couter)';
			}
		}
		function showRCF() {
			if(document.getElementById('playerRCF').innerHTML == '') {
				document.getElementById('playerRCF').innerHTML = '<audio controls autoplay><source src="presse/radios_chretiennes_francophones.mp3"><source src="presse/radios_chretiennes_francophones.ogg"></audio><BR>&nbsp;(<a class="lien" href="presse/radios_chretiennes_francophones.mp3">Pour t&eacute;l&eacute;charger le podcast, clic droit sur ce texte > Enrengistrer le lien / la cible (du lien) sous...</a>)';
				document.getElementById('boutRCF').innerHTML = 'Podcast de l\'&eacute;mission (masquer le lecteur)';
			} else {
				document.getElementById('playerRCF').innerHTML = '';
				document.getElementById('boutRCF').innerHTML = 'Podcast de l\'&eacute;mission (&eacute;couter)';
			}
		}
		function showBLR() {
			if(document.getElementById('BLR').innerHTML == '') {
				document.getElementById('BLR').innerHTML = '<img src="presse/BLR.jpg" width="95%">';
				document.getElementById('boutBLR').innerHTML = 'Scan de l\'article (masquer)';
			} else {
				document.getElementById('BLR').innerHTML = '';
				document.getElementById('boutBLR').innerHTML = 'Scan de l\'article (afficher)';
			}
		}function showPhosphore() {
			if(document.getElementById('phosphore').innerHTML == '') {
				document.getElementById('phosphore').innerHTML = '<img src="presse/phosphore.jpg" width="95%">';
				document.getElementById('boutPhosphore').innerHTML = 'Scan de l\'article (masquer)';
			} else {
				document.getElementById('phosphore').innerHTML = '';
				document.getElementById('boutPhosphore').innerHTML = 'Scan de l\'article (afficher)';
			}
		}
		
	</script>
	
</head><body> <!--Passage au corps du texte-->

	<?php include "../menu.php" ; //inclusion du menu ?>

<div class="corps">

<h1>Presse</h1>

<ul>
<p><li><b>Article dans&nbsp;<i>&Agrave; l'Ha&yuml;</i></b>&nbsp;&nbsp;&nbsp;&nbsp;(journal municipal de l'Ha&yuml;-les-Roses) - <i>num&eacute;ro de d&eacute;cembre 2014</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://www.lhaylesroses.fr/article/archive/638">Site du journal</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<a target="newtab" class="lien"  href="http://www.lhaylesroses.fr/filemanager/download/1256">Num&eacute;ro (PDF)</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showAlHay()" id="boutAlHay" class="lien">Scan de l'article (afficher)</span>]</li></p>
<p id="alHay"></p>
<p><li><b>Article dans&nbsp;<i>Le Parisien (94)</i></b>&nbsp;&nbsp;&nbsp;&nbsp;- <i>num&eacute;ro du 17 d&eacute;cembre 2014</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://www.leparisien.fr/val-de-marne-94">Site du journal</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<a target="newtab" class="lien"  href="http://www.leparisien.fr/espace-premium/val-de-marne-94/grace-a-ces-ados-le-pain-n-est-plus-perdu-17-12-2014-4379721.php">Num&eacute;ro (Web)</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showParisien94()" id="boutParisien94" class="lien">Scan de l'article (afficher)</span>]</li></p>
<p id="parisien94"></p>
<p><li><b>Article dans&nbsp;<i>P&egrave;lerin</i></b>&nbsp;&nbsp;&nbsp;&nbsp;- <i>num&eacute;ro du 9 avril 2015</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://www.pelerin.com/">Site du journal</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<s>Num&eacute;ro</s>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showPelerin()" id="boutPelerin" class="lien">Scan de l'article (afficher)</span>]</li></p>
<p id="pelerin"></p>
<p><li><b>Interview dans <i>Rencontre</i></b>, &eacute;mission &agrave; <i>Radio Notre Dame</i>&nbsp;&nbsp;&nbsp;&nbsp;- <i>&eacute;mission du lundi 20 avril 2015</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://radionotredame.net/">Site de la station</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<a target="newtab" class="lien"  href="http://radionotredame.net/emission/rencontre/">Page de l'&eacute;mission</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showRND()" id="boutRND" class="lien">Podcast de l'&eacute;mission (&eacute;couter)</span>]</li></p>
<p id="playerRND" style="line-height: 200%;"></p>
<p><li><b>Interview t&eacute;l&eacute;phonique dans <i>La bonne info</i></b>, &eacute;mission &agrave; <i>RCF</i>&nbsp;&nbsp;&nbsp;&nbsp;- <i>&eacute;mission du mercredi 06 mai 2015</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://http://rcf.fr/">Site de la station</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<a target="newtab" class="lien"  href="http://rcf.fr/actualite/la-boulangere-des-coeurs/">Page de l'&eacute;mission</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showRCF()" id="boutRCF" class="lien">Podcast de l'&eacute;mission (&eacute;couter)</span>]</li></p>
<p id="playerRCF" style="line-height: 200%;"></p>
<p><li><b>Encart dans&nbsp;<i>Bourg-la-Reine magzine</i></b>&nbsp;&nbsp;&nbsp;&nbsp;(journal municipal de Bourg-la-Reine) - <i>num&eacute;ro d'octobre 2015</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://www.bourg-la-reine.fr/Publications/">Site du journal</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<a target="newtab" class="lien"  href="http://www.bourg-la-reine.fr/content/download/21530/278672/file/magazine%20octobre%202015%20pour%20le%20web.pdf">Num&eacute;ro (PDF)</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showBLR()" id="boutBLR" class="lien">Scan de l'article (afficher)</span>]</li></p>
<p id="BLR"></p>
<p><li><b>Article dans&nbsp;<i>Phosphore</i></b>&nbsp;&nbsp;&nbsp;&nbsp;- <i>num&eacute;ro de janvier 2016</i>
	<BR>&nbsp;&nbsp;&nbsp;&nbsp;[<a target="newtab" class="lien" href="http://www.phosphore.com/">Site du journal</a>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<s>Num&eacute;ro</s>]&nbsp;&nbsp;&nbsp;&nbsp;
		[<span onClick="showPhosphore()" id="boutPhosphore" class="lien">Scan de l'article (afficher)</span>]</li></p>
<p id="phosphore"></p>
<p><li>Journaliste ?&nbsp;&nbsp;<i><a class="lien" href="../contact.php">Nous contacter</a></i></li></p>
</ul>

<?php include "../footer.php" ; //inclusion du footer ?>

</div>
</body>
</html>