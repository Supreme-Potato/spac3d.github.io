<?php 
include_once('header.php');
?>
<section id="contact-page">
	<div class="container">
		<div class="row">
			<div class="offset-l1 col s10">
				<div class="card-panel">
					<h2 class="center-align">Contact Us</h2>

					<div class="row">
						<div class="offset-l2 col s8">
							<hr>
							<h5 class="grey-text">Should you have any questions, please do not hesitate to contact us :</h5>

							<div class="row">
								<form class="col s12" action="contact.php" method="post">
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

									<button class="btn waves-effect waves-light right" type="submit" name="action">Send
										<i class="material-icons right">send</i>
									</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
include_once('footer.php');
?>
