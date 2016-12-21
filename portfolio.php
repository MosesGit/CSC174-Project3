<?php
	$pageTitle = "Portfolio";
	include "inc/top.inc";
?>

		<section id="portfolio">
			<div>
				<h1>Portfolio</h1>

				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/wordpress.png" alt="WordPress Site" />
							<p class="flex-caption"><a class="flexlink" href="http://www.urcsc174.org/mchen/lab11/wordpress/">WordPress</a> A WordPress site I created for a lab.</p>
						</li>
						<li>
							<img src="images/project.png" alt="CSC170 Project 3" />
							<p class="flex-caption"><a class="flexlink" href="http://www.urcsc170.org/examples/mchen/project3/">Project</a> My project 3 site for CSC 170.</p>
						</li>
						<li>
							<img src="images/design.png" alt="Design Lab" />
							<p class="flex-caption"><a class="flexlink" href="http://urcsc170.org/mchen/lab09/">Design</a> A site I designed for a lab.</p>
						</li>
						<li>
							<img src="images/pokemon.png" alt="Pokemon Team Project" />
							<p class="flex-caption"><a class="flexlink" href="http://urcsc170.org/mchen/project1/">Team Project</a> Pokemon site our team, that I was leader of, created.</p>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<script type="text/javascript">
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