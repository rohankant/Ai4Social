<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdetails";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Execute the SELECT query
$sql = "SELECT * FROM datauser";
$result = mysqli_query($conn, $sql);
// Check if the query was successful
if ($result) {
    // Display the results
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["name"] . "<br>";
        echo "Number: " . $row["number"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Input Language: " . $row["input_language"] . "<br>";
        echo "Output Language: " . $row["output_language"] . "<br>";
        echo "Date: " . $row["date"] . "<br><br>";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}
// Close the database connection
mysqli_close($conn);
?>
