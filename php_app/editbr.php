<?php
				include('config.php');
				$get=$_GET['id'];
				$result = mysql_query("SELECT * FROM board where br_id='$get'");
				
				while($row = mysql_fetch_array($result))
				  {
				  $brnum=$row['br_no'];
				  $m_no=$row['m_no'];
				  $venue=$row['venue'];
				  $pitsa=$row['pitsa'];
				  $imp_dept=$row['imp_dept'];
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
<form action="editexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 BR Number <br />
  <input name="brnu" type="text" class="ed" id="brnu" value="<?php echo $brnum ?>" /><input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $get ?>" />
  <br />
 Meeting Number <br />
    <input name="mnu" type="text" id="mnu" class="ed" onkeypress="return isNumberKey(event)" value="<?php echo $m_no ?>" />
    <br />
 Venue<br />
    <input name="venue" type="text" id="venue" class="ed" onkeypress="return isNumberKey(event)" value="<?php echo $venue ?>" />
    <br />
 Date<br />
  	<input type="text" name="date" class="tcal" value="<?php echo $pitsa ?>" />  <br />
	
 Implementing Department <br />
 <input name="combo" type="text" class="ed" id="combo" size="50" value="<?php echo $imp_dept ?>" />
 <?php
include('config.php');
$name= mysql_query("select * from departments");

echo '<select name="txtCombo"  id="txtCombo" class="ed">';
echo '<option selected="selected">Select</option>';
 while($res= mysql_fetch_assoc($name))
{

echo '<option>';
echo $res['department'];
echo'</option>';
}
echo'</select>';



?>
 <input name="button" type="button" style="cursor:pointer;" onclick="addCombo()" value="Add" id="button1" />
<br />
 
 Room Image: <br /><input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
