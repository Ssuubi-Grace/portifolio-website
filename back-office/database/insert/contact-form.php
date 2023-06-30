<?php

// Escape special characters to prevent SQL injection
$full_name = mysqli_real_escape_string($conn, $full_name);
$email = mysqli_real_escape_string($conn, $email);
$phone = mysqli_real_escape_string($conn, $phone);
$get_message = mysqli_real_escape_string($conn, $get_message);
$get_subject = mysqli_real_escape_string($conn, $get_subject);

// Create SQL query to insert data into the table
$sql = "INSERT INTO contact_form (full_name, e_mail, phone, message, subject)
        VALUES ('$full_name', '$email', '$phone', '$get_message', '$get_subject')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    //echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
