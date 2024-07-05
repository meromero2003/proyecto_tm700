<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosa Shop Dark 1.0.0
 */

get_header();
?>
	<?php
	if( is_home() && !get_theme_mod( 'disable_main_slider', false ) ){
		if ( get_theme_mod( 'main_slider_controls', 'slider' ) == 'slider' ){
			if ( get_theme_mod( 'display_main_slider_on', 'below_header' ) == 'below_header' ){
				?>
				<section class="section-banner">
					<?php 
						get_template_part( 'template-parts/slider/slider', '' ); 
					?>
				</section>
				<?php
			}
		}elseif( get_theme_mod( 'main_slider_controls', 'slider' ) == 'banner' ){
			if ( get_theme_mod( 'display_banner_on', 'below_header' ) == 'below_header' ){
				bosa_banner();
			}
		}
	} ?>
	
<?php
get_footer();