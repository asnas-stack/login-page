<?php ob_start(); ?>
<?php session_start(); ?>
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
    <title>Project Paradise</title>
    <style>
        body {
            background-color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        
        a {
            color: #000;
            font-weight: 300;
        }
        
        a:hover {
            color: #000;
        }
    </style>

</head>




<body>
    <nav class="navbar navbar-expand-sm bg-custom navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="img/12.png" alt="Logo" style="width:25vw;" class="ml-5 mr-3">
        </a>
        <form class="form-inline" action="/action_page.php" class="mr-3">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success mr-5" type="submit">Search</button>
        </form>
        <ul class="navbar-nav">
            <li class="nav-item ml-2 mr-2">
                <a class="nav-link" href="#"> <i class="fa fa-user-circle"></i>

                    <?php

                    if (isset( $_SESSION['username'])) {
                        echo  "Hi" ." " . $_SESSION['username'] . "!";
                    }else{
                        echo  "Hi User!";
                    }
                    ?>



                </a>
            </li>
            <li class="nav-item ml-2 mr-2">
                <a class="nav-link" href="#"> <i class="fa fa-question-circle"></i> Help</a>
            </li>
            <li class="nav-item ml-2 mr-2">
                <a class="nav-link" href="#"> <i class="fa fa-shopping-cart"></i>Cart</a>
            </li>
            <li class="nav-item ml-2 mr-2">
                <?php

                if (isset( $_SESSION['username'])) {    ?>
                    <a class="nav-link" href="signout.php"> <i class="<?php echo 'fa fa-sign-out' ?>"></i>Sign Out</a>
                <?php
                }
                else{
                ?>

                    <a class="nav-link" href="login.php"> <i class="<?php echo 'fa fa-sign-in' ?>"></i>Log in</a>
                <?php
                }
                ?>


            </li>
        </ul>
    </nav>

    <div class="container-fluid" style="background-color: #000;">
        <img class="img-fluid" src="img/all_iPhoneprismabanner.jpg">
    </div>

    <div class="container-fluid" style="background-color: #fff;">
        <h4 class="mt-5">Recommended For You</h4>
        <div class="row">
            <div class="col-md-3">
                <a href="">
                    <div class="card">
                        <img class="card-img-top" src="img/1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 120%; font-weight: 400; text-align: center;">iPhone X 5.8 Inches Su... <br> N255,000
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <div class="card">
                        <img class="card-img-top" src="img/1-2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 120%; text-align: center;">Nokia 7 Plus Case Frost... <br> N5,920
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <div class="card">
                        <img class="card-img-top" src="img/1-3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 120%; text-align: center;">iPhone 6 Plus 5.5” 4G... <br> N116,700
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="">
                    <div class="card">
                        <img class="card-img-top" src="img/1-4.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title" style="font-size: 120%; text-align: center;">ProBook X360 11 G1 EE... <br> N200,000
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
</body>

</html>
