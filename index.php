<?php
	$pageTitle = "Moses Chen";
	include "inc/top.inc";
?>

		<!-- Top Section -->
		<section id="intro">
			<div class="container">
				<h1>Moses Chen</h1>

				<div class="content">
					<p>My name is Moses Chen. I am a student at the University of Rochester majoring in computer science.</p>
					
					<div class="resumelink">
						<a class="resumelink2" href="#skills">
							<div>
								Resume
								<br>
								↓
							</div>
						</a>
					</div>
				</div><!-- .content -->
			</div><!-- .container -->
		</section>

		<!-- Second Section -->
		<section id="skills">
			<div class="container">
				<h2>Skills</h2>

				<div class="content">
					<div class="languages">
						<ul class="list">
							<li><h3>Programming Languages</h3></li>
							<li>Java</li>
							<li>C#</li>
							<li>Python</li>
							<li>HTML</li>
							<li>CSS</li>
							<li>JavaScript</li>
							<li>PHP</li>
							<li>SQL</li>
							<li>VBA</li>
							<li>C</li>
							<li>C++</li>
							<li>Matlab</li>
						</ul>
					</div><div class="software">
						<ul class="list">
							<li><h3>Software</h3></li>
							<li>Visual Studio</li>
							<li>TFS</li>
							<li>Eclipse</li>
							<li>Android Studio</li>
							<li>GitHub</li>
							<li>SSMS</li>
							<li>Crystal Reports</li>
							<li>Photoshop</li>
						</ul>
					</div>

					<div>I also have experience with Windows, Linux, and virtualization software.</div>
				</div><!-- .content -->
			</div><!-- .container -->
		</section>

		<!-- Third Section -->
		<section id="education">
			<div class="container">
				<h2>Education</h2>

				<div class="content">
					<div class="school">
						<img src="images/rochester.png" alt="University of Rochester logo"><br>
						University of Rochester<br>
						Hajim School of Engineering &amp; Applied Sciences<br>
						Bachelor of Arts in Computer Science<br>
						Class of 2017
					</div>
				</div><!-- .content -->
			</div><!-- .container -->
		</section>

		<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
		<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script>
		// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
		//          https://css-tricks.com/snippets/jquery/smooth-scrolling
		$(function() {
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 250);
					return false;
					}
				}
			});
		});
		</script>
	</body>
</html>