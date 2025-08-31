<?php
// Database connection variables
$servername = "localhost";
$username = "root";  // Default XAMPP MySQL user
$password = "";      // Default XAMPP MySQL password is empty
$dbname = "event_booking"; // The database you created earlier

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$user_name = $_POST['username'];
$event_date = $_POST['eventDate'];
$mobile_number = $_POST['mobileNumber'];

// Insert data into the database
$sql = "INSERT INTO bookings (username, event_date, mobile_number) 
        VALUES ('$user_name', '$event_date', '$mobile_number')";

if ($conn->query($sql) === TRUE) {
    echo "New booking created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
