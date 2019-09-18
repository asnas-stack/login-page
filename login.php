<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "includes/db_connection.php";  ?>


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
    <title>Project Paradise Login</title>
    <style>
    body {
        background-color: #fff;
    }
    .right-side {
        background-color: #171717;
    }
    </style>
</head>

<?php
$db_username  = "";
$db_user_password = "";
if (isset($_POST['login'])) {

    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $username  = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);


    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashFormat_and_salt = $hashFormat . $salt;
    $user_password = crypt($password, $hashFormat_and_salt);


    $query = "SELECT * FROM users WHERE username = '$username' ";

    $select_user_query = mysqli_query($conn,$query);


    while ($row = mysqli_fetch_array($select_user_query)) {

        $db_user_id  = $row['id'];
        $db_username  = $row['username'];
        $db_user_password  = $row['password'];

    }

    if  ($username === $db_username &&  $user_password === $db_user_password) {

        $_SESSION['id']        =    $db_user_id;
        $_SESSION['username']  =    $db_username ;
        $_SESSION['password']  =    $db_user_password;


        //echo  $_SESSION['username'] ;

       header("Location: index.php");

    }
    else{

        echo "<h3 style='background-color: #E11ECE; font-family: Poppins, sans-serif; color: #fff'>Invalid Password or Username</h3>";


    }

}




?>
<body>
    <div class="container-fluid full-height">
        <div class="row">
            <div class="col-md-6 left-side">
                <div class="left-header">
                    <h1><img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1568791926/Screen_Shot_2019-09-16_at_2.21.09_PM_lsavm4.png">Phone <span>Paradise</span></h1>
                </div>
                <div class="login-head">
                    <h2>Hi There,</h2>
                    <p>Login to your account</p>
                </div>
                <div class="login-form col-md-10 mx-auto">
                    <form action="" method="POST">
                        <div class="form-group">

                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                        </div>
                        <div class="clearfix">
                            <div class="form-group form-check float-left">

                                <label class="form-check-label">
                              <input class="form-check-input" type="checkbox"> Remember me
                            </label>
                            </div>
                            <div class="float-right">
                                <a href="">Forgot Password?</a>
                            </div>
                        </div>
                        <button type="submit" name= "login" class="btn btn-custom py-2 px-5">LOGIN</button>
                        <p class="account">Don't have an account? <a href="signup.php">Sign Up</a></p>
                    </form>
                </div>
            </div>
            <div class="col-md-6 right-side">
                <img class="img-fluid login-image" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1568791929/login-image_wu2d4r.jpg" alt="login-image">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>