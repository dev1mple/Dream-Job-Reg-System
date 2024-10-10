<?php

require_once 'dbConfig.php';

function insertIntoStallRecords($pdo, $first_name, $last_name, $email, $license_number, $contact_no,
$body_number, $plate_number, $date_added){

    $sql = "INSERT INTO tricycle_reg (first_name, last_name, email, license_number, contact_no, body_number,
    plate_number, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $license_number, $contact_no,
    $body_number, $plate_number, $date_added]);

    if ($executeQuery){
        return true;
    }
}