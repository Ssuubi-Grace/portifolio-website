<?php

//Establish the connection to the database
include_once("../dbconnect.php");

//Creation of the contact form table 
$sql = "CREATE TABLE contact_form (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    e_mail VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT NOT NULL,
    subject VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}