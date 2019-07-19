<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ballelio
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Hmmm!', 'ballelio' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					
        <div class='panther'></div>
        
     <article class = 'error'>
    <h3>Well, this is embarrasing.</h3>    
    <p> Not sure how you ended up over here. <br>Let's go back <a href="<?php echo site_url ('/')?>">home.</a></p>   
    </article>  

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>