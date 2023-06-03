<?php
include("conn.php");

if (isset($_GET)) {

    $response = array();


    $res = $conn->query("select fullname, email, number, bailnumber, date from customers");

    if ($res->rowCount() > 0) {

        while ($row = $res->fetch()) {
            array_push($response, array(
                'status' => "true", 'fullname' => $row['fullname'], 'email' => $row['email'],
                'number' => $row['number'],
                'bailnumber' => $row['bailnumber'], 'date' => $row['date']
            ));
        }
    } else {
        array_push($response, array('status' => "false", 'sms' => "this customer is not exist"));
    }
    echo json_encode($response);
}
