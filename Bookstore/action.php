<?php
include 'db.php';
if(isset($_POST['send'])){
	echo "string";
	exit;
	$name=$_POST['names'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$sql=oci_parse($con, "INSERT INTO contact values(NULL,'$name','$email','$subject','$message')");
	oci_execute($sql);
	if($sql){
		echo "Thank you for contact us. we will get back to you soon";
	}else{
		echo oci_error();
	}
	
	ocicommit();
	ocilogoff ($con); 
}
/*if(isset($_POST['post'])){
	$isbn=$_POST['isbn'];
	$field=$_POST['field'];
	$title=$_POST['title'];
	$year=$_POST['year'];
	$author=$_POST['author'];
	$desc=$_POST['desc'];
	$dir = 'images/';

			$file = $_FILES['image']['tmp_name'];
			//$imagetype=$file['mime'];
			if (!isset($file)) {
				echo 'Please select an Image';
			} else {
				$image_check = getimagesize($_FILES['image']['tmp_name']);
				if ($image_check == false) {
					echo 'Not a Valid Image';
				} else {
					$fileName = basename($_FILES['image']['name']);
					$tmpName = $_FILES['image']['tmp_name'];
					$fileSize = $_FILES['image']['size'];
					$fileType = $_FILES['image']['type'];
					$filePath = $dir . $fileName;
					$image = ($_FILES['image']['tmp_name']);
					$photo = basename($_FILES['image']['name']);
					//$photos=basename($_FILES[$dir]['name']);
					$sql = oci_parse($con, "INSERT INTO books values('$isbn','$field','$title','$year','$author','$desc','$filePath')");
					if ($sql) {
						if (move_uploaded_file($tmpName, $dir . $fileName)) {
						
						echo "Thank you";
					} else {

						echo "image not stored";
					}
						
					} else {
						echo oci_error();
					}

					
				}
			}
			
}
*/

if(isset($_POST['getBooks'])){
	$sql=OCIparse($con, "SELECT * FROM books");
	
	ociexecute($sql);
	while (ocifetch($sql)) {
		$isbn=ociresult($sql,1);
		$field=ociresult($sql,2);
		$title=ociresult($sql,3);
		$year=ociresult($sql,4);
		$author=ociresult($sql,5);
		$desc=ociresult($sql,7);
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
}

if(isset($_POST['viewcontact'])){
	$sql=oci_parse($con, "SELECT * FROM contact");
	echo "<table style='width:100%;'>
		<tr>
		<th>NAMES</th><th>EMAIL</th><th>Subject</th><th>Message</th>
		</tr>";
		ociexecute($sql);
	while ($fetch=oci_fetch_array($sql, OCI_RETURN_NULLS+OCI_ASSOC)) {
		$names=$fetch['names'];
		$email=$fetch['email'];
		$subject=$fetch['subject'];
		$message=$fetch['message'];
		
		
		echo "
		<tr>
		
		<td>$names</td>
		<td>$email</td>
		<td>$subject</td>
		<td>$message</td>
		
		</tr>
		
		";
		
		
	}
	
	
}
if(isset($_POST['search'])){
	$keyword=strtoupper($_POST['keyword']);
	
						$sql=oci_parse($con, "SELECT * FROM books where upper(title) LIKE '%$keyword%' or upper(author) LIKE '%$keyword%' or upper(field) LIKE '%$keyword%'");
						$count=oci_num_rows($sql);
						
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
}
?>