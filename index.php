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
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card card-title">
                        <h3 class="bg-primary text-warning text-center py-2">REGISTRATION FORM</h3>
                    </div>
                    <div class="card-body mb-auto text-center alert-danger">Fill out the information Below</div>
                    <form action="insert.php" method="post">
                        <input type="text" class="form-control mb-2" name="name" placeholder="Enter User name">
                        <input type="email" class="form-control mb-2" name="email" placeholder="Enter Email address">
                        <input type="text" class="form-control mb-2" name="age" placeholder="Enter age">
                        <button class="btn btn-primary" name="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>