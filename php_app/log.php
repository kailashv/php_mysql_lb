<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
  
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>  
  
  
  
</head>
<body>
<div class="main">
	<div class="header">
		<div class="header_resize">
			<div class="menu_nav">
				<ul>
					<li><a href="policy.php">Policies</a></li>
					<li class="active"><a href="br.php">Board Resolution </a></li>
					<li><a href="minute.php">Minutes</a></li>
					<li><a href="proceedings.php">Proceedings</a></li>
					<li><a href="index.php">Logout</a></li>
				</ul>
				<div class="clr"></div>
			</div>
			
			<div class="clr"></div>
			<div class="logo"><h1><img src="images/SDSDSDS.jpg" style="width: 970px; margin-top: -99px; height: 269px;" /></h1></div>
		</div>
	</div>
	<div class="content">
		
		<div class="fbg_resize">
	<div id="pagewrap">
<div id="search">
        <label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
      </div>
	 <div id="body">
<table cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="#33FF00" style="margin-bottom:10px;">
              <th> Download By </th>
              <th> Filename </th>
              <th> Date and Time </th>
            </tr>
          </thead>
          <tbody>
				<?php
				include('config.php');
				$result = mysql_query("SELECT * FROM log");
				
				while($row = mysql_fetch_array($result))
				  {
					echo '<tr>';
					  echo '<td><div align="center">'.$row['downloaby'].'</div></td>';
					  echo '<td><div align="center">'.$row['filename'].'</div></td>';
					  echo '<td><div align="center">'.$row['date'].'</div></td>';
					echo '</tr>';  
				  }
				
				?> 
          </tbody>
       </table>
      </div>
    </div>	  
	  
		  <div class="clr"></div>
	  </div>
	</div>
	<div class="footer">
		<div class="footer_resize">
			<p class="lf">&copy; Copyright Students3K.com. Developed by Karthikh Venkat </p>
				<ul class="fmenu">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="http://students3kcom">Support</a></li>
				<li><a href="http://students3kcom">Blog</a></li>
				<li><a href="http://students3kcom">About Us</a></li>
				<li><a href="#">Contacts</a></li>
			</ul><br/>
			<div class="clr"></div>
		</div>
	</div>
</div>
</body>
</html>