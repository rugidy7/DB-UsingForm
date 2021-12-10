<?php

require_once("connection.php");

if (isset($_GET['Del'])) {
    $UserID = $_GET['Del'];
    $query = "delete from records where User_ID = '" . $UserID . "'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location:view.php");
    } else {
        echo "Please check query";
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