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
						<?php
							the_content();
							?>
					<?php
					}
					?>

					</div>
				</div>
			</div>
		</section>

</main>

<?php
get_footer();
?>