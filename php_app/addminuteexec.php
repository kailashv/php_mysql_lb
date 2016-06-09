<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);

	
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"minute/" . $_FILES["image"]["name"]);
			
			$location="minute/" . $_FILES["image"]["name"];
			$category=$_POST['category'];
			$mnu=$_POST['mnu'];
			$venue=$_POST['venue'];
			$date=$_POST['date'];
			

			
			$update=mysql_query("INSERT INTO minute (category, mnu, venue, date, content)
VALUES
('$category','$mnu','$venue','$date','$location')");
			
			
			header("location: minute.php");
			exit();
		
			
	}


?>
