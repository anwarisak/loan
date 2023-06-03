<?php

$conn = new mysqli("localhost", "root", "", "LoanApp");

if ($conn->connect_error) {
    echo $conn->error;
}
