<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package include
 */

get_header(); ?>

<div id="primary" class="blog">
    <main id="main" class="site-main" role="main">
        <section class="hero">
            <div class="container">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'include'); ?></h1>
                </header>
                <!-- .page-header --></div>
        </section>
        <!--Start of contentArea-->
        <section class="contentArea error-404 not-found">
            <div class="container">
                <div class="col">
                    <div class="page-content">
                        <h2><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'include'); ?></h2>

                        <?php get_search_form(); ?>



                        <?php the_widget('WP_Widget_Tag_Cloud'); ?>

                    </div>
                    <!-- .page-content -->
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
