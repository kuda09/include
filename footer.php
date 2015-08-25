<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package include
 */
?>

</article><!-- article -->

<!-- footer -->
<footer class="siteFooter" id="footer">
    <div class="footerRow1">
        <div class="container">
            <div class="col">
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
            </div>
            <div class="col">
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
            </div>
            <div class="col">
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
            </div>
            <div class="col">
                <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-right-widget') ) ?>
            </div>
        </div>
    </div>
    <div class="footerRow2">
        <div class="container">
            <div class="col">
                <a href="<?php echo esc_url(__('http://wordpress.org/', 'include')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'include'), 'Include Incorporated'); ?></a>
                <span class="sep"> | </span> &copy; Copyright 2015. All rights reserved.
            </div>
            <div class="col">
	            <div class="socialLinks">
		            <ul>
			            <li><a href=""><i class="fa fa-twitter"></i></a></li>
			            <li><a href="https://www.facebook.com/KidsCodeAcademy"><i class="fa fa-facebook"></i></a></li>
			            <li><a href="https://www.linkedin.com/profile/view?id=431097985 "><i class="fa fa-linkedin"></i></a></li>
			            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
			            <li><a href="mailto:includeincorporated@gmail.com?Subject=Hello%20again"><i class="fa fa-envelope-o"></i></a></li>
		            </ul>
	            </div>

            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
