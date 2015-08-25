<?php
/*
Template Name: membership page template
*/

get_header(); ?>


    <article class="membership">
        <section class="hero">
            <div class="container"><h1>headline is here</h1></div>
        </section>
        <section class="contentArea">
            <div class="container">
	            <?php while (have_posts()) : the_post(); ?>
		            <?php get_template_part('content', 'page'); ?>
	            <?php endwhile; // end of the loop. ?>
            </div>
        </section>
    </article>

<?php get_footer(); ?>