<?php

include "./conn.php";

if(isset($_POST['appointment'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];

    $q = " INSERT INTO `appt`(`name`, `email`, `phone`, `date`) VALUES ('$name','$email','$phone','$date') ";
    $res = mysqli_query($conn, $q);

    if($res)
    {
        $msg = "your appointment booked!";
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('$msg');
            window.location.href='./index.php';
            </script>");
    }
    else{
        $msg = "Failed to book your appointment";
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('$msg');
            window.location.href='./index.php;
            </script>");
    }
}

?>