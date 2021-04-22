<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-56905077-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');

function menuAsso() {
	if(document.getElementById('boutPart').style.visibility == 'visible') {
		wenuPart();
	} 
	if(document.getElementById('boutAsso').style.visibility == 'visible') {
		wenuAsso();
	} 
	else {
		document.getElementById('boutAsso').style.visibility = 'visible';
		document.getElementById('fondGris').style.visibility = 'visible'
		document.getElementById('txtAsso').style.letterSpacing = '12px';
		document.getElementById('txtAsso').innerHTML = 'L\'association&nbsp;';
		document.getElementById('txtPart').innerHTML = 'Part';
		document.getElementById('txtCont').innerHTML = 'Cont'
	}
}

function menuPart() {
	if(document.getElementById('boutAsso').style.visibility == 'visible') {
		wenuAsso();
	}
	if(document.getElementById('boutPart').style.visibility == 'visible') {
		wenuPart();
	} 	
	else {
		document.getElementById('boutPart').style.visibility = 'visible';
		document.getElementById('fondGris').style.visibility = 'visible'
		document.getElementById('txtPart').style.letterSpacing = '12px';
		document.getElementById('txtAsso').innerHTML = 'Asso';
		document.getElementById('txtCont').innerHTML = 'Cont'
	}
}

function wenuAsso() {
	document.getElementById('boutAsso').style.visibility = 'hidden';
	document.getElementById('fondGris').style.visibility = 'hidden'
	document.getElementById('txtAsso').style.letterSpacing = '1px';
	document.getElementById('txtAsso').innerHTML = 'L\'asso&nbsp;';
	document.getElementById('txtPart').innerHTML = 'Partenaires&nbsp';
	document.getElementById('txtCont').innerHTML = 'Contact&nbsp'
}

function wenuPart() {
	document.getElementById('boutPart').style.visibility = 'hidden';
	document.getElementById('fondGris').style.visibility = 'hidden'
	document.getElementById('txtPart').style.letterSpacing = '1px';
	document.getElementById('txtAsso').innerHTML = 'L\'asso&nbsp;';
	document.getElementById('txtCont').innerHTML = 'Contact&nbsp'
}

function wenU() {
	if(document.getElementById('boutAsso').style.visibility == 'visible') {
		wenuAsso();
	}
	if(document.getElementById('boutPart').style.visibility == 'visible') {
		wenuPart();
	} 
}
</script> ?>

<div class="menu">
<?php
$detect = new Mobile_Detect();
if ($detect->isMobile()) { ?>
		
	<table style="border-collapse: collapse;"><TR>
		<TD style="padding-left: 15px; padding-top: 10px;">
			<a href="http://pain-perdu.vivrc.fr/index.php"><img src="http://pain-perdu.vivrc.fr/images/logo_accueil.gif" height="100px"></a></TD>
		<TD><table style="padding-top:15px;"><TR>
			<TD><span class="title" id="txtAsso" onClick="menuAsso()">L'asso&nbsp;</span></TD>
			<TD><span class="title" id="txtPart" onClick="menuPart()">Partenaires&nbsp;</span></TD>
			<TD><span class="title"><a id="txtCont" href="http://pain-perdu.vivrc.fr/contact.php">Contact&nbsp;</a></span></TD>
		</TR></table></TD>
	</TR></table>
	</div>

	<div class="boutAsso" id="boutAsso" style="visibility: hidden;">
		<div class="sousTitre"><a href="http://pain-perdu.vivrc.fr/association/qui-sommes-nous.php">Qui sommes-nous ?</a></div>
		<div class="sousTitre"><a href="http://pain-perdu.vivrc.fr/association/presse.php">Presse</a></div>
		<div class="sousTitre"><a href="http://pain-perdu.vivrc.fr/association/membres.php">Membres</a></div>
	</div>
		
	<div class="boutPart" id="boutPart" style="visibility: hidden;">
		<div class="sousTitre"><a href="http://pain-perdu.vivrc.fr/partenaires/boulangeries.php">Boulangeries</a></div>
		<div class="sousTitre"><a href="http://pain-perdu.vivrc.fr/partenaires/redistributeurs.php">Redistributeurs</a></div>
	</div>
	
	<div class="fondGris" id="fondGris"  onClick="wenU()" style="visibility: hidden;"></div>
	
	
<?php } else {

	if (preg_match('/MSIE/i',$_SERVER['HTTP_USER_AGENT'])) {
		echo "<CENTER><BR>Ce site n'est pas optimisé pour Internet Explorer !
		<BR>Nous vous recommmandons l'utilisation de <a href='https://www.mozilla.org/fr/firefox/new/'>Mozilla Firefox</a> ou <a href='https://www.google.com/chrome/browser/desktop/index.html'>Google Chrome</a>.<BR><BR></CENTER>";
		echo "<div style='margin-top: 30px; height: 1000px; z-align: 1; background-color: #ffffff;'></div>";
	} else {
	?>
	
	<table style="border-collapse: collapse;"><TR>
		<TD><a href="<?php if ($pageActuelle!=0) { echo 'http://pain-perdu.vivrc.fr/index.php' ; }?>"><img src="http://pain-perdu.vivrc.fr/images/logo.gif" height="60px"></a></TD>
		<TD style="padding-left: 15px;">
			<a href="<?php if ($pageActuelle!=0) { echo 'http://pain-perdu.vivrc.fr/index.php' ; }?>"><img src="http://pain-perdu.vivrc.fr/images/logo_accueil.gif" height="40px"></a></TD>
		<TD><span class="title">L'association</span></TD>
		<TD><span class="item-grp">
			<span class="item<?php if ($pageActuelle==11) { echo '-act">'; } else { echo '"><a href="http://pain-perdu.vivrc.fr/association/qui-sommes-nous.php">'; } ?>Qui sommes-nous ?</a></span>
			<span class="item<?php if ($pageActuelle==12) { echo '-act">'; } else { echo '"><a href="http://pain-perdu.vivrc.fr/association/presse.php">'; } ?>Presse</a></span>
			<span class="item<?php if ($pageActuelle==13) { echo '-act">'; } else { echo '"><a href="http://pain-perdu.vivrc.fr/association/membres.php">'; } ?>Membres</a></span>
		</span></TD>
		<TD><span class="title">Nos partenaires</span></TD>
		<TD><span class="item-grp">
			<span class="item<?php if ($pageActuelle==21) { echo '-act">'; } else { echo '"><a href="http://pain-perdu.vivrc.fr/partenaires/boulangeries.php">'; } ?>Boulangeries</a></span>
			<span class="item<?php if ($pageActuelle==22) { echo '-act">'; } else { echo '"><a href="http://pain-perdu.vivrc.fr/partenaires/redistributeurs.php">'; } ?>Redistributeurs</a></span>
		</span></TD>
		<TD><span class="title"><a href="http://pain-perdu.vivrc.fr/contact.php">Contact</a></span></TD>
	</TR></table>
	</div>

	<div class="fb_link-top">
	<a href="http://www.facebook.com/PainPerdu.asso" target="new"><img height="25px" width="25px" src="http://pain-perdu.vivrc.fr/images/fb.png" title="Notre page Facebook"></a>
	</div>

	<BR>

	<?php }
}	?>
