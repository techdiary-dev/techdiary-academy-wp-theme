<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Techdiary_Academy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'techdiary-ac'); ?></a>

		<div class=" bg-secondary h-screen md:h-70vh">
			<header class=" px-10 h-14 flex justify-between items-center">
				<a href="<?php bloginfo('home'); ?>">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-header.png' ?>" alt="techdiary Academy">
				</a>
				<nav>
					<a href="#" class=" flex space-x-1 items-center font-operator-mono font-bold">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5 9V7C5 5.67392 5.52678 4.40215 6.46447 3.46447C7.40215 2.52678 8.67392 2 10 2C11.3261 2 12.5979 2.52678 13.5355 3.46447C14.4732 4.40215 15 5.67392 15 7V9C15.5304 9 16.0391 9.21071 16.4142 9.58579C16.7893 9.96086 17 10.4696 17 11V16C17 16.5304 16.7893 17.0391 16.4142 17.4142C16.0391 17.7893 15.5304 18 15 18H5C4.46957 18 3.96086 17.7893 3.58579 17.4142C3.21071 17.0391 3 16.5304 3 16V11C3 10.4696 3.21071 9.96086 3.58579 9.58579C3.96086 9.21071 4.46957 9 5 9V9ZM13 7V9H7V7C7 6.20435 7.31607 5.44129 7.87868 4.87868C8.44129 4.31607 9.20435 4 10 4C10.7956 4 11.5587 4.31607 12.1213 4.87868C12.6839 5.44129 13 6.20435 13 7V7Z" fill="#787878" />
						</svg>
						<span>Dashboard</span>
					</a>
				</nav>
			</header>
			<div class="max-w-6xl h-full flex justify-center px-10 mx-auto mt-[-40px]">
				<?php echo get_template_part('template-parts/hero-area'); ?>
			</div>
		</div>