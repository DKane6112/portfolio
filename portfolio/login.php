<?php
$user_input_name = $_POST['username'];
$user_input_pass = $_POST['password'];

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($user_input_pass == $row['PASSWORD']) {
        
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user_input_name;
        
    header("location: post.php");
    
} else {
    
    echo "No user found with the username $user_input_name.";
}
?>

