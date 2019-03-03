<?php
include 'db.php';
if(isset($_POST['adduser'])){
	$username=$_POST['uname'];
	$pass=$_POST['password'];
	$priv=$_POST['priv'];
	$insert=oci_parse($con, "insert into users values(users_seq.nextval,'$username','$pass','$priv')");
	if($insert){
		oci_execute($insert);
		echo "Thank you for adding a user";
	}
}
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
				<div class="col-md-8">
					
				
				<h1>Add new user</h1>
				
				<div class="row" id="container" >
					<form method="post">
					<label>Username</label>
					<input type="text" name="uname" />
					<br />
					<label>Password</label>
					<input type="password" name="password" />
					<br />
					<label>Privilege</label>
					<select name="priv">
						<option value="admin">Administrator</option>
						<option value="normal">Normal</option>
						
					</select>
					<br>
					<input type="submit" name="adduser" value="Add user" />
				</form>
				</div>
				</div>
				
				
			</div>
			
		</div>
		
	</body>
</html>