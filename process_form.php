<?php
// Connection parameters
$hostname = "localhost";
$username = "root";
$password = "";
$database = "user_accounts";

// Create a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password before storing it
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL query to insert data
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        echo "Account created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
