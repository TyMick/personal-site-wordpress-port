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
 * @package Ty_Mick
 */

get_header();
?>

<main class="container cap-width-lg mb-5">
	<?php
    if (is_home() && !is_front_page()) {
		// Blog page title
		echo single_post_title('<h1 class="mb-4 mb-md-5">', false) . '</h1>';
	}
	?>

	<ul class="list-unstyled">
		<?php
		// Loop through blog posts
		while (have_posts()) {
			the_post();
			?>
			
			<li class="essay-preview">
				<!-- Title (with stretched link) -->
				<h2 class="h5">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>

				<!-- Subtitle -->
				<?php
				do_action('plugins/wp_subtitle/the_subtitle', [
					'before' => '<h3 class="h6">',
					'after' => '</h3'
				]);
				?>

				<!-- Date -->
				<small><?php the_time('F j, Y'); ?></small>

				<!-- Excerpt -->
				<?php the_excerpt(); ?>
			</li>
		<?php
		}
		?>
	</ul>
</main>

<?php
get_footer();
