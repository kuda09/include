<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package include
 */

get_header(); ?>


<div id="primary" class="blog">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()) : ?>
        <section class="hero">
            <div class="container">
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header>
                <!-- .entry-header -->
            </div>
        </section>
        <!--Start of contentArea-->
        <section class="contentArea">
            <div class="container">
                <div class="col">
                    <?php while (have_posts()) : the_post(); ?>

                        <?php get_template_part('template-parts/content', 'page'); ?>
                    <?php endwhile; // end of the loop. ?>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
        <!-- End of contentArea-->

    </main>
    <!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
