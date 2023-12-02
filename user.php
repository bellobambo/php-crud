<?php

include('connection.php');

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud` (name, email, mobile, password) 
            values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
        // echo "Data inserted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <form method="post" class='gap-3'>
            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" placeholder="Bambo..." name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter Valid Email" name="email"
                    autocomplete="off">
            </div>

            <div class="form-group">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile Number" name='mobile'
                    autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password "
                    autocomplete="off">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>