<?php
include 'db.php';
//$url = ('staff.xml');
 // $xml = simplexml_load_file( urlencode($url), null, true);
 if(isset($_POST['delete'])){
 	$uname=$_POST['username'];
	 $delete=oci_parse($con, "DELETE from users where username='$uname'");
	 if($delete){
	 	oci_execute($delete);
		 echo "You just deleted a record";
	 }
 }
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
					
				
				<h3>Delete user</h3>
				
				<div class="row" id="container" >
					<form method="post">
					<label>Enter username to delete</label>
					<input type="text" name="username" size="50" required />
					<br />
					<input type="submit" name="delete" value="Delete user" />
				</form>
				</div>
				</div>
				
				
			</div>
			
		</div>
		
	</body>
</html>