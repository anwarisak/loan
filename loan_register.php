<?php
include("connection.php");
// $_POST["amount"] = "70";
// $_POST["customer"] = "2";


if (isset($_POST["item"])) {

    $customer = $_POST["customer"];
    $item = $_POST["item"];
    $scheme_type = $_POST["scheme_type"];
    $total_price = $_POST["total_price"];
    $loan_type = $_POST["loan_type"];

    // $sql = "insert into loan(customer_id,scheme_type_id,item, total_price) values('{$customer}','{$scheme_type}','{$item}','{$total_price}')";
    //   $sql = "insert into loan(customer_id,amount) values('{$customer}','{$amount}')";
    $sql = "call loan_register('$customer','$item','$scheme_type','$total_price','$loan_type')";
    $res = mysqli_query($conn, $sql);

    if ($res) {

        echo "the loan has been registered";
    } else {
        echo "samething went wrong";
    }
}
