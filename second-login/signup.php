<?php include "includes\db.php";  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f95d0c8fa1.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Project Paradise | SignUp</title>


</head>
<body>
<?php
    if (isset($_POST['signUp'])) {

    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $email  =    $_POST['email'];
    $confirmPassword = $_POST['confirmPassword'];


    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashFormat_and_salt = $hashFormat . $salt;
    $user_password = crypt($password, $hashFormat_and_salt);

    if($password !== $confirmPassword){

        header("Location: includes/404.php");
       die();



    }



    $query = "INSERT INTO users(username,password, email ) ";

    $query .= "VALUES('{$username}','{$user_password}','{$email}') ";
    $Signup_user_query = mysqli_query($connection,$query);

    if($Signup_user_query){


        header("Location: login.php");
        }else{
        ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error! Refill form </strong>
        </div>

        <?php

    }

    }

?>




















    <div class="container-fluid full-height">
        <div class="row">
            <div class="col-md-6 left-side">
                <div class="left-header">
                    <h1><img src="img/Screen Shot 2019-09-16 at 2.21.09 PM.png">Phone <span>Paradise</span></h1>
                </div>
                <div class="login-head">
                    <h2>Hi There,</h2>
                    <p>Create your account</p>
                </div>
                <div class="signup-form">
                    <form action="" method="POST">
                        <div class="form-group col-md-10 mx-auto">

                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group col-md-10 mx-auto">

                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group col-md-10 mx-auto">

                            <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group col-md-10 mx-auto">

                            <input type="password" class="form-control" id="pwd" required name="confirmPassword" placeholder="Re-Enter Password">
                        </div>
                        <button type="submit" name= "signUp" class="btn btn-custom py-2 px-5">SIGN UP</button>
                        <p class="account">Already have an account? <a href="login.php">Login</a></p>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid login-image" src="img/login-image.jpg" alt="login-image">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>