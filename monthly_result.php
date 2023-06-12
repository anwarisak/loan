<?php
include("conn.php");

if (isset($_GET)) {

    $response = array();


    $res = $conn->query("select fullname,name,loan_type, 
    (TRUNCATE(total_price/scheme_type.number+(total_price/scheme_type.number * interest_rate),1) ) 
    as per_month from loan join scheme_type using(scheme_type_id) join customers using(customer_id)");

    if ($res->rowCount() > 0) {

        while ($row = $res->fetch()) {
            array_push($response, array(
                'status' => "true", 'fullname' => $row['fullname'], 'name' => $row['name'],
                'loan_type' => $row['loan_type'],
                'per_month' => $row['per_month']
            ));
        }
    } else {
        array_push($response, array('status' => "false", 'sms' => "samthing went wrong"));
    }
    echo json_encode($response);
}
