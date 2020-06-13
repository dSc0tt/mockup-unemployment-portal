<?php
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
        <title>Questionnaire</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include('guestNavbar.php');?>
   <div class="jumbotron" style="font-size:40px; background-color: #800000; text-align:center; color:white;"><p>Questionnaire</p>
        </div>
        <div class="container">
          <div class="col-md-4"></div>
            <div class="col-md-14">
            <!--<form method="POST">-->
            <form method="POST" action="questionnaire_process.php">
                <div class="form-group">
                <center><h4><b>NOTICE:</b></h4></center>
                <center><p>By answering this questionnaire, you agree to answer truthfully and to the best of your ability. If our 
                unemployment admin find out you lied on this form, your claim will be immeditaley rejected and you will be unable to appeal.</p></center>
                    <p><b>_______________________________________________________________________________________________________________________________________________________________________</b></p>
                   <br>
                    <h5>Question 1</h5>
                    <br>
                        <label for="Q1">Are you applying for unemployment due to acts of COVID-19?</label>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="Yes" name="Applying" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="No" name="Applying" value="No">
                            No</label>
                        </div>
                        </div>
        
                <div class="form-group">
                    <h5>Question 2</h5>
                    <br>
                        <label for="Q2">Did you recently relocate outside the District of Columbia to your current address within the last two months?</label>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="Yes" name="Relocate" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="No" name="Relocate" value="No">
                            No</label>
                        </div>
                        </div>
                <div class="form-group">
                    <h5>Question 3</h5>
                    <br>
                        <label for="Q3">Did you commute on a regular basis into the District of Columbia?</label>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="Yes" name="RegularC" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="No" name="RegularC" value="No">
                            No</label>
                        </div>
                        </div>
                <div class="form-group">
                    <h5>Question 4</h5>
                    <br>
                        <label for="Q4">Do you plane to continue to commute into the District of Columbia?</label>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="Yes" name="ContinueC" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="No" name="ContinueC" value="No">
                            No</label>
                        </div>
                        </div>
                <div class="form-group">
                    <h5>Question 5</h5>
                    <br>
                        <label for="Q5">Have you worked since April 18, 2020?</label>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="Yes" name="WorkedS" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="No" name="WorkedS" value="No">
                            No</label>
                        </div>
                        </div>
                <div class="form-group">
                    <h5>Question 6</h5>
                    <br>
                        <label for="Q6">Are you self-employed, 1099, or recently denied for unemployment?</label>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="Yes" name="DeniedJ" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="No" name="DeniedJ" value="No">
                            No</label>
                        </div>
                        </div>
                <div class="form-group">
                    <h5>Question 7</h5>
                    <br>
                        <label for="Q7">Select each statement that applies to you:</label>
                        <br>
                        <div class="input-group">
                            <ul>
                            <li> I quit for reasons unrelated to COVID.</li>
                            <li> I quit my job just to collect unemployment benefits.</li>
                            <li> I am currently receiving vacation leave, sick leave, or paid time off.</li>
                            <li>I can work from home but am choosing not to.</li>
                            </ul>
                            <br>
                        </div>
                        <div class="input-group">
                            <label for="option1" class="radio-inline col-md-4">
                            <input type="radio" id="option1" name="MultipleQ" value="Yes">
                            Yes</label>
                            
                            <label for="option2" class="radio-inline col-md-4">
                            <input type="radio" id="option2" name="MultipleQ" value="No">
                            No</label>
                        </div>
                        </div>
                        </div>
                        
                        </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style=" background-color: #809fff; color:white;" name="submit"> Submit</button>
                        </form>
                        <br>
                        <br>
                       

                <!--<center><button class="btn" style=" background-color:#e0e0e0;  height: 50px; width:100px;" type="submit" name="submit"> <font size=+2>Submit</font size></button></center>-->
                
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="jumbotron footer" style="margin-bottom:0; background-color:#800000;text-align:center">
                            <p style="text-align: Center"><center>©BdpaUnemploymentInc.</center></p>
                            <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
                            <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>

        
                        
            
                        </body>
                        </html>
        