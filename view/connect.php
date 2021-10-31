<?php
	$con=mysql_connect("localhost","root","") or die ("DOWN!");
		if ($con) {
			mysql_select_db("std_db",$con);
           
		}
		else
		{
			die("DOWN");
		}	
?>
