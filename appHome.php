<?php
include('db.php');
?>
<html>
    <head>
    <style>
      #main {
            height:500px;
      }
    </style>
        <title>Homepage</title>
        <img src link >
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpasth.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include('appNavbar.php');?>
    <div class="">
            <p class="jumbotron" style="font-size:60px; background-color:#ffe5ea; text-align:center; color:black;">BDPA Unemployment Inc.</p>
            <!--<h1><center>Thank you for visiting ©BdpaUnemploymentInc.</center><h1>--> 
            <br>
            <h2> <b><center> Welcome, <?php echo $_SESSION['firstname']. " " .$_SESSION['lastname'] ?>!</center></b></h2> 
            <br>
           <div class="col-mid-3"></div>
            <div class = "container">
            <p><font size=+2><center>If you have not filed a claim before, navigate to
             the <b>File A Claim</b> page in the navbar or click the <b>File A Claim</b> 
             button. You will be asked a series of questions about yourself and your employer.
             If you have already filed a claim, you can view the status of your claim by navigating to 
             your <b>Inbox</b> in the navbar.</center></font size></p>
             </div>
              <div class="col-mid-3"></div>
            <h3><font size=+2><center>We appreciate your patience during this time.</center></font size></h3>
            <br>
            <br>
            <!--<h4><font size=+4><center>Best of luck to you!</center></font size></h4>-->
        <br>
        <br>
          <center><button class="btn" onclick="window.location='appNewClaimGate.php'" style=" background-color:#e0e0e0;  height: 50px; width:200px;" type="submit" name="getStarted"> <font size=+2>File A Claim</font size></button></center>
        <br>
        <br>
        <br>
        <br>
        <br>
  
        <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea;text-align:center">
            <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
            <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
            <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>
        </div>
       </div>
    </body>
</html>
