<?php
require_once("connection.php");

if (isset($_POST['update'])) {
    $UserID = $_GET['ID'];
    $UserName = $_POST['name'];
    $UserEmail = $_POST['email'];
    $UserAge = $_POST['age'];

    $query = "update records set User_Name = '" . $UserName . "', User_Email='" . $UserEmail . "',User_Age='" . $UserAge . "' where User_ID='" . $UserID . "'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location:view.php");
    } else {
        echo "Please check your query";
    }
} else {
    header("location:view.php");
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