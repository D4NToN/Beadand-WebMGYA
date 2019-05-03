<?php
$dBServername = "localhost";
$dBUsername = "loginsyst";
$dBPassword = "administrator";
$dBName = "loginsyst";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}