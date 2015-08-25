<?php
/**
 * The template for displaying all single posts.
 *
 * @package include
 */

get_header(); ?>

<div id="primary" class="blog blog-single">
    <main id="main" class="site-main" role="main">
        <?php while (have_posts()) : the_post(); ?>
        <section class="hero">
            <div class="container"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
        </section>
        <!--Start of contentArea-->
        <section class="contentArea">
            <div class="container">
                <div class="col">


                        <?php get_template_part('template-parts/content', 'single'); ?>

                        <?php the_post_navigation(); ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>


                </div>
                <div class="col">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
        <!-- End of contentArea-->
        <?php endwhile; // end of the loop. ?>
    </main>
    <!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
