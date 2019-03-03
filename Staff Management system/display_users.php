<?php
include 'db.php';
//$url = ('staff.xml');
 // $xml = simplexml_load_file( urlencode($url), null, true);
?>
<html>
	
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		
		<script src="js/jquery2.js"> </script>
		<script type="text/javascript" src="js/bootstrap.min.js" > </script>
		
		
		<script src="js/main.js" type="text/javascript"> </script>
		<script type="text/javascript">
			
		</script>
		<style>
		table{
			width: 100%;
		
		}
		table,td,th{
			
			border-collapse: collapse;
			border: 1px solid white;
			font-size: 24;
		}
			th{
				background-color: royalblue;
				font-weight: bold;
			}
			
			.staffdata 
			{
				border:thick solid #000;
				text-align:center;
			}
			
			.staffdata thead
			{
				border:thin solid #000;
				padding:20px;
				
			}
			
			.staffdata th, .staffdata td, .staffdata tbody
			{
				border:thin solid #000;
				padding:20px;
				text-align:center;
				font-size:14px;
				
			}
		</style>
	</head>
	<body>
		<br />
		<div class="container">
			
			<div class="row">
				<div class="col-md-3" style="background-color: skyblue">
					<ul class="nav">
					
					
					<li>	<a href="index.php">Home</a></li><br />
					<li>	<a href="logout.php">Logout</a></li>
				<li>	<a href="new_staff.php">Add new staff</a></li>
				<li>	<a href="new_user.php">Add new user</a></li>
				<li>	<a href="delete_user.php">Delete a user</a></li>
				<li>	<a href="display_users.php">Display all users</a></li>
				<li>	<a href="view_staff.php">View staff memebers</a></li>
					</ul>
					<form method="post">
						
						
					</form>
				</div>
				<div class="col-md-8" style='margin-left:20px;'>
					
				
				<h3>Users in our system</h3>
				
				<div class="row" id="container" >
					<table class='staffdata'>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th>Privilege</th>
						</tr>
						<tr>
							<?php
							$query=oci_parse($con, "SELECT * FROM users");
							oci_execute($query);
							while(ocifetch($query)) 
							{
								echo "<tr>";
								echo "<td>".ociresult($query,2)."</td>";
								echo "<td>".ociresult($query,3)."</td>";
								echo "<td>".ociresult($query,4)."</td>";
								echo "</tr>";
							}
							
							?>
							
							
						
					</table>
					
				</div>
				</div>
				
				
			</div>
			
		</div>
		
	</body>
</html>