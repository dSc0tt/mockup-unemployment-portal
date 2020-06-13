<html>
    <head>
      <!-- CSS only -->
      <style>
        #main {
              height:500px;
          }
        .hd1{
            color:#fff;
        }
      </style>
      <title>AdminLogin</title>
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <!-- JS, Popper.js, and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <?php include('guestNavbar.php');?>
    <body>
    
    <p class="jumbotron" style="font-size:40px; background-color:#ffe5ea; text-align:center; color:black;">Admin Login</p>
        <?php
          //processes login credentials and displays error message after the jumbotron
          include('adminProcessLogin.php'); 
        ?>
        <div class="container">
            <div class="row" id="main">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <div class="well" >
                <form method="POST">
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" id="Username" name="uname" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" name="pass" placeholder="Password">
                    </div>
                    <button type="submit" class="btn" style=" background-color:#e0e0e0;  height: 50px; width:100px;" name="submit">Log In</button>
                    <br><p>Haven't filed a claim yet? <a href="appRegister.php">Register here</a> to file your first claim.</br>Not an admin user? <a href="appLogin.php">Log in here</a> to log in as an applicant.</p>
                </div>
                </div>
                </form>
            </div>
        </div>
        <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea;text-align:center">
        <p style="text-align: Center; color: white;"><center>©BdpaUnemploymentInc.</center></p>
        <p style="text-align: Center;"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
        <p style="text-align: Center;"><center>Phone Number: 1-240-XXX-XXXX</center></p>
        </div>
       
    </body>
</html>
