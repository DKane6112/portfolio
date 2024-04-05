<?php


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $temp_file = $_FILES['image']['tmp_name'];
    $target_directory = "img/";
    $new_filename = $target_directory . uniqid() . basename($_FILES['image']['name']);

    move_uploaded_file($temp_file, $new_filename);

    $sql = "INSERT INTO posts (title, textBody, image) VALUES ('$_POST[title]', '$_POST[content]', '$new_filename')";
}
else {
    $sql = "INSERT INTO posts (title, textBody) VALUES ('$_POST[title]', '$_POST[content]')";
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


header("location: blog.php");
?>