<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cp_2";
 $conn=mysqli_connect($servername,$username,$password,$dbname);

 
 if(!$conn)
 {
	 die("connection failed: " .mysqli_connect_error());
 }
 else
 {
	// echo "connected";
 }
  ?>
 