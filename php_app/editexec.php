<?php
include('config.php');


if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);

	
		
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"br/" . $_FILES["image"]["name"]);
			
			$location="br/" . $_FILES["image"]["name"];
			$id=$_POST['id'];
			$brnu=$_POST['brnu'];
			$mnu=$_POST['mnu'];
			$venue=$_POST['venue'];
			$date=$_POST['date'];
			$combo=$_POST['combo'];

			$update=mysql_query("Update board SET br_no = '$brnu', m_no = '$mnu', pitsa = '$date', imp_dept = '$combo', content = '$location', venue = '$venue' where br_id='$id'");
			header("location: br.php");
			exit();
		
			
	}


?>
