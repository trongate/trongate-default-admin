<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div id="top-gutter">
	<div>
		<ul>
		    <li><a href="#">Logo</a></li>
		    <li><a href="#">About</a></li>
		    <li><a href="#">Values</a></li>
		    <li><a href="#">News</a></li>
		    <li><a href="#">Content</a></li>
		    <li><a href="#">Clients</a></li>
		    <li><a href="#">Partners</a></li>
	    </ul>
	</div>
	<div><a href="#">i Admin Users</a></div>
</div>
<div class="wrapper">
	<div class="lhs">
		stuff
	</div>
	<div>
		<div id="main">
			<h1>Headline Looks Like This</h1>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. </p>
			<h2>Sub Headline</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquam voluptas, magni harum quod? Tempora, in omnis! Beatae accusamus, voluptates eveniet delectus ducimus minus culpa commodi qui labore? Rem, ab.</p>
		</div>
		<div id="footer">
			<div>Footer</div>
			<div>Powered by <a href="https://trongate.io">Trongate</a></div>
		</div>
	</div>
</div>

<style>
:root {
	--top-gutter-bg-color: #000;
	--top-gutter-font-size: 1.1em;
	--top-gutter-link: #fff;
	--top-gutter-link-hover: #000;
	--footer-bg-color: #666;
	--footer-font-color: #fff;
	--footer-link: #fff;
	--footer-link-hover: #fff;
	--footer-btm-bg-color: #333;
	--lhs-background-color: #f0f0f0;
}

body {
	margin: 0;
	padding: 0;
	font-family: Verdana, sans-serif;
}

#top-gutter {
	background-color: var(--top-gutter-bg-color);
	display: flex;
	flex-direction: row;
	align-items: stretch;
	justify-content: space-between;
	text-transform: uppercase;
	font-size: var(--top-gutter-font-size);
}

#top-gutter > div {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

#top-gutter ul {
	display: flex;
	flex-direction: row;
	margin: 0;
	padding: 0;
	list-style-type: none;
}

#top-gutter a {
	padding: 0.6em 0.7em;
	text-decoration: none;
	color: var(--top-gutter-link)
}

#top-gutter a:hover {
	background-color: var(--top-gutter-link);
	color: #000;
}

.wrapper {
	background-color: silver;
	display: flex;
	flex-direction: row;
	min-height: 100vh;
}

.wrapper > div:nth-child(2) {
	background-color: #fff;
	width: 100%;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}

.lhs {
	width: 250px;
	background-color: var(--lhs-background-color);
	padding: 26px;
}

#main {
	background-color: #fff;
	padding: 24px 36px;
}



#footer {
	background-color: var(--footer-bg-color);
	color: var(--footer-font-color);
}

#footer > div:nth-child(1) {
	line-height: 3.6em;
	padding: 36px;
}

#footer > div:nth-child(2) {
	background-color: var(--footer-btm-bg-color);
	padding: 22px 36px;
}

#footer a {
	color: var(--footer-link);
}

#footer a:hover {
	color: var(--footer-link-hover);
}

p {
	line-height: 1.4em;
}

</style>

</body>
</html>