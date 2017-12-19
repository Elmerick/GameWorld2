<?php
function connectToDB()
{
    $host    = "localhost";
    $user    = "root";
    $pass    = "";
    $dB      = "gameworld2";

    $conn = new mysqli($host, $user, $pass, $dB);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        return $conn;
    }


}
?>
