<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);

	
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"policy/" . $_FILES["image"]["name"]);
			
			$location="policy/" . $_FILES["image"]["name"];
			$pnu=$_POST['pnu'];
			$title=$_POST['title'];
			$br=$_POST['br'];
			$spn=$_POST['spn'];
			$sbn=$_POST['sbn'];
			$date=$_POST['date'];
			$combo=$_POST['combo'];
			

			
			$update=mysql_query("INSERT INTO policy (pnu, title, br, spn, sbn, date, combo, content)
VALUES
('$pnu','$title','$br','$spn','$sbn','$date','$combo','$location')");
			
			
			header("location: policy.php");
			exit();
		
			
	}


?>
