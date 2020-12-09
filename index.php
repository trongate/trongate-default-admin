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

			<p>
				<ul>
					<li>Make modal look nice (big and small one?)</li>
			        <li>Make delete modal</li>
			        <li>Integrate Icons</li>
			        <li>Get the left nav looking good</li>
			        <li>Get nav top rhs looking good</li>
			        <li>Build a nice login page</li>
			        <li>Build a nice manage admin page</li>
			        <li>Make it look good on mobile devices</li>
			        <li>Test on different browsers</li>
			    </p>

			<p>
				<button onclick="displayModal('test-modal')">Modal</button>

				<button class="danger" onclick="displayModal('test-modal')">Delete Modal</button>

				<div class="modal" id="test-modal">
					This is a modal. Yeeeehaaaaa!
				</div>	
			</p>

<style>
	#overlay {
		background-color: rgb(0,0,0,0.6);
		width: 100%;
		height: 100%;
		position: fixed;
		display: flex;
		align-items: center;
		justify-content: center;
		top: 0;
		left: 0;
	}
	.modal {
		display: block;
		position: absolute;
		width: 450px;
		height: 300px;
		background-color: red;
		margin: 0 auto;
		transition: top 0.4s;
		opacity: 0;
	}

</style>

<script>
	function displayModal(elId) {

		//javascript getboundingrect
		var targetModal = document.getElementById(elId);

		var domRect = targetModal.getBoundingClientRect(targetModal);
		//{"x":960,"y":0,"width":450,"height":300,"top":0,"right":1410,"bottom":300,"left":960}

		targetModal.style.opacity = 1;

		//top pos (default)
		targetModal.style.top = (domRect.height*-1) + 'px';
		
		//create an overlay div on the page
		var newOverlay = document.createElement("div");
		newOverlay.setAttribute("id", "overlay");
		document.body.appendChild(newOverlay); 

		document.getElementById(elId).remove();

		newOverlay.appendChild(targetModal);
		targetModal.style.display = 'block';

		setTimeout(() => {

			targetModal.style.top = '20vh';
			//targetModal.style.right = '0px';

			newOverlay.addEventListener("click", (ev) => {

				if (event.target.id == "overlay") {
					closeModal(targetModal);
				}
				
			});

		}, 1)

	}

	function closeModal(targetModal) {
		var overlay = document.getElementById("overlay");
		targetModal.style.display = 'none';
		overlay.remove();
		//add the modal by onto the page (but hidden)
		document.body.appendChild(targetModal); 
	}
</script>



			<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum odit exercitationem dolor neque, necessitatibus cumque, soluta a facere? Odio, iusto. Voluptates laudantium eligendi suscipit, earum autem ipsam quam sed rerum.  
<p>
<a href="#" class="btn">Click Here</a> 
<a href="#" class="alt">Click Here</a>
</p>



			</p>


<h2>Sample Panels</h2>

<div class="card">
	<div class="card-head">Options</div>
	<div class="card-body">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorum deleniti a, optio alias tenetur quasi veritatis exercitationem ad quae officiis reiciendis provident quia molestiae est earum eaque! Consequuntur, ipsa!</p>
	</div>
</div>

<div style="display: flex; flex-direction: row; margin-top: 33px;">
	<div style="padding-right: 12px; width: 50%;">
		
<div class="card">
	<div class="card-head">Options</div>
	<div class="card-body">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorum deleniti a, optio alias tenetur quasi veritatis exercitationem ad quae officiis reiciendis provident quia molestiae est earum eaque! Consequuntur, ipsa!</p>
	</div>
</div>

	</div>
	<div style="padding-left: 12px; width: 50%;">
		
<div class="card">
	<div class="card-head">Options</div>
	<div class="card-body">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorum deleniti a, optio alias tenetur quasi veritatis exercitationem ad quae officiis reiciendis provident quia molestiae est earum eaque! Consequuntur, ipsa!</p>
	</div>
</div>

	</div>
</div>

<div style="margin-top: 22px;">

</div>


<style>
.table-header {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: space-between;
	width: 100%;
}

.table-header > div:nth-child(1) {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: flex-start;
}

.table-header > div:nth-child(1) > div {
	margin-right: 4px;
}

.table-header > div:nth-child(1) button {
	margin-top: 0 !important;
	font-size: 0.8em;
	padding-left: 0.7em;
	padding-right: 0.7em;
}



</style>

			<table>
				<thead>
					<tr class="primary">
						<th colspan="4" style="paxdding: 0;">
							<div class="table-header">
								<div>
									<div>Search Records:</div> 
									<div class="sm"><input type="text" placeholder="Enter search phrase here"></div>
									<div><button class="alt">Search</button></div> 
								</div>
								<div>Records Per Page: </div>								
							</div>

						</th>
					</tr>
					<tr class="secondary">
						<th>One</th>
						<th>Two</th>
						<th>Three</th>
						<th>Four</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
				</tbody>
			</table>


			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ea, dignissimos quaerat quod, cum sed ex illo quae, placeat at accusamus facilis vero voluptate, architecto commodi fuga dolores dolor. Dolores. </p>

<h2>Small Buttons</h2>
			<p>
				<button class="sm">Primary</button>
			    <button class="sm alt">Secondary</button>
			    <button class="sm danger">Danger</button>
			</p>
<h2>Normal Buttons</h2>
			<p>
				<button>Primary</button>
			    <button class="alt">Secondary</button>
			    <button class="danger">Danger</button>
			</p>

<h2>Large Buttons</h2>
			<p>
				<button class="lg">Primary</button>
			    <button class="lg alt">Secondary</button>
			    <button class="lg danger">Danger</button>
			</p>

			<table>
				<thead>
					<tr class="primary">
						<th>One</th>
						<th>Two</th>
						<th>Three</th>
						<th>Four</th>
					</tr>
					<tr class="secondary">
						<th>One</th>
						<th>Two</th>
						<th>Three</th>
						<th>Four</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
					<tr>
						<td>One</td>
						<td>Two</td>
						<td>Three</td>
						<td>Four</td>
					</tr>
				</tbody>
			</table>


			<h2>Sub Headline</h2>

			<p><a href="sdfsdrfese">Click here</a> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquam voluptas, magni harum quod? Tempora, in omnis! Beatae accusamus, voluptates eveniet delectus ducimus minus culpa commodi qui labore? Rem, ab.</p>
		</div>
		<div id="footer">
			<div>Footer</div>
			<div>Powered by <a href="https://trongate.io">Trongate</a></div>
		</div>
	</div>
</div>

<style>
:root {
	--primary-color: #4076a3;
	--primary-color-darker: #305574;
	--primary-color-font-color: #fff;
	--border-radius: 0; 
	--secondary-color: SteelBlue;
	--secondary-color-darker: #36658c;
	--secondary-color-font-color: #ff0000;
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
	--link-font-color: SteelBlue;
	--link-font-color-hover: #305574;
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

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    background-color: var(--primary-color);
    color: #fff;
}

tr.secondary > th {
	background-color: var(--secondary-color) !important;
}

th, td {
    border: 1px solid var(--primary-color-darker);
    padding: 0.7em;
}

td:hover {
    cursor: pointer;
}

tr:hover, tr:nth-child(odd):hover {
    background-color: #fdfdea;
}

tr:nth-child(odd) {
    background-color: #f3f3f3;
}

.primary {
	background-color: var(--primary-color);
}

a {
	color: var(--link-font-color);
}

a:hover {
	color: var(--link-font-color-hover);
}

form {
    width: 100%;
}

input[type="text"], input[type="email"], input[type="password"], select {
    padding: 0.6em 0.6em;
    font-size: 1em;
    width: 100%;
    border: 1px #333 solid;
    box-sizing: border-box;
}

input[type="text"]:focus, textarea:focus, input[type="email"]:focus, input[type="password"]:focus, select:focus {
    border: 1px SteelBlue solid;
    outline: 0;
}

input[type="text"], input[type="email"], input[type="password"], button, textarea, select {
    border-radius: var(--border-radius);
}

textarea {
    padding: 0.6em 0.6em;
    font-size: 1.231em;
    width: 100%;
    height: 100%; 
    box-sizing: border-box;
    border: 1px #333 solid; 
    line-height: 1.6em;       
}

label {
    margin: 1.4em 0 0.4em 0;
    clear: both;
    display: block;
}

button {
    background-color: SteelBlue;
    border: 1px SteelBlue solid;
    margin: 1em 0.1em 0 0;
    padding: 0.6em 1.2em;
    color: #fff;
    font-size: 0.9em;
    cursor: pointer;
}

button:hover {
    background-color: #36658c;
    border: 1px #36658c solid;
}

.danger {
    background-color: #ff0000;
    border: 1px #ff0000 solid;
    color: #fff;        
}

.danger:hover {
    background-color: #ee0000;
    border: 1px #ee0000 solid;	
}

.alt {
    background-color: #fff;
    border: 1px SteelBlue solid;
    color: #333;        
}

.alt:hover {
    background-color: #fff;
    border: 1px #36658c solid;
    color: SteelBlue;
}

ul {
    margin: 2em 0;
    list-style-type: circle;
}

li {
    line-height: 1.8em;
}

input[type="checkbox"] {
  top: 0.3em;
  position: relative;
  width: 1.4em; height: 1.4em;
}

input[type="radio"] {
    margin: 1.6em 0 2em 1em;
}

hr {
    border: 0;
    height: 1px;
    background: #555;
    margin: 2em 0;
}

@media screen and (max-width: 550px) {
  button {
    width: 100%;
  }

  a.alt, a.btn {
  	display: block;
  	text-align: center;
  }
}


a.btn {
	background-color: var(--primary-color);
	color: var(--primary-color-font-color);
	text-decoration: none;
    border: 1px solid var(--primary-color);
    margin: 1em 0.1em 0 0;
    padding: 0.6em 1.2em;
    font-size: 0.9em;
    cursor: pointer;
}

a.btn:hover {
	background-color: var(--primary-color-darker);
	color: var(--primary-color-font-color);
    border: 1px solid var(--primary-color-darker);
    cursor: pointer;
}

a.alt {
	background-color: transparent;
	color: var(--primary-color);
	text-decoration: none;
    border: 1px solid var(--primary-color);
    margin: 1em 0.1em 0 0;
    padding: 0.6em 1.2em;
    font-size: 0.9em;
    cursor: pointer;
}

a.alt:hover {
	background-color: transparent;
	color: var(--primary-color-darker);
    border: 1px solid var(--primary-color-darker);
    cursor: pointer;
}


.sm {
	font-size: 0.8em;
}

.lg {
	font-size: 1.2em;
}



.card {
	border: 1px solid var(--primary-color-darker);
	-webkit-box-shadow: 0px 6px 5px 4px rgba(0,0,0,0.16);
	-moz-box-shadow: 0px 6px 5px 4px rgba(0,0,0,0.16);
	box-shadow: 0px 6px 5px 4px rgba(0,0,0,0.16);
}

.card-head {
	background-color: var(--primary-color);
	color: #fff;
	padding: 12px;
	font-size: 1.3em;
}

.card-body {
	padding: 12px;

}



</style>

</body>
</html>