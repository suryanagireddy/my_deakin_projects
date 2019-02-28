<?php
	include 'db.php';
?>
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
		<!--<script src="js/main.js" type="text/javascript"> </script>-->
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
				<h3>	Our books description</h3>
				</div>
				<div class="panel-body">
					<!-- books lists-->
					<!--get all the available books via the ajax response-->
					<div class="row"> 
					<div id="get_books">
						<?
						 //echo "Hi";
						$sql=oci_parse($con, "SELECT * FROM books");
	
							ociexecute($sql);
							while (oci_fetch($sql)) {
								$isbn=ociresult($sql,1);
								$field=ociresult($sql,2);
								$title=ociresult($sql,3);
								$year=ociresult($sql,4);
								$author=ociresult($sql,5);
								$desc=ociresult($sql,6);
								//$image=ociresult($sql,8);
							
							echo "
							<div class='col-sm-6 col-md-3'>
							<img src='images/book$isbn.jpg' class='img-thumbnail' width='35%' height='150px'/><br>
							ISBN: $isbn<br>
							Field: $field<br>
							Title: $title<br>
							Year published: $year<br>
							Author: $author<br>
							Description: $desc<br>
							
							</div>
							";
						
						}

						
						?>
					</div>
					</div>
					<!--
					<div class="row">
						<div class="col-md-4">
							<img src="images/book4.jpg" style="height: 200px;width: 280px" />
							<p>A web programming book creating websites and ensuring that the website is fully function
								 both on the client side and server side using PHP and mysql.<a href="">Read more</a></p>
						</div>
						<div class="col-md-4">
							<img src="images/book6.jpg" style=" height: 200px;width: 280px" />
							<p>A web programming book for creating responsive and dynamic web pages. Javascript and Jquery 
								are languages which ensure that the web pages are self responsive through the use of ajax 
								requests and responses. <a href="" >Read more</a></p>
						</div>
						<div class="col-md-4">
							<img src="images/book7.jpg" style="height: 200px;width: 280px" />
							<p>A programming book for creating relational databases. We all know currently most of the available 
								websites are database driven. In order to create the most relevant database, please refer to this book.
								 <a href="">Read more</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<img src="images/book2.jpg" style="height: 200px;width: 280px;"/>
							<p>Web programming nowadays is turning to HTML5 simply because the current browsers have started to reject features 
								web pages created from the previous versions of the HTML. To stay up-to-date with html programming, refer to this book. 
								<a href="">Read more</a></p>
						</div>
						<div class="col-md-4">
							<img src="images/book3.jpg" style="height: 200px;width: 280px;" />
							<p>This is the most suitable book for the beginners in web development. It contains, step by step for
								 creating web pages using HTML and other web development languages. <a href="">Read more</a></p>
						</div>
						<div class="col-md-4">
							<img src="images/book9.jpg" style="height: 200px;width: 280px" />
							<p>Perl is the most database management system currenting being adopted by java. When creating websites using Java, please incorparate 
								this book to guide you in creating the database and integrating with java. <a href="">Read more</a> </p>
						</div>
					</div>
					-->
				</div>
			</div>
		</div>
	</div>
	<!--footer-->
	<div class="panel-footer">
		&copy;
		welcome to our book store. contact +61-497-913-797
	</div>
</div>
</body>
</html>