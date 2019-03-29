<?php 
include_once('header.php');
?>
<section id="portfolio-page">
	<h2 class="center">Our Work</h2>
	<hr>
	<h3 class="center blue darken-1">Round Me</h3>
	<a onclick="$('#modal2').modal('open');"><img src="https://dummyimage.com/250x250/04de34/fff.jpg&text=Betty's+Bay+Thumbnail" alt=""></a>
	<div id="modal2" class="modal">
		<div class="modal-header">
			<a href="#!" class=" right modal-action modal-close waves-effect waves-green btn-flat"> <i class="material-icons">close</i></a>
		</div>
		<div class="modal-content">
			<iframe width='864' height='486' src='https://roundme.com/embed/361898/1230695' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>


	<h3 class=" center blue darken-1">Cupix</h3>
	<a onclick="$('#modal3').modal('open');"><img src="https://dummyimage.com/250x250/04de34/fff.jpg&text=Betty's+Bay+Thumbnail" alt=""></a>
	<div id="modal3" class="modal">
		<div class="modal-header">
			<a href="#!" class=" right modal-action modal-close waves-effect waves-green btn-flat"> <i class="material-icons">close</i></a>
		</div>
		<div class="modal-content">
			<iframe style="max-width: 100%;" width="640" height="480" frameborder="0" allowfullscreen src="https://players.cupix.com/embed.html?key=R4iFd63W"></iframe>

		</div>
	</div>
</section>
<?php
include_once('footer.php');
?>
