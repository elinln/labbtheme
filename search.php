<?php 
get_header(); 
?>

<main>
<div class="container">
	<div class="row">
		<div id="primary" class="col-xs-12 col-md-9">
            <div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
							<h1>Sökresultat för: <?php 
							        the_search_query(); // Titel + visar vad man sökt på 
                                    ?></h1>
							<div class="searchform-wrap">
								<form id="searchform" class="searchform">
									<div>
                                    <?php 
							        dynamic_sidebar('searching'); // Widget för sökfält
                                    ?>
									</div>
								</form>
							</div>
			<?php 
				while(have_posts()) {
				the_post(); 
			?>
                <!-- Här nedanför är resultatet för sökningen -->
				<article>
					<img src="<?php the_post_thumbnail_url()?>"/>
					<h2 class="title">
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</h2>
					<ul class="meta">
						<li>
							<i class="fa fa-calendar"></i> <?= get_the_date();?>
						</li>
						<li>
							<i class="fa fa-user"></i> <?php the_author_posts_link();?>
						</li>
						<li>
							<i class="fa fa-tag"></i> <?php the_category(','.' '); ?>
						</li>
					</ul>
                    
					<?php 
                    the_excerpt();
                    ?>
			
				</article>

			<?php 
			}				
			?>
		</div>
	</div>
</div>
</main>

 
<?php
get_footer() 
 ?>