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
    <div class="container">
            <p class="jumbotron" style="font-size:40px; background-color: #809fff; text-align:center; color:white;">Login</p>

        <div class="row" id="main">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <div class="well" style="background-color:#ccffff; border-radius:20px">
            <form action="#" method="POST">
                <table class="table" style="">
                    <tr>
                        <th>Username</th>
                        <td>
                            <input type="text" name="Username" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>SSN</th>
                        <td>
                            <input type="password" name="social_security_number" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <button class="btn" style=" background-color: #809fff; color:white;" type="submit"> Log In</button> &nbsp;
                            <button class="btn btn-primary"  style=" background-color: #809fff; color:white;" type="reset"> Register</button>
                        </th>
                        <td></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
</div>
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #809fff;">
        <p >©BdpaUnemploymentInc.</p>
        </div>
       </div>
    </body>
</html>
