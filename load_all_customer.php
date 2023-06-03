<?php
require_once("connection.php");

$sql = "select * from customers";
if (!$conn->query($sql)) {
    echo "error in connecting database.";
} else {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $return_arr['customers'] = array();
        while ($row = $result->fetch_array()) {
            array_push($return_arr['customers'], array(
                'customer_id' => $row['customer_id'],
                'fullname' => $row['fullname'],

            ));
        }
        echo json_encode($return_arr);
    }
}
