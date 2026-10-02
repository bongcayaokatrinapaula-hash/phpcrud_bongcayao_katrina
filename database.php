<?php

$conn = new mysqli('localhost', 'root', '', 'students');

if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}
?>