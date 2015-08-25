<?php
/*
Template Name: about page template
*/

get_header(); ?>


    <article class="aboutPage">
        <section class="hero">
            <div class="container"><h1>headline is here</h1></div>
        </section>
        <section class="contentArea">
            <div class="container">
                <div class="col">
	                <?php while (have_posts()) : the_post(); ?>
		                <?php get_template_part('content', 'page'); ?>
	                <?php endwhile; // end of the loop. ?>
                </div>
                <div class="col">
                    <h1>what we really do</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias asperiores assumenda consequatur, dolore eius incidunt maxime nam pariatur quas quibusdam quo recusandae, reiciendis repellat repellendus reprehenderit suscipit tenetur ut.</p>

                </div>
            </div>
        </section>
    </article>

<?php get_footer(); ?>