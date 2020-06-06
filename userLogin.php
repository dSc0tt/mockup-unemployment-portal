<?php
//This is the login page for basic users of the unemployment portal
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
            <div>
            <form action="userProcessLogin.php" method="POST">
            <div class="form-group">
                    <label for="Username">Username:</label>
                    <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="PASS" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="SSN">Social Security Number</label>
                    <input type="password" class="form-control col-md-2" id="SSN" name="SSN" placeholder="SSN"> <input type="password" class=" col-md-2 form-control" id="SSN" name="SSN2" placeholder="SSN"><input type="password" class=" col-md-2 form-control" id="SSN" name="SSN3" placeholder="SSN">
                </div>
                <button type="submit" class="btn btn-primary" style=" background-color: #809fff; color:white;">Submit</button> <button style=" background-color: #809fff; color:white;" type="reset" class="btn btn-primary">Clear</button>
            <!--    <table class="table" style="">
                    <tr>
                        <th>Username</th>
                        <td>
                            <input type="text" name="Username" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td>
                            <input type="password" name="Pass" value="" class="form-control"/>
                        </td>
                    </tr>
                    <th>SSN</th>
                    <td>
                        <input type="password" name="SSN" value="" class="form-control"/>
                    </td>
                </tr>
                    <tr>
                        <th colspan="2">
                            <button class="btn" style=" background-color: #809fff; color:white;" type="submit"> Submit</button> &nbsp;
                            <button class="btn btn-primary"  style=" background-color: #809fff; color:white;" type="reset"> Clear</button>
                        </th>
                        <td></td>
                    </tr>
                </table>
                </form>
                </div>
            </div>
            <div class="col-md-3"></div> -->
            </div>
            </div>
        </div>
</div>
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #809fff;">
        <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
        </div>
       </div>
    </body>
</html>
