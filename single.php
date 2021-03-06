<?php if ( !defined('ABSPATH') ) die();
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage From_Scratch
 * @since From Scratch 1.0
 */
get_header(); ?>

				<div id="primary" class="content-area" role="main">
					
					<div class="row">
						<div class="col-12">
		
						<?php while (have_posts()) : the_post(); ?>
				
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				
						<?php endwhile; ?>
				
		  				<?php if ( comments_open() || get_comments_number() ) : ?>
		  					<?php comments_template(); ?>
						<?php endif;?>
							
						</div>					
					</div>
				
				</div> <?php // END primary ?>

<?php get_footer(); ?>