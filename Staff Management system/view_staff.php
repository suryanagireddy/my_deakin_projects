<?php
session_start();


if(isset($_SESSION['staff_id'])){
	$priv=$_SESSION['type'];
	$priv= rtrim($priv);
	$priv= ltrim($priv);

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
			border: 1px solid black;
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
		<div class="container" >
			
			<div class="row">
				<div class="col-md-3" style="background-color: skyblue">
					<ul class="nav">
					
					
					<li>	<a href="index.php">Home</a></li><br />
					<li>	<a href="logout.php">Logout</a></li>
				<?php
				
				if ($priv=='admin')
				{ 
				
				echo '<li>	<a href="new_staff.php">Add new staff</a></li>';
				echo '<li>	<a href="new_user.php">Add new user</a></li>';
				echo '<li>	<a href="delete_user.php">Delete a user</a></li>';
				echo '<li>	<a href="display_users.php">Display all users</a></li>';
				}
				
				?>
				<li>	<a href="view_staff.php">View staff memebers</a></li>
					</ul>
					<form method="post">
						
						
					</form>
				</div>
				<div class="col-md-8" style='margin-left:20px;'>
					
				
				<h1>Staff list</h1>
				
				<div class="row" id="container" >
					<div class="row" id="container" >
					<table id="data" class='staffdata'>
						<tr>
						<th>Staff_ID</th><th>Surname</th><th>Given Name</th><th>E-mail</th><th>Address</th> </tr>
						 <tr>
						 
						 	<?php
						 	$xml=simplexml_load_file("staff.xml") or die("Error: Cannot create object");
								$x = sizeof($xml);
								
								for($i=0;$i<$x;$i++)
								{
									
									$address=$xml->staff[$i]->address;
									echo "<tr><td>".$xml->staff[$i]->staff_id."</td><td>".$xml->staff[$i]->surname."</td><td>".$xml->staff[$i]->givenname."</td><td>".$xml->staff[$i]->email."</td><td><a href='https://www.google.co.in/maps/place/$address' target='_blank'>".$xml->staff[$i]->address."</a></td></tr>";
								}
						 	
}
						 	?>
						 	
						 </tr>
					</table>
					
				</div>
				</div>
				</div>
				
				
			</div>
			
		</div>
		
	</body>
</html>