<?php
include 'db.php';
?>
<html>
	<head>
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
<div class="container">

	
	<div class="row">
		<div class="col-md-1">
			
		</div>
		<div class="col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading">All contacts made</div>
				<div class="panel-body">
					<!--fetcuhing data from table via ajax-->
					<div id="viewcontact">
					
					<?php
						$sql=oci_parse($con, "SELECT * FROM contact");
						echo "<table style='width:100%;'>
							<tr>
							<th>NAMES</th><th>EMAIL</th><th>Subject</th><th>Message</th>
							</tr>";
							ociexecute($sql);
						while ($fetch=oci_fetch_array($sql, OCI_RETURN_NULLS+OCI_ASSOC)) {
							
							
							$names=ociresult($sql,2);
							$email=ociresult($sql,3);
							$subject=ociresult($sql,4);
							$message=ociresult($sql,5);
							
							
							echo "
							<tr>
							
							<td>$names</td>
							<td>$email</td>
							<td>$subject</td>
							<td>$message</td>
							
							</tr>
							
							";
							
		
					}
	?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer" style="text-align: center">
		
		&copy;
		welcome to our book store. contact +61-497-913-797
	</div>
</div>
		
	</body>
</html>