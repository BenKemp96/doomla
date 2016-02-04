<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Doomla - <?= getTitle() ?></title>
	<link rel="stylesheet" href="css/dark.css">
</head>
<body>
	<header>
		<nav>
			<?= getMenu() ?>
		</nav>
	</header>
	<section>
		<article class="top">
			<h1>Welcome to Dark Doomla <br> Ready for some night work?</h1>
		</article>
	</section>
	<section>
		<article class="bottom">
			<?= getContent() ?>
		</article>
	</section>
	<footer>
		<p>Copyright Ben Kemp &copy 2016</p>
	</footer>
</body>
</html>