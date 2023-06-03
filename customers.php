<?php
include("conn.php");

if (isset($_POST["fullname"])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $bailnumber = $_POST["bailnumber"];

    $res = $conn->query("insert into customers(fullname,email, number, bailnumber)values('{$fullname}','{$email}','{$number}','{$bailnumber}')");


    if ($res) {
        echo "the customer has been registered ";
    } else {
        echo "please fill the blank space ";
    }
}
