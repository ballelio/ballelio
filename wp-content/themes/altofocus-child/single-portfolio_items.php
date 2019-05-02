<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AltoFocus Child
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'components/page/content', 'page' );
                $size_full = 'full';
                $size= 'medium';
                $project_title = get_field('project_title');
                $project_image = get_field('project_image');
                $secondary_image_a = get_field('secondary_image_a');
                $secondary_image_b = get_field('secondary_image_b');
                $secondary_image_c = get_field('secondary_image_c');    
                $secondary_image_d = get_field('secondary_image_d');    
                $project_description = get_field('project_description');
                $languages_used = get_field('languages_used');
                $project_link = get_field('project_link');  ?>
            
            
            <article>
            <h1 class="portfolio"><?php echo $project_title;?></h1>
            <div class="project-image"><?php echo wp_get_attachment_image($project_image, $size_full);?></div>
            <aside class="secondary-images">
                <?php if ($secondary_image_a){
                echo wp_get_attachment_image($secondary_image_a, $size);
                }  ?>
                <?php if ($secondary_image_b){
                echo wp_get_attachment_image($secondary_image_b, $size);
                }  ?>
                <?php if ($secondary_image_c){
                echo wp_get_attachment_image($secondary_image_c, $size);
                }  ?>
                <?php if ($secondary_image_d){
                echo wp_get_attachment_image($secondary_image_d, $size);
                }  ?>
                <?php if ($secondary_image_e){
                echo wp_get_attachment_image($secondary_image_e, $size);
                }  ?>
            </aside>
            <aside class="project">
            <p class="project-description"><?php echo $project_description;?></p>
            <p class="languages-used"><?php echo $languages_used;?></p> 
                <p class="project-link"> <a href="<?php echo $project_link;?>">See it Live</a></p>  
            </aside>
            </article>
            
              
            
			<?php endwhile; // End of the loop.
			?>

            <?php
		while ( have_posts() ) : the_post();
			the_post_navigation( array(
				'prev_text' => '%title <span class="meta-nav" aria-hidden="true">' . esc_html__( 'Previous', 'altofocus' ) . '</span>',
				'next_text' => '%title <span class="meta-nav" aria-hidden="true">' . esc_html__( 'Next', 'altofocus' ) . '</span>'
			) );

		endwhile; // End of the loop.
		?>
		</main>
	</div>
<?php
get_footer();