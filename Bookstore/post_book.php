<?php

?>
<html>
	<head>
		<title>Add book</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery2.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js" > </script>
		<script src="js/main.js" type="text/javascript"> </script>
	</head>
	<body>
		<div class="navbar navbar-fixed-top" style="background-color: grey; color: white;font-size: 26">
			<div class="container-fluid">
				<h3 style="color: white">
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand" style="color: white">Bookstore</a>
				</div>
				<ul class="nav navbar-nav" style="text-align: center; color: white; font-size: 26">
					<li>
						<a href="index.html" style="color: white">Home</a>
					</li>
					<li>
						<a href="bookdescription_page.html" style="color: white">Book description</a>
					</li>
					<li>
						<a href="booksearch.php" style="color: white">Book search</a>
					</li>
					<li>
						<a href="contact.php" style="color: white">Contact</a>
					</li>
					
					<li>
						<a href="viewcontacts.php" style="color: white">View Comments</a>
					</li>
				</ul>
				</h3>
</div>
</div>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
			
		</div>
		<div class="col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading">
				<h3>Add new book here</h3>
				</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" id="myForm" action="action.php">
					<div class="row">
						<div class="col-md-2">Book ISBN number</div>
						<div class="col-md-4"><input type="text" required name="isbn" id="isbn" size="50" placeholder="number needed here" /></div>
					</div><br />
					<div class="row">
						<div class="col-md-2">Field</div>
						<div class="col-md-4">
						<select name="field">
							<option value="">Select study field</option>
							<option value="tech">Technology</option>
							<option value="eng">Engineering</option>
							<option value="med">Medical sciences</option>
							<option value="law">Law</option>
						</select>
						</div>
						
					</div><br />
					<div class="row">
						<div class="col-md-2">
							Book Title
						</div>
						<div class="col-md-4"><input type="text" name="title" placeholder="title needed" required/></div>
						
					</div><br />
					<div class="row">
						<div class="col-md-2">
							Year published
						</div>
						<div class="col-md-4">
							<input type="text" name="year" size="50" required />
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-2">
							Author
						</div>
						<div class="col-md-4">
							<input type="text" name="author" size="50" required />
						</div>
					</div><br />
					<div class="row">
						<div class="col-md-2">
							Description
						</div>
						<div class="col-md-4">
							<textarea name="desc" cols="50" rows="6" required> </textarea>
						</div>
						
					</div><br />
					<div class="row">
					<div class="col-md-2">
						Image
					</div>	
					
					</div><br />
					<div class="row">
						<div class="col-md-4">
							<input type="submit" class="btn btn-success" name="post" id="post" value="Post" />
						</div>
						
					</div>
				</form>
	</div>
	</div>
	</div>
	</div>
	<div class="panel-footer">
		&copy;
		welcome to our book store. contact +61-497-913-797
	</div>
	</div>
	
	</body>
</html>