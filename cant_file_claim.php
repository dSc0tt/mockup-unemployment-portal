<<?php
//unemployment questionnaire
/*include("db.php");*/
?>
<html>
    <head>

    <style>
      #main {
            height:500px;
        }
    </style>
        <title>Unable to File Claim</title>
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
   <div class="jumbotron" style="font-size:40px; background-color: #ffe5ea; text-align:center; color:black;"><p>Ineligible to File a Claim</p>
        </div>
        <div class="row" id="main">
            <div class="col-md-1"></div>
            <div class="col-md-10">
            <form method="POST">
            <br>
                <center><h1>Uh oh...</h1></center>
                <!--<h2><center>You are ineligible to file a claim</center></h2>--> 
                <br>
                <h4><center>You have been redirected to this page from the Questionnaire. Because you did not answer the Questionnaire form correctly, 
                you cannot file a claim. Thank you for your time.</center></h4>
            </form>
            </div>
            </div>
            <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea;text-align:center">
                            <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
                            <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
                            <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>
            </div>
            </body>
            </html>