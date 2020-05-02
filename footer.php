<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ty_Mick
 */

?>
		<footer class="container-fluid text-center mt-auto mb-3">
			<a rel="license" href="http://creativecommons.org/license/by/4.0/" title="Creative Commons Attribution 4.0 International License" class="text-reset text-decoration-none">
				<i class="fab fa-creative-commons"></i>&#x0200A;<i class="fab fa-creative-commons-by"></i>
			</a>
			2020
			<a xmlns:cc="http://creativecommons.org/ns#" href="<?= esc_url(home_url("/")); ?>" property="cc:attributionName" rel="cc:attributionURL" class="text-reset text-decoration-none">
				<?php bloginfo("name"); ?>
			</a>
		</footer>

		<?php wp_footer(); ?>

		<!-- jQuery, Popper, Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
