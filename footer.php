	<?php do_action('before_footer'); ?>

	<footer role="contentinfo" id="footer">

		<div class="footer__menus">
			<div class="max__width">
				<article class="footer__menu">
					<h5>Ready to get Coco Loco? <i class="fas fa-chevron-down"></i></h5>
					<ul>
						<li>
							<a href="https://www.instagram.com/coco.loco.bebe/" target="_blank"><i class="fa fa-instagram"></i></a>
						</li>
						<li><p>Get in touch to discuss your requirements!</p></li>
						<li><p style="maargin-top: 20px;">Coco Loco Bebe S.L.</p></li>
					</ul>
				</article>

				<article class="footer__menu">
					<h5>Connect <i class="fas fa-chevron-down"></i></h5>
					<ul id="" class="menu">
						<li><a href="mailto:ceo@cocolocobebe.com"><i class="fal fa-envelope"></i>ceo@cocolocobebe.com</a></li>
						<li><img class="flag" src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/flag-spain.png'); ?>" alt="Spain Flag"/><a href="tel:+34711047146">+34711047146</a></li>
						<li><img class="flag" src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/flag-uk.png'); ?>" alt="UK Flag"/><a href="tel:+447881817796">+447881817796</a></li>
					</ul>											
				</article>

				<?php
				while (have_rows('footer_menus', 'options')) : the_row();

					$footer_menu = get_sub_field('footer_menu');
				?>
					<article class="footer__menu">
						<?php if ($footer_menu) : ?>
							<h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
							<?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false, 'depth' => 1)); ?>
						<?php endif; ?>
					</article>

				<?php endwhile; ?>
			</div>
		</div>
	</footer>

	<div class="spotlight-search">
		<div class="spotlight-search--content">
			<a href="#" class="spotlight-close"><i class="fal fa-times"></i></a>

			<h2>Search <?php bloginfo('name'); ?></h2>
			<form action="<?php echo esc_url(home_url()); ?>">
				<input type="text" name="s" placeholder="ie. Tenants" />
				<button type="submit" class="button primary"><i class="fal fa-search"></i></button>
			</form>
		</div>
	</div>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="https://kit.fontawesome.com/a907a96592.js" crossorigin="anonymous"></script>
	</body>

</html>