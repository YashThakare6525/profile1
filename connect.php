<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $conn = new mysqli("127.0.0.1","root","","contact");
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullname,email,number,message)
        values(?,?,?,?)");
        $stmt->bind_param("ssis",$fullname,$email,$number,$message);
        $stmt->execute();
        echo"Registration Succesfully...";
        $stmt->close();
        $conn->close();
    }

    ?>