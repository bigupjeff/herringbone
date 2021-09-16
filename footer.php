<?php
//namespace Herringbone;

/**
 * Herringbone Theme Template - Footer.
 *
 * @package herringbone
 * @author Jefferson Real <me@jeffersonreal.com>
 * @copyright Copyright (c) 2021, Jefferson Real
 */
?>
<footer class="footer sauce">


	<div class="footerNav">

		<?php wp_nav_menu(
			  array(
				  'theme_location'  => 'footernav',
				  'items_wrap'	  => '%3$s',
				  'menu_class'	  => 'nav',
				  'container'	   => 'div',
				  'container_class' => 'nav',
			  )
		); ?>

	</div>

	<div class="footer_copyright">

		<?php wp_nav_menu(
			  array(
				  'theme_location'  => 'legallink',
				  'items_wrap'	  => '%3$s',
				  'menu_class'	  => 'footer_label',
				  'container'	   => false,
			  )
		); ?>

		<?php echo "<p class=\"footer_label\">&copy; " . date("Y") . " Hello, my name is Jeff</p>";?>
	</div>
</footer>

</div> <?php //PAGE LAYOUT GRID END ?>

<?php include get_theme_file_path( '/modules/thumbNav/thumbNav.html' );?>

<?php wp_footer(); ?>

</body>
</html>
<!-- template: footer.php -->