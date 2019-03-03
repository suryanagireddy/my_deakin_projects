<?php
session_start();
if(!isset($_SESSION['staff_id'])){
	header('location: login.php');
}
if(isset($_POST['addstaff'])){
	function c_element($_name,$parent){
		global $xml;
		$node=$xml->createElement($_name);
		$parent->appendChild($node);
		return $node;
	}
	function c_value($value,$parent){
		global $xml;
		$value =$xml->createTextNode($value);
		$parent->appendChild($value);
		return $value;
	}
	

    $staffid = $_POST['staff_id'];
	$email=$_POST['email'];
	$gname=$_POST['gname'];
	$sname=$_POST['surname'];
	$address=$_POST['address'];
	$xml= new DOMDocument("1.0");
	$xml ->load("staff.xml");
	
	
		
    $root = $xml->getElementsByTagName("staffdata") ->item(0);
	$staff=c_element("staff",$root);
	
	
	$staff_id=c_element("staff_id",$staff);
	c_value("$staffid",$staff_id);
	
	$email2=c_element("email",$staff);
	c_value("$email",$email2);
	
	$gname2=c_element("givenname",$staff);
	c_value("$gname",$gname2);
	
	$sname2=c_element("surname",$staff);
	c_value("$sname",$sname2);
	
	$address2=c_element("address",$staff);
	c_value("$address",$address2);

    $xml ->formoutput=true;

    $xml->save('staff.xml');
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
					
				
				<h3>Add new staff</h3>
				
				<div class="row" id="container" >
					<form method="post">
					<label>Staff_id</label>
					<input type="text" name="staff_id" />
					<br /><br />
					<label>Email</label>
					<input type="email" name="email" />
					<br /><br />
					<label>Given Name</label>
					<input type="text" name="gname" />
					<br><br />
					<label>Surname</label>
					<input type="text" name="surname" />
					<br /><br />
					<label>Address</label>
					<input type="text" name="address" />
					<br /><br />
					<input type="submit" name="addstaff" value="Add user" />
				</form>
				</div>
				</div>
				
				
			</div>
			
		</div>
		
	</body>
</html>