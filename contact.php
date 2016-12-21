<?php
	$pageTitle = "Contact Form";
	include "inc/top.inc";
?>

		<section id="contactform">
			<div class="container">
				<h1>Contact Form</h1>

				<div class="content">
					<form class="pure-form pure-form-aligned" method="POST" action="db-write.php" onsubmit="return validate()" name="form1" id="form1">
						<fieldset>
							<div class="pure-control-group">
								<label for="name">Name: </label>
								<input id="name" name="name" type="text" placeholder="Name">
							</div>

							<div class="pure-control-group">
								<label for="email">Email Address: </label>
								<input id="email" name="email" type="email" placeholder="Email Address">
							</div>

							<div class="pure-control-group">
								<label for="phone">Phone Number: </label>
								<input id="phone" name="phone" type="tel" placeholder="Phone Number">
							</div>

							<div class="pure-control-group">
								<label for="message">Message: </label>
								<textarea id="message" name="message" placeholder="Enter message"></textarea>
							</div>

							<div class="pure-controls">
								<button type="submit" class="pure-button pure-button-primary" form="form1">Submit</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</section>

		<script type="text/javascript">
		function validate() {
			if(document.form1.name.value == "") {
				alert("Please provide your name!");
				document.form1.name.focus();
				return false;
			}

			if(document.form1.email.value == "") {
				alert("Please provide your email!");
				document.form1.email.focus();
				return false;
			}

			validateEmail();

			if(document.form1.phone.value == "") {
				alert("Please provide your phone number!");
				document.form1.phone.focus();
				return false;
			}

			if(document.form1.message.value == "") {
				alert("Please provide a message!");
				document.form1.message.focus();
				return false;
			}

			return true;
		}
		</script>
		<script type="text/javascript">
		function validateEmail() {
			var emailID = document.form1.email.value;
			atpos = emailID.indexOf("@");
			dotpos = emailID.lastIndexOf(".");

			if (atpos < 1 || ( dotpos - atpos < 2 )) {
				alert("Please enter a valid email.")
				document.form1.email.focus();
				return false;
			}
			return true;
		}
		</script>
	</body>
</html>