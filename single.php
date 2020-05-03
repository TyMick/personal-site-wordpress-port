<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ty_Mick
 */

get_header();
?>

<main class="container cap-width-lg mb-5">
	<article aria-labelledby="article-title">
		<?php
		while (have_posts()) {
			the_post();

			// Title
			the_title('<h1 id="article-title">', '</h1>');

			// Subtitle
			do_action('plugins/wp_subtitle/the_subtitle', [
				'before' => '<h2 class="h3 text-secondary">',
				'after' => '</h2>'
			]);

			// Date
			echo '<div class="font-italic text-secondary mb-4">' . get_the_time('F j, Y') . '</div>';

			// Content
			the_content();
		}
		?>
	</article>
</main>

<?php
get_footer();
