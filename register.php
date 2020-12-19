<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>elocal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/vendor/slick/slick-theme.css">
  <link rel="stylesheet" media="screen" href="assets/css/style.css" />
</head>

<body>
    <nav class="navbar py-2 navbar-light navbar-expand-md fixed-top border-primary d-sm-block navigation-clean-button" style="background-color: rgb(255,255,255); box-shadow: 3px 0 10px rgba(0,0,0,.8);transition: all .5s ease-in-out">
        <div class="container"><a class="navbar-brand" href="#">E-Local</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: rgb(34,34,34);">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#!">About Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#!">Contact Us</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#!">Mega Menu</a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#!">Services</a>
                        <div class="dropdown-menu animate slideIn mt-2" role="menu">
                        <a class="dropdown-item" role="presentation" href="#!">First Item</a>
                        <a class="dropdown-item" role="presentation" href="#!">Second Item</a>
                        <a class="dropdown-item" role="presentation" href="#!">Third Item</a>
                        </div>
                    </li>
                </ul>
                <span class="navbar-text actions">
                <!-- <a class="login" href="#"><i class="fa fa-shopping-cart" style="margin: 2px;"></i>2</a> -->
                <a class="login btn btn-light action-button py-1 fs-14 " href="login.php">Log In</a>
                <!-- <a class="btn btn-light action-button" role="button" href="#">Sign Up</a> -->
                </span>
        </div>
        </div>
    </nav>
    <div class="register-photo" style="margin-top: 55px; padding: 100px 0; background-color: rgb(193,218,239);">
        <div class="form-container" style="max-width: 400px;">
            <form method="post">
                <h2 class="text-dark fs-20 text-center mb-3"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                    <small class="error-text mt-1">Please enter valid details</small>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    <small class="error-text mt-1">Please enter valid details</small>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password-repeat" placeholder="Confirm Password">
                    <small class="error-text mt-1">Please enter valid details</small>
                </div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group mb-2">
                    <a href="login.php" class="btn btn-primary btn-block" type="submit">Sign Up</a>
                </div>
                <p class="already">You already have an account?<a  href="login.php" style="font-size: 11px"> Login Here.</a><p>
                </form>
        </div>
    </div>


<?php 
    include('footer.php');
?>