<?php
/*
Template Name: Home page template
*/
get_header(); ?>
	<article>
		<section class="slider">
			<div class="homeSlider">
				<div class="container">
					<div class="row1">
						<h1><?php echo get_field( 'headline-text' ); ?></h1>

						<p><?php echo get_field( 'headline-sub-text' ); ?></p>
					</div>
					<div class="row2">
						<div class="col">
							<?php echo get_field( 'youtube_video_player' ); ?>
						</div>
						<div class="col">
							<div class="box">
								<p><?php echo get_field( 'home-page-more-information' ); ?></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<section class="homeContent">
			<div class="container">
				<?php while ( has_sub_field( 'home-columns' ) ) { ?>
					<div class="col">
						<div class="service serviceOne">
							<?php the_sub_field( 'home-col' ); ?>
						</div>
					</div>
				<?php } ?>


			</div>
		</section>
		<section class="homeHeadline">
			<div class="container">
				<?php echo get_field( 'home-sub-row' ); ?>
			</div>
		</section>
	</article>

<?php get_footer(); ?>