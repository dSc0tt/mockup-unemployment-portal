<?php
include_once('db.php');
$adminID=$_SESSION['adminID'];
$query= "SELECT a.first_name, a.last_name, c.application_status, c.employer_name, c.claim_id, c.applicant_soc_sec  FROM applicants AS a INNER JOIN claims AS c ON a.soc_sec_id= c.applicant_soc_sec AND c.admin_id='$adminID' AND c.open = 'Y'";
$result=mysqli_query($conn,$query);
?>
<html>
  <head>
    <title>AdminViewAllClaims</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Adds a navbar-->
    <?php include('adminNavbar.php');?>
    <p class="jumbotron" style="font-size:40px; background-color: #ffe5ea; text-align:center; color:black;">Admin View All claims </p>
    <br><br><br><br>
        <center><table style="color:black;width:100%; ">
          <tr>
            <th>Applicant Name</th>
            <th>Former Employer</th>
            <th>Status</th>
            <th>View Application</th>
          </tr>
          <?php
                while($row=mysqli_fetch_assoc($result)){
            ?>
             <tr>
                <td ><?php echo $row["first_name"]. " " .$row["last_name"];?></td>
                <td ><?php echo $row["employer_name"];?></td>
                <td ><?php if($row["application_status"]='P'){ echo 'Pending';}?></td>
                <td><button type="submit" class="btn" style=" background-color:#e0e0e0;  height: 50px; width:100px;" onclick="location.href='adminViewSpecificClaim.php?ssn=<?php echo $row['applicant_soc_sec']; ?>'" name="view">View Claim</button></td>
            </tr>
                <?php }?>
        </table></center>
        <br>
        <div class="jumbotron footer" style="margin-bottom:0; background-color:#ffe5ea;text-align:center">
          <p style="text-align: Center; color: white;"><center>©BdpaUnemploymentInc.</center></p>
          <p style="text-align: Center;"><center>Hours of Operation: 24/7 Monday-Sunday</center></p>
          <p style="text-align: Center;"><center>Phone Number: 1-240-XXX-XXXX</center></p>
        </div>
    </body>
</html>
