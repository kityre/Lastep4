<div id='secondElement'>	
	<center>
			<div class="TitreBlanc">CONTACTEZ-NOUS</div>
			<div class="texteBlanc texteReference">Si vous souhaitez nous contacter, pour solliciter nos services ou pour avoir un renseignement, veuillez remplir ce formulaire. Nous étudierons avec soins vos demandes et nos spécialistes répondrons dans les plus bref délais afin de vous satisfaire au mieux.</div>
			<a href="#contact"><img class="flecheBas" src='css/images/fleche.png'></a>
	</center>
<div id='contact'>
		<div class="TitreNoir"> CONCTATEZ-NOUS</div>
	<div id="contenueContact">
		<form method="post" action="index.php?uc=contact">
			<div class="champ">

		       	<input class='nom' placeholder="Nom" type="text" name="nom" ><br>

		       	<input class='email'  placeholder="Adresse Email" type="email" name="email" required><br>

		        <input class='objet' placeholder="Objet" type="text" name="titre" required><br>

		        <textarea class='message' placeholder="Message" type="text" name="message" required></textarea><br>
		    </div>
	        <input type="submit" class="envoie" value="Envoyer Message">
	    </form>
	    <?php
	    if (isset($_POST['message'])) {
	//ini_set("SMTP","smtp.orange.fr");
	//ini_set("SMTP","smtp.free.fr");
	ini_set("sendmail_from","lastep4.com@gmail.com");
	        $position_arobase = strpos($_POST['email'], '@');
	        if ($position_arobase === false){
	            echo '<p>Votre email doit comporter un arobase.</p>';
	        }
	        else {

				$to = "lastep4.com@gmail.com";
			    $subject = $_POST['titre'];
			    $message =  $_POST['message'];
				$headers = 'From: '. $_POST['email'] . "\r\n" .
				     'Reply-To:'.$_POST['email'].' ' . "\r\n" .
				     'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, $message, $headers)
	        }
	    }
	    ?>
	</div>
</div>