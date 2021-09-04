<?php

$homePagenavbarClass;

if (is_front_page()) {
	$homePagenavbarClass = "md:h-70vh h-screen bg-secondary";
}

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

		<div class="<?php echo $homePagenavbarClass; ?>">
			<header class="flex items-center justify-between px-10 h-14">
				<a href="<?php bloginfo('home'); ?>">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/logo-header.png' ?>" alt="techdiary Academy">
				</a>
				<nav class="flex items-center space-x-3">
					<a href="<?php echo site_url('dashboard') ?>" class="flex items-center space-x-1 font-bold font-operator-mono">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M5 9V7C5 5.67392 5.52678 4.40215 6.46447 3.46447C7.40215 2.52678 8.67392 2 10 2C11.3261 2 12.5979 2.52678 13.5355 3.46447C14.4732 4.40215 15 5.67392 15 7V9C15.5304 9 16.0391 9.21071 16.4142 9.58579C16.7893 9.96086 17 10.4696 17 11V16C17 16.5304 16.7893 17.0391 16.4142 17.4142C16.0391 17.7893 15.5304 18 15 18H5C4.46957 18 3.96086 17.7893 3.58579 17.4142C3.21071 17.0391 3 16.5304 3 16V11C3 10.4696 3.21071 9.96086 3.58579 9.58579C3.96086 9.21071 4.46957 9 5 9V9ZM13 7V9H7V7C7 6.20435 7.31607 5.44129 7.87868 4.87868C8.44129 4.31607 9.20435 4 10 4C10.7956 4 11.5587 4.31607 12.1213 4.87868C12.6839 5.44129 13 6.20435 13 7V7Z" fill="#787878" />
						</svg>
						<span>Dashboard</span>
					</a>
					<?php if (class_exists('\TUTOR\Utils') && is_user_logged_in()) : ?>
						<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="flex items-center space-x-1 font-bold font-operator-mono">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
							</svg>
							<span>Cart (<?php echo WC()->cart->get_cart_contents_count(); ?>)</span>
						</a>
						<a href="<?php echo site_url('dashboard/logout') ?>" class="flex items-center space-x-1 font-bold font-operator-mono">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
								<path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd" />
							</svg>
							<span>Logout</span>
						</a>
					<?php endif; ?>
				</nav>
			</header>

			<?php if (is_front_page()) : ?>
				<div class="max-w-6xl h-full flex justify-center px-10 mx-auto mt-[-40px]">
					<?php echo get_template_part('template-parts/hero-area'); ?>
				</div>
			<?php endif; ?>


		</div>