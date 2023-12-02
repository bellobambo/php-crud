<?php

if (isset($_POST['submit'])) {

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "insert into crud (name, email, mobile, password) 
        values ('$name', '$email', '$mobile', '$password')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Data inserted successfully";
} else {
    die(mysqli_error($con));
}
}
?>
