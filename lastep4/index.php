<html>
	<head>
		<title>LASTEP4</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<link type="text/css" rel="stylesheet" href="css/stylesLT.css" >
		<link rel="icon" href="logo.ico" type="image/gif" sizes="16x16">
	</head>
	<body>
		<div id="lastep">
			<center><img id="fondEntete" src='css/images/bg_header.png'></center>
			<div id='entete'>
				<a href="index.php?uc=acceuil" class='logo'>
					<span>
						<img id='logo' src='logo.png' alt='LASTEP4' title='LASTEP4'>
						<text>LASTEP4</text>
					</span>
				</a>
				<span id='sommaire'>
					<a href='index.php?uc=acceuil' class='choixSommaire' >
						A PROPOS
					</a>
					<a href='index.php?uc=references' class='choixSommaire' >
						REFERENCES
					</a>
					<a href='index.php?uc=services' class='choixSommaire' >
						NOS SERVICES
					</a>
					<a href='index.php?uc=contact'class='choixSommaire' >
						CONTACT
					</a>
				</span>
			</div>

<?php
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'acceuil';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'acceuil':{
		include("vues/v_acceuil.php");break;
	}
	case 'references' :{
		include("vues/v_references.php");break;
	}
	case 'services' :{
		include("vues/v_services.php");break;
	}
	case 'contact' :{
		include("vues/v_contact.php");break; 
	}
}
?> 
			<div id='pied'>
				<center>
					<div class="reseauxSociaux">
						<a href='https://www.linkedin.com/'>
							<img src='css/images/reseauxSociaux/link.png' title="Linkedin.com">
						</a>
						<a href='https://www.facebook.com'>
							<img src='css/images/reseauxSociaux/fb.png' title="Facebook.com">
						</a>
						<a href='https://www.instagram.com'>
							<img src='css/images/reseauxSociaux/isnt.png' title="Instagram.com">
						</a>
						</div>
					<div>
						<img src='logo.png' class='logo' alt='LASTEP4' title='LASTEP4'>
						<div class="valeur">
							Conseil | Identité visuelle | Internet
						</div>
						<div class='adresse'>
							1 Rue de Chablis, 93000 Bobigny <br>
							Tél : +33 (0)1 48 38 76 76<br>
							Email : lastep4.com@gmail.com<br>
						</div>
					</div>
				</center>
			</div>
		</div>
	</body>
</html>
