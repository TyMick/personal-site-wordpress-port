<?php
/**
 * Some minor adjustments for /connect
 */

get_header();
?>

<main class="container cap-width-md mb-5">
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
