<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);

	
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"students3k/" . $_FILES["image"]["name"]);
			
			$location="nea/" . $_FILES["image"]["name"];
			$id=$_POST['id'];
			

			
			$update=mysql_query("UPDATE board SET nea='$location' where br_id='$id'");
			
			
			header("location: br.php");
			exit();
		
			
	}


?>
