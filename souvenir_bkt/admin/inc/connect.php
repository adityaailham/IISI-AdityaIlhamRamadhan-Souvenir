<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "adit020100";
	$port = "5432";
	$dbname = "souvenir";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
	
?>