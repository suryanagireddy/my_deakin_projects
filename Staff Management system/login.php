<?php
session_start();
$str = rand(50,100000);
require 'db.php';
if(isset($_POST['login'])){
	$capture=$_POST['capture'];
	$str=$_POST['cap'];
	$username=$_POST['uname'];
	$password=$_POST['password'];
	
	
	if(!empty($capture)){
		
		
		if($capture==$str){
			if(!empty($username) && !empty($password)){
				
				//$query = "select * from user where username='$username' and password='$password";
	
$stmt = oci_parse($con, "select * from users where username='$username' and password='$password'");
if(!$stmt) 
{
echo "error occured";
exit;
}
else{
oci_execute($stmt);
//$row = oci_fetch_array($stmt);
//$res=oci_num_rows($stmt); 
if($res==0){
	
	while(ocifetch($stmt)) 
	{
		$_SESSION['staff_id']=ociresult($stmt,2);
		$_SESSION['type']=ociresult($stmt,4);
		header('Location:index.php');
	}
}
else{ 

		echo "you are not registered";
	}}
				}else{
					echo "fill all fields";
				}
			}else{
				echo "wrong capture";
			}
			
		}
		else
		{
			echo "fill capture";
		}
		
		
	

}


?>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />

		<script src="js/jquery2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js" ></script>

		<script src="js/main.js" type="text/javascript"></script>

	</head>
	<body>
		<div class="container" style="border: 2px solid blue;margin-top:5px ">
			<div class="row">
				<div class="col-md-5" style="background-color: skyblue;margin: 2px">
					<a href="index.php">Home</a>
					<br />
					<br />
					<br />
					<form method="post">
						<label>Username: </label>
						<input type="text" name="uname" id="uname" size="30" />
						<br />
						<br />
						<label>Password:</label>
						<input type="password" name="password" id="password" size="30" />
						<br />
						<br />
						<center>
							<div style="text-align: center;background: brown;color:white;width: 50px;">
								<input type="text" style="background-color:black " value="<?php	echo $str; ?>" name="cap"/>
							</div>
						</center>
						<label>Capture
							<br />
							String</label>
						<input type="text" name="capture" id="capture" size="30" />
						<br />
						<input type="submit" name="login" value="Login" id="login" />
					</form>
					for guest access: username/password is guest/SIT780
				</div>
				<div class="col-md-5">
					<h2><b>Access limited</b></h2>
					<p>
						This function is available for authorized users only
					</p>
					<p>
						You must log in first before using
					</p>
				</div>
			</div>
		</div>

	</body>
</html>