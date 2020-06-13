<?php
include('db.php');
?>
<html>
    <head>
    <style>
      .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        border-radius: 0.3rem;

        background: #1a2a6c;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #fdbb2d, #b21f1f, #1a2a6c);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #fdbb2d, #b21f1f, #1a2a6c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

      }
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
            <p class="jumbotron" style="font-size:60px; background-color: #cc0000; text-align:center; color:white;">BDPA Unemployment Inc.</p>
            <!--<h1><center>Thank you for visiting ©BdpaUnemploymentInc.</center><h1>--> 
            <br>
            <h2> <b><center> Welcome, <?php echo $_SESSION['firstname']. " " .$_SESSION['lastname'] ?>!</center></b></h2> 
            <br>
           <div class="col-mid-3"></div>
            <div class = "container">
            <p><font size=+2><center>In light of recent events, BDPA Unemployment has updated its
            platform for DC residents to file for unemployment. New users
             will navigate to the <b>Questionnaire Page</b> answering questions about themselves 
             and the circumstances of their unemployment. Your eligibility to file a claim 
             will be based on your answers to the questionnaire. If eligible, new users will navigate to 
             the <b> Make A Claim Page </b> where they will enter more information 
             about themselves and their employer. If you are an exisiting user, 
             navigate to the <b> User Sign-in Page </b>and enter your 
             username and password. Afterward, you will be directed to the 
             <b> User View Claim Page </b> in which the status of your unemployment claim 
             can be seen. The <b>Get Started Button</b> below will take new users to the <b>Questionnaire Page</b>.</center></font size></p>
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
  
        <div class="jumbotron footer" style="margin-bottom:0; background-color: #cc0000;">
        <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
        <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
        <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>
        </div>
       </div>
    </body>
</html>
