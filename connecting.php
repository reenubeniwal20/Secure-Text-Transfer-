<?php 
$email=$_POST['email'];
$message=$_POST['message'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "ostt";  
    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
	else{
		$stmt = $conn->prepare("insert into contact(email,message) values(?,?)");
		$stmt->bind_param("ss",$email,$message);
		$stmt->execute();
		echo " connection successfull";
		$stmt->close();
	}
    
    ?>