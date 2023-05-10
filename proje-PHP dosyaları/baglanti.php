<?php

	$conn = mysqli_connect("localhost","root","","dershane");


	if(!$conn){
		die("Bağlantı işlemi başarısız. ".mysqli_connect_error());
	}



?>