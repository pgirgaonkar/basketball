<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type"
content="text/html; charset=windows-1252" />
<meta name="description" content="" />
<meta name="generator" content="HTML-Kit" />
<title>My Basketball Club</title>
<style type="text/css">
<!--
body {margin: 0; padding: 0; font: normal 82% sans-serif; background-image: url(blocksbg1.jpg); background-attachment: fixed;}
h1 {margin: 0; margin-bottom: 0px; padding: 8px; color: #ffffff; background-image: url(laptop1.jpg); background-color: #CCCCFF;}
.tagline {font-size: 60%; color: #ffffff;}

#search {float: right; width: 280px; padding: 5px; text-align: right;}
.button {border: outset; 2px #000000; background-color: #CC99FF; color: #ffffff; font-weight: bold;}
.text {border: solid 1px #000000; background-color: #eeeeee;}

#bread {margin-top: 0px; margin-bottom: 10px; padding: 5px; border-top: solid 1px #000000; border-bottom: solid 1px #000000; background-color: #CC99FF; text-align: right;}
#bread a {margin-left: 2px; margin-right: 2px; color: #000000; text-decoration: none;}
#bread a:hover {text-decoration: underline;}

#left {float: left; width: 18%; border: solid 1px #cccccc; margin-bottom: 15px; background-color: #ffffff; border-top: 0;}
#left ul {list-style: none; margin: 0; padding: 0;}
#left li {margin: 0px; padding: 0px;}
#left a {display: block; width: 95.5%; margin: 0px; padding: 2px; border: solid 1px #ffffff; color: #CC99FF; text-decoration: none;}
#left a:hover {border: solid 1px #0066cc; background-color: #0066cc; color: #ffffff;}
#left h3 {margin: 0; padding: 2px; font-weight: normal; background-color: #CC99FF; border-top: solid 1px #000000; border-bottom: solid 1px #000000;}

#content {margin-left: 20%; padding: 0; border-left: solid 1px #cccccc; border-top: 0; border-bottom: solid 1px #ffffff;  background-color: #ffffff;}
#content h3 {margin: 0; padding: 2px; font-weight: normal; background-color: #CC99FF; border-top: solid 1px #000000; border-bottom: solid 1px #000000;}
#content p {margin: 5px; color: #000000;}
#content a {color: #0066cc; text-decoration: none;}
#content a:hover {color: #0000ff; text-decoration: underline;}
#content .point {margin: 3%; padding: 0px; border: solid 1px #000000; border-top: 0; background-color: #f9f9f9;}
#content .point h3 {}
#content .code {margin: 3%; padding: 7px; border: solid 1px #cccccc; background-color: #eeeeee; font: normal 100% courier; color: #000000;}

#footer {clear: both; margin-top: 0px; padding: 5px; border: solid 1px #cccccc; background-color: #CCCCFF;}
#footer p {float: left; margin: 0;}
#footer h5 {margin: 0; text-align: right; color: #000000;}
#footer a {margin-left: 2px; margin-right: 2px; color: #000000; text-decoration: none;}
#footer a:hover {text-decoration: underline;}

-->
</style>

</head>

<body>
<h1>My Basketball <span class="tagline"></span></h1>


<div id="left">
<h3>Home ::.</h3>
<?php

include("config.php");

		//

		//$sql="SELECT * FROM employee";
		$sql="SELECT * FROM matchinfo";
$result=mysql_query($sql);

// Define $color=1
$color="1";

echo '<table  border="0" cellpadding="3" cellspacing="0">
<tr>

		</tr>';
while($rows=mysql_fetch_array($result)){
	$ID = $row['id'];
        				$code = $row['code'];
						$game = $row['code'];
$myFolderP = "/".$code."/"."index.php";
echo "<tr bgcolor='#FCFCF6'>
 <td> <a href=\"".$rows['id']."/index.php?id=".$rows[ID]."\" style=\"text-decoration:none\">".$rows['code']."</a></td>
</tr>";
// Set $color==2, for switching to other color

}



echo '</table>';

?>
</div>

<div id="content">
<h3>Match Details </h3>
<p></p>
<div class="point">
<h3>Welcome to my page::.</h3>
<p>Welcome to my page!</p>
</div>
<p>&nbsp;</p>

</div>

<div id="footer">

<h5>&nbsp;</h5>
</div>
</body>

</html>
