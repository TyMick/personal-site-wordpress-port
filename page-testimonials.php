<?php
/**
 * Some minor adjustments for /testimonials
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
