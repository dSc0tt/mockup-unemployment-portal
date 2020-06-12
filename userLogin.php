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
        <title>Log In</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="navbar-brand" href="#"><img src="Images\bdpa_jobless_pic.png" alt="BDPA LOGO" width="300px" height="80px"></a>
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
        <style>
            .jumbotron {
            padding: 2rem 1rem;
            margin-bottom: 2rem;
            border-radius: 0.3rem;

            background: #1a2a6c;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #fdbb2d, #b21f1f, #1a2a6c);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #fdbb2d, #b21f1f, #1a2a6c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }
            .hd1{
                color:#fff;
            }
</style>
        <p class="jumbotron" style="font-size:40px; background-color: #cc0000; text-align:center; color:white;">Log In</p>
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
                <br>
                <button class="btn" style=" background-color:#e0e0e0;  height: 50px; width:100px;" type="submit"> <font size=+2>Log In</font size></button>
               <br>
                <br><p>Haven't filed a claim yet? <a href="userRegister.php">Register here</a> to file your first claim.</br> Admin user? <a href="adminLogin.php">Log in here</a> to manage pending applications.</p>
            </form>
            </div>
            <div class="mid-col-3"></div>
        </div>
        </div>
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #cc0000;">
        <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
        <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
        <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>

        </div>
       </div>
    </body>
</html>
