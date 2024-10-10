<?php

require_once 'dbConfig.php';
require_once 'models.php';

if(isset($_POST['insertNewShopBtn'])){
    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['emailAdress'];
    $license_number = $_POST['licenseNumber'];
    $contact_no = $_POST['contactNumber'];
    $body_number = $_POST['bodyNumber'];
    $plate_number= $_POST['plateNumber'];
    $date_added = $_POST['dateAdded'];

    $query = insertIntoStallRecords($pdo, $first_name, $last_name, $email, $license_number,  $contact_no, $body_number,
    $plate_number, $date_added);

    if($query){
        header("Location: ../index.php");
    }
    else{
        echo "Query failed";
    }
}

?>