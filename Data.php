<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdetails";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Get the form data
$data = json_decode(file_get_contents('php://input'), true);
// Insert the data into the database
$name = isset($data['Name']) ? $data['Name'] : '';
$number = isset($data['Number']) ? $data['Number'] : '';
$email = isset($data['Email']) ? $data['Email'] : '';
$input_language = isset($data['Input Language']) ? $data['Input Language'] : '';
$output_language = isset($data['Output Language']) ? $data['Output Language'] : '';
$date = isset($data['Date']) ? $data['Date'] : '';
$sql = "INSERT INTO datauser (name, number, email, input_language, output_language, date) VALUES ('$name', '$number', '$email', '$input_language', '$output_language', '$date')";
if ($conn->query($sql) === TRUE) {
    echo "Form data saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

