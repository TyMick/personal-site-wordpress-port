<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ty_Mick
 */

get_header();
?>

<main class="container cap-width-lg">
	<?php
    while (have_posts()) {
		the_post();
		
		the_title('<h1 class="mb-4 mb-md-5">', '</h1>');

        the_content();
    }
	?>
</main>

<?php
get_footer();
