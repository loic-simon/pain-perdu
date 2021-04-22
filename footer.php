<BR>

<?php
	$detect = new Mobile_Detect();
	if ($detect->isMobile()) { ?>
		
		<CENTER>
			<!--<div style="background-color:#fff;" class="fb-like-box" data-href="https://www.facebook.com/PainPerdu.asso" data-width="400px" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="false"></div>-->
			<img src="http://pain-perdu.vivrc.fr/images/logo.gif" title="Logo de Pain Perdu" width="70%">
		</CENTER>
	
	
	<?php } else { ?>
	
		<CENTER>
			<table>
				<tr>
					<td style="padding-right: 50px;">
						<img src="http://pain-perdu.vivrc.fr/images/logo.gif" title="Logo de Pain Perdu" width="500px">
					</td>
					<td>
						<div style="background-color:#fff;" class="fb-like-box" data-href="https://www.facebook.com/PainPerdu.asso" data-width="auto" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="false"></div>
					</td>
				</tr>
			</table>
		</CENTER>
<?php } ?>