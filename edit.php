<?php
require_once "connection.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>

            <div class="col-md-12">

            </div>
            <div class="col-md-12">
                <h1>Update Student Record </h1>
            </div>

            <div class="col-md-4">
                <?php

            $id = $_GET['id'];

            $sQuery = "SELECT * FROM student WHERE id = ".$id;
            $sResponse = mysqli_query($connection, $sQuery);

            if($sResponse) {
                $student = mysqli_fetch_assoc($sResponse);
            }

            ?>
                <form action="update.php" method="post">
                    <input type="hidden" name="id" id="name" value="<?php echo $student['id'] ?>">
                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" required class="form-control" id="name"
                            value="<?php echo $student['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email"
                            value="<?php echo $student['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <label> <input type="radio" name="gender" value="male"
                                <?php  if($student['gender']=="male"){echo "checked";}?>>Male</label>
                        <label> <input type="radio" name="gender" value="female"
                                <?php  if($student['gender']=="female"){echo "checked";}?>>Female</label>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" name="phone" id="phone"
                            value="<?php echo $student['phone'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address"
                            value="<?php echo $student['address'] ?>">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>