<?php
/**
 * Header, fonts, navbar
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >

		<!-- Font Awesome and Google Fonts -->
		<script src="https://kit.fontawesome.com/7f1bac7050.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans|Dawning+of+a+New+Day&display=swap" rel="stylesheet" >

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header class="container px-0 mb-4 mb-md-5">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-md navbar-light">
				<!-- Profile pic and name -->
				<a href="<?= esc_url(home_url("/")); ?>" class="signature navbar-brand">
					<?php
					$name = get_bloginfo("name");
					
					// Add profile pic unless on front page
					if (has_custom_logo() && !is_front_page()) {
						$profile_pic_id = get_theme_mod("custom_logo");
						$profile_pic_url = wp_get_attachment_image_url($profile_pic_id, "full");
						echo '<img src="' . esc_url($profile_pic_url) . '" alt="A picture of ' . esc_html($name) . '" class="rounded-circle">';
					}
					echo $name;
					?>
				</a>

				<!-- Navbar toggle button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-links" aria-controls="nav-links" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- Nav links -->
				<?php
				// Get WP's html of nav menu
				$nav_menu = wp_nav_menu([
					"theme_location" => "menu-1",
					"container_class" => "collapse navbar-collapse justify-content-end",
					"container_id" => "nav-links",
					"menu_class" => "navbar-nav align-items-end align-items-md-center",
					"echo" => false
				]);

				// Add necessary Bootstrap classes
				$patterns = [
					'/([" ]menu-item)([ "])/',
					'/([" ]current-menu-item)([ "])/',
					'/<a href/'
				];
				$replacements = [
					'$1 nav-item$2',
					'$1 active$2',
					'<a class="nav-link" href'
				];
				$nav_menu = preg_replace($patterns, $replacements, $nav_menu);

				// Replace GitHub text with icon
				$patterns = [
					'/class="([^"]*)" href="https:\/\/github.com\/([^"]*)">([^<]*)/'
				];
				$replacements = [
					'class="$1 github-nav-link" href="https://github.com/$2"><i class="fab fa-github" title="$3"></i>'
				];
				$nav_menu = preg_replace($patterns, $replacements, $nav_menu);

				// Echo altered html
				echo $nav_menu;
				?>
			</nav>
		</header>
