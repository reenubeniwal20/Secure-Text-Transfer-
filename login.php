<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "select * from contact where email = '$email' and message = '$message'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("Location: welcom.php");
        }    
    }
    ?>