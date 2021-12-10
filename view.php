<?php

require_once("connection.php");
$query = "select * from records";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body class="">
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <table class="table table-bordered">
                        <tr>
                            <td>User ID</td>
                            <td>User Name</td>
                            <td>User Email</td>
                            <td>User Age</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        <?php

                        while ($row = mysqli_fetch_assoc($result)) {
                            $UserID = $row['User_ID'];
                            $UserName = $row['User_Name'];
                            $UserEmail = $row['User_Email'];
                            $UserAge = $row['User_Age'];
                        ?>
                            <tr>
                                <td><?php echo $UserID ?></td>
                                <td><?php echo $UserName ?></td>
                                <td><?php echo $UserEmail ?></td>
                                <td><?php echo $UserAge ?></td>
                                <td><a href="edit.php?GETID=<?php echo $UserID ?>">Edit</a></td>
                                <td><a href="delete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                            </tr>
                        <?php

                        }

                        ?>

                    </table>
                </div>
            </div>
        </div>
        <a href="index.php">Home</a>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>