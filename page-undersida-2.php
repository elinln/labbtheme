<?php
get_header();
?>


<main>
	<?php
	while (have_posts()) {
		the_post();
	?>
		<section>
			<div class="container">
				<div class="row">
					<aside id="secondary" class="col-xs-12 col-md-3">
						<ul class="side-menu">
							<li>
							<?php
							dynamic_sidebar('sidebar'); // Widget för sidebar 
							?>
							</li>
						</ul>
					</aside>
					<div id="primary" class="col-xs-12 col-md-9">
						<h1> <?php
								the_title();
								?></h1>
						<p> <?php
							the_content();
							?></p>

					</div>

				</div>
			</div>
		</section>
	<?php
	}
	?>
</main>

<?php
get_footer();
?>