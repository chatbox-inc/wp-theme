<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container">

<!-- Header -->		
		<header>
			<?php if(is_home()): // ホームが表示されている場合、ブログタイトルを H1 で表示 ?>
				<h1><a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a></h1>
			<?php else: // ホーム以外のページが表示されている場合は H1 を削除。各記事やページのタイトルに H1 を使用 ?>
				<a href="<?php bloginfo('url'); ?>" class="blog_title"><?php bloginfo('name'); ?></a>
			<?php endif; ?>

			<p><?php bloginfo('description'); ?></p>
			<?php wp_nav_menu( array('menu_id' => 'nav' )); ?>
		</header><!-- /#header -->