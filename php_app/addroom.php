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
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");

		}
		else if(selectedOption == "2")
		{
			displayDiv(prefix,"1");

		}
		else if(selectedOption == "3")
		{
			displayDiv(prefix,"2");

		}
		else if(selectedOption == "4")
		{
			displayDiv(prefix,"1");

		}
		
		
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>
<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 BR Number <br />
  <input name="brnu" type="text" class="ed" id="brnu" />
  <br />
 Meeting Number <br />
    <input name="mnu" type="text" id="mnu" class="ed" onkeypress="return isNumberKey(event)" />
    <br />
 Venue<br />
    <input name="venue" type="text" id="venue" class="ed" onkeypress="return isNumberKey(event)" />
    <br />
 Date<br />
  	<input type="text" name="date" class="tcal" value="<?php echo date("m/d/Y"); ?>" />  <br />
<label>Category<br>
	<select name="category" id="cboOptions" onChange="showDiv('div',this)" class="ed">
	<option value="1">Coop Membership</option>
	<option value="2">Utilization of Reinvestment Fund</option>
	<option value="3">Line Extension</option>
	<option value="4">Policy</option>
	</select>
	
    <br>
	
<div id="div1" style="display:none;">
<?php
    $month = date("n"); //without leading zero(o)
    $year = date("Y"); //four digit format
    $st_year = "2010"; //Starting Year
    $month_names = array("January", "February", "March","April", "May", "June", "July", "August", "September", "October", "November", "December");
?>

 <select name="month" id="month">
<?php
for ($i=1; $i<=12; $i++) {
    echo "<option ";
    if ($i == $month) {
        echo "selected=\"selected\" ";
    }
    echo "value=\"$i\">", $month_names[$i-1], "</option>\n";
}
?>
</select>
<select name="year" id="year">
<?php
for ($i=$st_year; $i<=$year; $i++) {
    echo "<option ";
    if ($i == $year) {
        echo "selected=\"selected\" ";
    }
    echo "value=\"$i\">$i</option>\n";
}
?>
</select>

</div>
<div id="div2" style="display:none;">
Area<br />
<?php
include('config.php');
$name= mysql_query("select * from area");

echo '<select name="area" id="area" class="ed">';
echo '<option selected="selected" value="0">Select</option>';
 while($res= mysql_fetch_assoc($name))
{
echo '<option value='.$res['id'].'>';
echo $res['area_code'];
echo'</option>';
}
echo'</select>';

?>
</div>
 Implementing Department <br />
 <input name="combo" type="text" class="ed" id="combo" size="50" />
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
