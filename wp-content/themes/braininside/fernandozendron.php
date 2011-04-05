	<!DOCTYPE html>
	<html lang="pt">
	<head>
	  <meta charset="utf-8" /><title>Article (HTML5)</title>
	</head>

	<body>
		<header id="branding">
			<h1>Site name</h1>
		</header>
	
		<nav>
			<ul>
				<li>Main navigation</li>
			</ul>
		</nav>
	
		<div id="content"> <!-- wrapper for CSS styling & no title so not section -->
			<article><!-- main content (the article) -->
				<header>
					<h1>Article title</h1>
					<p>Article metadata</p>
				</header>
		
				<p>Article content…</p>
	
				<footer>Article footer</footer>
			
			</article>
		
			<aside id="sidebar"><!-- secondary content for page (not related to article) -->
				<h1>Sidebar title</h1> <!-- ref: HTML5-style heading element levels -->
				<p>Sidebar content</p>
			</aside>
		</div>
		
		<footer id="footer">Footer</footer><!-- page footer (not in section etc) -->
	</body>
	
	<script>
		window.resizeTo("1000", "720");
		window.moveBy((screen.width / 2), 0);
	</script>

</html>