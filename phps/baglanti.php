<?php

//	$conn = new mysqli("localhost","root","","dershane");
	$conn = new PDO("mysql:host=localhost;dbname=dershane","root","");
	if(!$conn){
		die("Bağlantı işlemi başarısız. ".mysqli_connect_error());
	}
	$conn->query("SET SQL_SAFE_UPDATES = 0;");


?>