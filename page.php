<?php
/**
 * Main template for static pages (pages that aren't blog posts)
 */

get_header();
?>

<main class="container cap-width-lg mb-5">
	<?php
    while (have_posts()) {
		the_post();
		
		the_title("<h1>", "</h1>");

        the_content();
    }
	?>
</main>

<?php
get_footer();
