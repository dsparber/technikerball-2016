<?php
	$sender = "office@technikerball.at";
	$empfaenger = "cstifter@me.com";

	$vorname = $_POST['firstname'];
	$nachname = $_POST['lastname'];
	$email = $_POST['email'];
	$strasse = $_POST['street'];
	$plz = $_POST['zip'];
	$ort = $_POST['city'];
	$anzE = $_POST['anzE'];
	$anzS = $_POST['anzS'];

	$betreff = "VVK Bestellung Online ".$vorname." ".$nachname;

	$email_message = "Folgende Bestellung ist eingangen:\n\n"; 
	$email_message .= "Vorname: ".$vorname."\n";
	$email_message .= "Nachname: ".$nachname."\n";
	$email_message .= "Email: ".$email."\n\n"; 

	$email_message .= "Adresse:\n";
	$email_message .= $strasse."\n"; 
	$email_message .= $plz." ".$ort."\n\n";

	$email_message .= "Bestellt Karten (Erwachsene): ".$anzE."\n";
	$email_message .= "Bestellt Karten (Schüler): ".$anzS."\n"; 

	$headers = 'From: '.$sender."\r\n".'Reply-To: '.$email."\r\n";

	mail($empfaenger, $betreff, $email_message, $headers);
?>

<html>

<head>
	<title>Technikerball 2016</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
	</noscript>
</head>

<body class="homepage">

	<!-- Header -->
	<div id="header">

		<div id="nav-wrapper">
			<nav id="nav">
				<ul>
					<li><a href="index.html">Startseite</a></li>
					<li class="active"><a href="vvk.html">Kartenvorverkauf</a></li>
					<li><a href="reservierung.html">Tischreservierung</a></li>
					<li><a href="kontakt.html">Kontakt</a></li>
				</ul>
			</nav>
		</div>

		<div class="container">

			<!-- Logo -->
			<div id="logo">
				<h1>Technikerball</h1>
				<h2>Kartenvorverkauf</h2>
			</div>
		</div>
	</div>

	<div id="featured">
		<div class="container">
			
			<h3 id="bestellen">Karten erfolgreich bestellen</h3>
			<p>Ihre Karten wurden bestellt und werden Ihnen in Kürze zugesendet.</p>
			
			
		</div>
	</div>

	<!-- Copyright -->
	<div id="copyright">
		<div class="container">
			<p>Kontakt: <a href="mailto:office@technikerball.at">office@technikerball.at</a></p>
		</div>
	</div>

</body>

</html>