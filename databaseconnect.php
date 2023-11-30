<?php
$localhost="localhost";
$username="root";
$password="";
$mysqlc=mysqli_connect($localhost,$username,$password);
$db='project';
$dbc=mysqli_select_db($mysqlc,$db);



?>