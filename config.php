<?php

	$servername = "localhost";
        $user = "pc";
        $password = "-3mp)Wxgs5TJRarf";
        $database = "sparksbank";

// Create connection
        $conn = mysqli_connect($servername, $user, $password, $database) ;
        if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
