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

<main class="container cap-lg-49 mb-5">
	<?php
    while (have_posts()) {
        the_post(); ?>

		<div class="row align-items-center mb-3 mb-sm-5">
			<!-- Profile pic -->
			<div class="col-12 col-sm-auto text-center text-sm-left mb-2 mb-sm-0 mr-md-4">
				<?php
                if (has_custom_logo()) {
                    $name = get_bloginfo("name");
                    $profile_pic_id = get_theme_mod("custom_logo");
                    $profile_pic_url = wp_get_attachment_image_url($profile_pic_id, "full");
                    echo '<img src="' . esc_url($profile_pic_url) . '" alt="A picture of ' . esc_html($name) . '" class="rounded-circle" style="width: 100%; max-width: 200px">';
                } ?>
			</div>

			<!-- Greeting -->
			<div class="col-12 col-sm text-center text-sm-left">
				<h1 class="greeting"><?php the_title(); ?></h1>
			</div>
		</div>

		<?php
		the_content();
    }
	?>
</main>

<?php
get_footer();
