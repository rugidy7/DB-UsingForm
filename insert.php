<?php

require_once("connection.php");

if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'])) {
        echo 'Please Fill in the Blank';
    } else {
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];

        $query = "insert into records (User_Name, User_Email, User_Age) values('$UserName', '$UserEmail','$UserAge')";
        $result = mysqli_query($con, $query);

        if ($result) {
            header("location:view.php");
        } else {
            echo "Please check your Query";
        }
    }
} else {
    header('location:index.php');
}

?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html> -->