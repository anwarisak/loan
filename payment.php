<?php
include("connection.php");
// $_POST["amount"] = "70";
// $_POST["customer_id"] = "2";


if (isset($_POST["amount"])) {

    $customer_id = $_POST["customer_id"];
    $amount = $_POST["amount"];
    $account_id = $_POST["account_id"];

    // $sql = "insert into loan(customer_id_id,account_id_id,amount, total_price) values('{$customer_id}','{$account_id}','{$amount}','{$total_price}')";
    //   $sql = "insert into loan(customer_id_id,amount) values('{$customer_id}','{$amount}')";
    $sql = "call pay('$customer_id','$amount','$account_id')";
    $res = mysqli_query($conn, $sql);

    if ($res) {

        echo "the payment has been registered";
    } else {
        echo "samething went wrong";
    }
}
