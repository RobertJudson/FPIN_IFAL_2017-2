<?php

    $conn = new mysqli("localhost", "root", "", "wikilitica");

    if($conn->connect_error){
        echo "Error: " . $conn->connect_error;
        exit;
    }

?>