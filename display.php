<?php

include('connection.php')
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class='text-light'>
                Add User
            </a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `crud`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    $serialNumber = 1; 

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row["id"];
                        $name = $row["name"];
                        $email = $row["email"];
                        $mobile = $row["mobile"];
                        $password = $row["password"];

                        echo '
                        <tr>
                        <th scope="row">' . $serialNumber . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $password . '</td>
                        <td>
                            <button class="btn btn-primary "><a class="text-light" href="update.php?updateid=' .$id.'">Update</a></button>
                            <button class="btn btn-danger"><a  class="text-light" href="delete.php?deleteid=' .$id.' ">Delete</a></button>
                        </td>
                      </tr>
                        ';
                        $serialNumber++;
                    }

                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>