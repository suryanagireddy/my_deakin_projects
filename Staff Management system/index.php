<?php
session_start();
if(isset($_SESSION['staff_id'])){
	$priv=$_SESSION['type'];
	$priv= rtrim($priv);
	$priv= ltrim($priv);

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
				font-size:14px;
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
					<?php
					if($priv=='admin'){
						
					//echo $_SESSION['staff_id'];
					?>
					
				<li>	<a href="index.php">Home</a></li><br />
				<li>	<a href="logout.php">Logout</a></li>
				<li>	<a href="new_staff.php">Add new staff</a></li>
				<li>	<a href="new_user.php">Add new user</a></li>
				<li>	<a href="delete_user.php">Delete a user</a></li>
				<li>	<a href="display_users.php">Display all users</a></li>
				<li>	<a href="view_staff.php">View staff memebers</a></li>
				
				<?php
				}else{
					?>
					<li>	<a href="index.php">Home</a></li><br />
					<li>	<a href="view_staff.php">View staff memebers</a></li>
					<li>	<a href="logout.php">Logout</a></li>
					<?php
				}
				
				?>
				<form method="post">
					
					<label>Surname:</label><input type="text" name="surname" /> <br />
					<label>GivenName:</label><input type="text" name="givenname" /><br />
					<input type="submit" name="search" value="Search" />
				</form>
					</ul>
					<form method="post">
						
						
					</form>
				</div>
				<div class="col-md-8" style='margin-left:20px;'>
					
				
				<h3>Welcome <?php 
				if($priv=='admin'){
					echo "admin";
				}else{
					echo "guest";
				}
				 ?></h3>
				<b>All available functions for you are on the left side of this window. </b>
				<div class="row" id="container" >
					<table id="data" class='staffdata'>
						<tr>
						<th>Staff_ID</th><th>Surname</th><th>Given Name</th><th>E-mail</th><th>Address</th> </tr>
						 <tr>
						 	<?php
						 	
if(isset($_POST['search']))
{
	//echo "if clause sucess".isset($_POST['surname']);
$xml=simplexml_load_file("staff.xml") or die("Error: Cannot create object");
$x = sizeof($xml);

for($i=0;$i<$x;$i++)
{
	$surname=strtoupper($_POST['surname']);
	$givenname=strtoupper($_POST['givenname']);
	$xmlSurname=strtoupper($xml->staff[$i]->surname);
	$xmlGivenname=strtoupper($xml->staff[$i]->givenname);
	$address=$xml->staff[$i]->address;
	if($xmlSurname==$surname || $xmlGivenname==$givenname )
	echo "<tr><td>".$xml->staff[$i]->staff_id."</td><td>".$xml->staff[$i]->surname."</td><td>".$xml->staff[$i]->givenname."</td><td>".$xml->staff[$i]->email."</td><td><a href='https://www.google.co.in/maps/place/$address' target='_blank'>".$xml->staff[$i]->address."</a></td></tr>";
}
//unsset($_POST['surname']);
echo "</table>";
}
else{



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
		<?php
		}else{
			header('location:login.php');
		}
		
		?>
	</body>
</html>