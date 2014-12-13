<?php

$dbhost="localhost";

$dbusername="root";

$dbpassword="admin";

$dbname="prafulla";



//Before you can perform any operation on a database you must connect to the MySQL server. The syntax for performing this operation is simple:

$connect = mysql_connect($dbhost, $dbusername, $dbpassword);

mysql_select_db($dbname,$connect) or die ("Could not select database");

?>