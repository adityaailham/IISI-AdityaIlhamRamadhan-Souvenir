<?php
	$host = "ec2-35-172-246-19.compute-1.amazonaws.com";
	$user = "yotncnigqqrjcb";
	$pass = "47802a98b6f56a4d66a477002fbb0db28d8081272bba01d3217262266cd53f8b";
	$port = "5432";
	$dbname = "d6p1q9h0u61iub";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
	
?>
