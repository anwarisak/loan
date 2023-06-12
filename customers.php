<?php
include("conn.php");

if (isset($_POST["fullname"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $responsible_number = $_POST["responsible_number"];

    $res = $conn->query("insert into customers(fullname,email, number, responsible_number)values('{$fullname}','{$email}','{$number}','{$responsible_number}')");

    if ($res) {
        echo "the customer has been registered ";
    } else {
        echo "please fill the blank space ";
    }
}
