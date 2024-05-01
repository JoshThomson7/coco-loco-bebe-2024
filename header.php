<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
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