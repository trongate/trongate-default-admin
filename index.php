<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/trongate.css">
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
	<div>
		<a href="#">i Admin Users</a>
	</div>
</div>

<div class="wrapper">
	<div id="left-side">left side</div>
	<div>
		<div id="main">Main center stage</div>
		<div id="footer">
		    <div>footer</div>
		    <div id="btm-gutter">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum pariatur debitis laboriosam excepturi quas harum? Quisquam, aut, harum. Obcaecati dolorem sequi labore explicabo magni voluptas enim earum consequatur excepturi nemo.</div>
		</div>
		
	</div>
</div>



<style>

:root {
	--top-gutter-bg-color: #000;
	--top-gutter-link: #fff;
	--top-gutter-link-hover: #000;
	--top-gutter-text-transform: uppercase;
	--top-gutter-text-decoration: none;
	--top-gutter-li-margin: 0 2em 0 0;
	--top-gutter-li-padding: 0.5em;
	--left-side-bg-color: #f0f0f0;
	--footer-bg-color: #666;
	--footer-text-color: #fff;
	--btm-gutter-bg-color: #000;
	--btm-gutter-text-color: #fff;
}

#top-gutter {
	background-color: var(--top-gutter-bg-color);
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;
}

#top-gutter a {
	color: var(--top-gutter-link);
	text-transform: var(--top-gutter-text-transform);
	text-decoration: var(--top-gutter-text-decoration);
}

#top-gutter a:hover {
	color: var(--top-gutter-link-hover);
}

#top-gutter ul {
	list-style-type: none;
	display: flex;
	flex-direction: row;
	margin: 0;
}

#top-gutter li, #top-gutter li:hover, #top-gutter > div:nth-child(2) {
	margin: var(--top-gutter-li-margin);
	height: 100%;
	padding: var(--top-gutter-li-padding);
}

#top-gutter li:hover, #top-gutter > div:nth-child(2):hover {
	color: #000;
}

#left-side {
	width: 250px;
	background-color: var(--left-side-bg-color);
}


#main {
	min-height: 80vh;
}

#left-side, #main {
	padding: 1.8em;
}

#footer {
	min-height: 200px;
}

#footer {
	display: flex;
	align-items: center;
	justify-content: center;
}

#footer > div {
	width: 100%;
}

#footer > div:nth-child(1) {
	display: flex;
	align-items: center;
	justify-content: flex-start;
	min-height: 100px;
	text-indent: 20px;

}

.wrapper {
	display: flex;
	flex-direction: row;
	min-height: 100vh;
}

.wrapper > div:nth-child(2) {
	display: flex;
	flex-direction: column;
	width: 100%;
}

#footer {
	background-color: var(--footer-bg-color);
	color: var(--footer-text-color);
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: space-between;
}

#btm-gutter {
	background-color: var(--btm-gutter-bg-color);
	color: var(--btm-gutter-text-color);
}
</style>

















</body>
</html>