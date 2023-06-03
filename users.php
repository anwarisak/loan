<?php

include("conn.php");

if (isset($_GET["username"])) {
    $username = $_GET["username"];
    $password = $_GET["password"];

    $response = array();
    $res = $conn->query("select user_id from user where username = '{$username}' and password = '{$password}'");

    if ($res->rowCount() > 0) {

        while ($row = $res->fetch()) {
            array_push($response, array(
                'status' => "true", 'user_id' => $row['user_id']
            ));
        }
    } else {
        array_push($response, array('status' => "no", 'sms' => "username or password is incorrect"));
    }
    echo json_encode($response);
}
