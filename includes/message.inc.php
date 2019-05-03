<?php

    $dBServername = "localhost";
    $dBUsername = "loginsyst";
    $dBPassword = "administrator";
    $dBName = "loginsyst";

    $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    date_default_timezone_set('Europe/Budapest');

    function setComments($conn){
        if(isset($_POST['send-submit'])){
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $message = $_POST['message'];

            $sql = "INSERT INTO messagesystem (uid, date, message) VALUES ('$uid','$date','$message')";
            $reslt = $conn->query($sql);
        }
    }
?>