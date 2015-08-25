<?php
/**
 * The template for displaying search results pages.
 *
 * @package include
 */

get_header(); ?>

<div id="primary" class="blog">
	<main id="main" class="site-main" role="main">
		<?php if (have_posts()) : ?>
		<section class="hero">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'include' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
				<!-- .page-header --></div>
		</section>
		<!--Start of contentArea-->
		<section class="contentArea">
			<div class="container">
				<div class="col">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );


						?>



					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>




				</div>
				<div class="col">
					<?php  get_sidebar();?>
				</div>
			</div>
		</section>
		<!-- End of contentArea-->
		<?php else : ?>
			<section class="hero">
				<div class="container">
					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'include' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header>
					<!-- .page-header --></div>
			</section>
			<!--Start of contentArea-->
			<section class="contentArea">
				<div class="container">
					<div class="col">

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					</div>

					<div class="col">
						<?php  get_sidebar();?>
					</div>

				</div>
			</section>
		<?php endif; ?>
	</main>
	<!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
