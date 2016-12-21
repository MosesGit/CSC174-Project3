<?php
	$pageTitle = "Portfolio";
	include "inc/top.inc";
?>

		<section>
			<div class="portfolio">
				<h1>Portfolio</h1>

				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/wordpress.png" />
							<p class="flex-caption"><a class="flexlink" href="http://www.urcsc174.org/mchen/lab11/wordpress/">WordPress Site</a> A WordPress site I created for a lab.</p>
						</li>
						<li>
							<img src="images/170project3.png" />
							<p class="flex-caption"><a class="flexlink" href="http://www.urcsc170.org/examples/mchen/project3/">CSC 170 Project 3</a> My project 3 site for CSC 170.</p>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function($){
				$(window).load(function() {
					$('.flexslider').flexslider({
						animation: "fade"
					});
				});
			});
		</script>
	</body>
</html>