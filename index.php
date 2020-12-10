<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="themes/trongate-default-admin/css/admin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Document</title>
</head>
<body>
	<nav id="top-gutter">
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
		<div><a href="#"><i class="fa fa-gears"></i> Admin Users</a></div>
		<div id="hamburger"><a href="#"><i class="fa fa-bars"></i></a></div>
	</nav>

<style>
@media screen and (max-width: 900px) {

  #hamburger {
  	font-size: 1.2em;
  }

  #top-gutter > div:nth-child(1), #top-gutter > div:nth-child(2), aside {
  	display: none;
  } 
}

@media screen and (min-width: 900px) {
  #hamburger {
  	display: none !important;
  }
}
</style>

	<div class="wrapper">
		<aside>	
			<h2>Menu</h2>
			<nav>
				<ul>
					<li><a href="#"><i class="fa fa-book"></i> Manage Books</a></li>
					<li><a href="#"><i class="fa fa-book"></i> Manage Books</a></li>
					<li><a href="#"><i class="fa fa-book"></i> Manage Books</a></li>
					<li><a href="#"><i class="fa fa-book"></i> Manage Books</a></li>
					<li><a href="#"><i class="fa fa-book"></i> Manage Books</a></li>
					<li><a href="#"><i class="fa fa-book"></i> Manage Books</a></li>
				</ul>
			</nav>
		</aside>
		<div><!-- contains both main and footer: defined as, .wrapper > div:nth-child(2) -->
			<main>
				
				<h1>Headline Looks Like This</h1>
			
				<p>
					<ul>
						<li>Make it look good on mobile devices</li>
						<li>Test on different browsers</li>
						<li>Build a nice login page</li>
						<li>Build a nice manage admin page</li>
					</ul>
				</p>
				<p>
					<button onclick="displayModal('test-modal')">Modal</button>
					<button class="danger" onclick="displayModal('test-modal')">Delete Modal</button>
					<div class="modal" id="test-modal">
						<div class="card">
							<div class="card-head">Options</div>
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorum deleniti a, optio alias tenetur quasi veritatis exercitationem ad quae officiis reiciendis provident quia molestiae est earum eaque! Consequuntur, ipsa!</p>
							</div>
						</div>
					</div>
				</p>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum odit exercitationem dolor neque, necessitatibus cumque, soluta a facere? Odio, iusto. Voluptates laudantium eligendi suscipit, earum autem ipsam quam sed rerum.
					<p> <a href="#" class="btn">Click Here</a> <a href="#" class="alt">Click Here</a> </p>
				</p>
				<h2>Sample Panels</h2>
				<div class="card">
					<div class="card-head">Options</div>
					<div class="card-body">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorum deleniti a, optio alias tenetur quasi veritatis exercitationem ad quae officiis reiciendis provident quia molestiae est earum eaque! Consequuntur, ipsa!</p>
					</div>
				</div>
				
				<table>
					<thead>
						<tr class="primary">
							<th colspan="4">
								<div class="table-header">
									<div>
										<div>Search Records:</div>
										<div class="sm">
											<input type="text" placeholder="Enter search phrase here">
										</div>
										<div>
											<button class="alt">Search</button>
										</div>
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
			</main>
			<footer>
				<div>Footer</div>
				<div>Powered by <a href="https://trongate.io">Trongate</a></div>
			</footer>
		</div><!-- end of .wrapper > div:nth-child(2) -->
	</div><!-- end of wrapper -->
	<script src="themes/trongate-default-admin/js/admin.js"></script>
</body>
</html>