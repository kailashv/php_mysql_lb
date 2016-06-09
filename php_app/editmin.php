<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM minute where min_id='$get'");
				
				while($row = mysql_fetch_array($result))
				  {
				  $category=$row['category'];
				  $mnu=$row['mnu'];
				  $venue=$row['venue'];
				  $date=$row['date'];
				  }
?> 
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
   <!--para sa add data sa textbox -->
	<SCRIPT language="javascript">
<!--

function addCombo() {
	var textb = document.getElementById("txtCombo");
	var combo = document.getElementById("combo");
	combo.value=combo.value +textb.value + ", ";
	textb.value = "";
}
//-->
</SCRIPT>
	<!--end-->
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
<form action="editminuteexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Category<br />
  <input name="category" type="text" class="ed" id="category" value="<?php echo $category; ?>" /><input name="id" type="hidden" class="ed" id="category" value="<?php echo $get; ?>" />
  <br />
 Meeting Number <br />
    <input name="mnu" type="text" id="mnu" class="ed" onkeypress="return isNumberKey(event)" value="<?php echo $mnu; ?>" />
    <br />
 Venue<br />
    <input name="venue" type="text" id="venue" class="ed" onkeypress="return isNumberKey(event)" value="<?php echo $venue; ?>" />
    <br />
 Date<br />
  	<input type="text" name="date" class="tcal" value="<?php echo $date; ?>" />
  <br />
 
 Content: <br />
 <input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
