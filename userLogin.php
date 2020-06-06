<?php
//This is the login page for basic users of the unemployment portal
require("applicantProcessLogin.php");
?>
<?php
//Admin login for unemployment portal
?>
<html>
    <head>
    <style>
      #main {
            height:500px;
        }
    </style>
        <title>Login</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="navbar-brand" href="#">Helping Hand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="userLogin.php">Sign-In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userRegister.php">Make A Claim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View Your Claims</a>
            </li>
            </ul>
        </div>
        </nav>
        <p class="jumbotron" style="font-size:40px; background-color: #809fff; text-align:center; color:white;">Login</p>
        <div class="container">
        <div class="row" id="main">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <form method="POST">
                <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control col-md-6" id="Username" name="Username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="SSN">Social Security Number</label>
                    <div class="input-group">
                        <input type="password" class="form-control col-md-2" id="SSN" name="SSN1" placeholder="###">
                        <div class="col-sm-1"><p>-</p></div>
                        <input type="password" class=" col-md-2 form-control" id="SSN" name="SSN2" placeholder="##">
                        <div class="col-sm-1"><p>-</p></div>
                        <input type="password" class=" col-md-2 form-control" id="SSN" name="SSN3" placeholder="####">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style=" background-color: #809fff; color:white;" name="submit">Log In</button>
                <br><p>Haven't filed a claim yet? <a href="userRegister.php">Register here</a> to file your first claim.</br> Admin user? <a href="adminLogin.php">Log in here</a> to manage pending applications.</p>
            </form>
            </div>
            <div class="mid-col-3"></div>
        </div>
        </div>
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #809fff;">
        <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
        </div>
       </div>
    </body>
</html>
