<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ballelio
 */

?>

	<div><!-- #content -->


	<footer id="colophon" class="site-footer">
		<div class="site-info">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly made with effort and determination  %s', 'ballelio' ), '' );
				?>
			<span class="sep"><i class="fas fa-bolt"></i>  </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'in _s.', '' ), 'ballelio', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
        
         <!-- footer menu - social-media   -->
                     <div id="social-media" class="menu-social-media-container" >
                         <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'social'
			) );
			?></div>
        
        
	</footer><!-- #colophon -->
</div><!-- #page -->



<?php wp_footer(); ?>

