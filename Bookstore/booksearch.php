<!DOCTYPE  html>
<html>
	<head>
		
		<style>
			body{
				
				background-repeat: no-repeat;
				background-size: cover;
				background-position-x: center;
				background-position-y:center; 
				text-align: justify;
				text-align: center;
				
			}
		</style>
		<meta charset="UTF-8"  />
		<title>Bookstore</title>
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
		<div class="col-md-1"> </div>
		<div class="col-md-8">
			<!--serach button-->
			<input type="text" id="search" placeholder=" please type to search by author name, field of study or book title" size="80"/> 
			<div id="getbooks">
				
			</div>
			
		</div>
		<!--search results displayed here-->
		<div>
			
			
		</div>
	</div>
	<hr />
	<!--footer-->
	<div class="panel-footer">
		&copy;
		welcome to our book store. contact +61-497-913-797
		
	</div>
</div>

</body>
</html>