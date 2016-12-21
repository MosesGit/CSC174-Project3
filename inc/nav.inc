<!-- Navigation -->
<nav class="navbar">
	<ul>
		<li class="logo"><a href="./"><img src="images/mc.png" alt="MC"></a></li>
		<li><a 
			<?php if ($pageTitle == "Moses Chen") {?>
			class="current"
			<?php } ?>
			href="./">Resume</a></li>
		<li><div> | </div></li>
		<li><a 
			<?php if ($pageTitle == "Portfolio") {?>
			class="current"
			<?php } ?>
			href="portfolio.php">Portfolio</a></li>
		<li> | </li>
		<li><a 
			<?php if ($pageTitle == "Contact Form") {?>
			class="current"
			<?php } ?>
			href="contact.php">Contact Form</a></li>
	</ul>
</nav>