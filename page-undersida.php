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
					<div id="primary" class="col-xs-12 col-md-9">
						<h1> <?php
								the_title();
								?></h1>
						<p> <?php
							the_content();
							the_post_thumbnail_url();
							?></p>

					</div>
					<aside id="secondary" class="col-xs-12 col-md-3">
						<ul class="side-menu">
							<?php
							dynamic_sidebar('sidebar'); // Widget för sidebar 
							?>
						</ul>
					</aside>
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