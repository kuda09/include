<?php
/**
 * @package include
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'include' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

    <header class="entry-header">
        <div class="entry-meta">
            <?php include_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

	<footer class="entry-footer">
		<?php include_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
