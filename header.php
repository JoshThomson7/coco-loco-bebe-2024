<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/a907a96592.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

    <?php include get_stylesheet_directory().'/modules/mega-menu-mobile.php'; ?>

	<div id="page">
		
		<header class="header">
			<div class="header__main">
				<div class="max__width">
					<div class="header__main--left">
						<?php echo do_shortcode('[gtranslate]'); ?>
						<span>Choose Language</span>
					</div>

					<div class="header__main--right">
						<div class="logo">
							<img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/logo.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
						</div>
					</div>
				</div><!-- max__width -->
			</div><!-- header__main -->
		</header><!-- header -->

		<?php
			$announcements = get_field('announcements', 'option') ?? array();
			if($announcements && !APF_Helpers::is_apf()): ?>
			<div class="max__width">
				<div class="announcements">
					<?php 
						foreach($announcements as $announcement):
							$announcement_caption = $announcement['caption'];
							$announcement_button_label = $announcement['button_label'];
							$announcement_button_url = $announcement['button_url'];
					?>
						<article>
							<figure><i class="fa-light fa-bell"></i></figure>
							<div><?php echo $announcement_caption; ?></div>
							<a href="<?php echo $announcement_button_url; ?>" title="<?php echo $announcement_button_label; ?>" class="as-link">
								<?php echo $announcement_button_label; ?> <i class="fal fa-arrow-right"></i>
							</a>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>