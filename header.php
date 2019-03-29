<!DOCTYPE html>
<html lang="en">

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>spac3d</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<meta name="description" content="">
	<link rel="manifest" href="site.webmanifest">
	<link rel="apple-touch-icon" href="icon.png">
	<!-- CSS  -->
	<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
	<nav id="main-nav-bg">
		<div class="row">
			<div class="col s12 ">
				<a href="index.html" class="brand-logo"><img src="misc/imgs/download.png"></a>
				<ul class="right">
					<li><a href="about_us.php">About</a></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<!--					<li><a href="pricelist.php">Pricing</a></li>-->
					<li><a href="faq.php">FAQ</a></li>
					<li><a onclick="$('#modal1').modal('open');" class="waves-effect waves-light btn btn-large light-green accent-4">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="modal1" class="modal">
		<div class="modal-header">
			<a href="#!" class=" right modal-action modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
		<div class="modal-content">
			<h2 class="center-align">Contact Us</h2>
			<hr>
			<h5 class="grey-text">Should you have any questions, please do not hesitate to contact us :</h5>
			<form id="contactform" class="col s12" action="contact.php" method="post">
				<div class="row">
					<div class="input-field col s6">
						<input id="icon_prefix" type="text" class="validate">
						<label for="icon_prefix" name="fname">Name</label>
					</div>
					<div class="input-field col s6">
						<input id="icon_prefix" type="text" class="validate" name="lname">
						<label for="icon_prefix">Surname</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<input id="icon_email" type="email" class="validate" name="email">
						<label for="icon_telephone">E-mail</label>
					</div>
					<div class="input-field col s6">
						<input id="icon_telephone" type="tel" class="validate" name="tel">
						<label for="icon_telephone">Telephone</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s6">
						<select name="subject">
							<option value="1" selected>Support</option>
							<option value="2">Question</option>
							<option value="3">Quote Request</option>
						</select>
						<label>Subject</label>
					</div>
				</div>
				<div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
					<label for="textarea1">Message</label>
				</div>

				<button href="#!" class="btn waves-effect waves-light right" type="submit" name="action">Send
					<i class="material-icons right">send</i>
				</button>
			</form>
		</div>
	</div>
