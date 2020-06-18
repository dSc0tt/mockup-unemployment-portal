<?php
//Page were admin is looking at all details of specific claim. 
// PHP Select statement including all claim information where claim or user id = the id of the claim that was clicked on. 
// Set variable of all needed information grabbbed. 
//This page will not be like a display page because there is no data repating itself. 
//All you need to do is grab information from database, set variables for the information that you grab, then echo the information.
//UPDATE CLAIMS TABLE AND UPDATE APPLICATION STATUS TO EITHER APPROVED
/*include_once('db.php');
$adminID=$_SESSION['adminID'];
$query= "SELECT a.first_name, a.last_name, c.application_status, c.employer_name, c.claim_id, c.applicant_soc_sec  FROM applicants AS a INNER JOIN claims AS c ON a.soc_sec_id= c.applicant_soc_sec AND c.admin_id='$adminID' AND c.open = 'Y'";
$result=mysqli_query($conn,$query);*/
include('adminViewSpecificClaimApprove.php');
include('adminViewSpecificClaimDeny.php');
?>
<html>
    <head>
    <style>
      #main {
            height:500px;
        }
    </style>
        <title>AdminLogin</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
      <a class="navbar-brand" href="#"><img src="Images\bdpa_jobless_pic.png" alt="BDPA LOGO" width="300px" height="80px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userLogin.php">Sign-In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="userRegister.php">Make A Claim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">View Your Claims</a>
          </li>
        </ul>
      </div>
    </nav>
    <body>
    
        <p class="jumbotron" style="font-size:40px; background-color:#ffe5ea; text-align:center; color:black;">*Put Name of Claim Person Here* <!-- <php echo $fullname>--></p>
        <div class="container">
            <div class="row" id="main">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                <table Class="table">
                <tr>
                    <td>
                    <!--Echo out data in each table data. Add more if needed -->
                    </td>
                </tr>
                <tr>
                    <td>
                    <!--Echo out data in each table data. Add more if needed -->
                    </td>
                </tr>
                <tr>
                    <td>
                    <!--Echo out data in each table data. Add more if needed -->
                    </td>
                </tr>
                <tr>
                    <td>
                    <!--Echo out data in each table data. Add more if needed -->
                    </td>
                </tr>
                <tr>
                    <td>
                    <form method= 'POST'> 
                        <button class="btn btn-success" name="approve"><a href="adminApprove.php?IdVariableName='<?php //echo Claim or User ID ?>'" style="color:white;">Approve Claim </a> </button>
                        <button class="btn btn-danger" style="color:white;" name="deny"><a href="adminDeny.php?IdVariableName='<?php// echo Claim or User ID ?>'" style="color:white;">Deny Claim</a></button>
                        <!-- Redirects to printer friendly page (No Styling) and automatically opens up print function -->
                        <button class="btn btn-primary" style=" background-color: #809fff; color:white;" name="printButton"><a href="adminViewSpecificClaimPrint.php?" style="color:white;">Print Page</a></button>
                    </form>
                    </td>
                </tr>
                
                </table> 
                </div>
                <div class="col-md-2"></div>
            </div>
            </div>
            <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea; text-align:center">
            <p style="text-align:center;"><center> ©BdpaUnemploymentInc.</center></p>
              <p style="text-align: Center"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
              <p style="text-align: Center"><center>Phone Number: 1-240-XXX-XXXX</center></p>
            </div>
            
           <!--?php 
              //UPDATE CLAIMS TABLE AND UPDATE APPLICATION STATUS TO EITHER APPROVED  
              
              $claim_id = $_GET['claim_id'];
              echo $claim_id;
              if(isset($POST['approve'])){
                $sql = "UPDATE claims SET application_status='Approved' WHERE claim_id = '$claim_id'";
              }
              if(isset($POST['deny'])){
                $sql = "UPDATE claims SET application_status = 'Denied' WHERE claim_id = '$claim_id' ";
              }
              $result= mysqli_query($conn, $sql)
              if($result){
                echo "Record updated successfully";
              } 
              else {
                echo "Error updating record: " . mysqli_error($conn);
              }
              
              mysqli_close($conn);
            ?-->
       </div>
    </body>
</html>
