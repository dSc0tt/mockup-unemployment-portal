<?php
include('db.php');
//pre - define variables
$doe = "";
$salary = "";
$peName = "";
$peDept = "";
$peAddress = "";
$state = "";
$peZip = "";
$peCity = "";
$peEmail = "";
$pePhone = "";
$valid= "";
if(isset($_POST['submit'])){
    echo('If the submit button works');
    $valid= "true";
    $doe = $_POST['Year']. '-' .$_POST['Month']. '-' .$_POST['Day'];
    $salary = $_POST['peSalary'];
    $peName = $_POST['peName'];
    $peDept = $_POST['peDept'];
    $peAddress = $_POST['peAddress'];
    $state = $_POST['states'];
    $peZip = $_POST['peZipcode'];
    $peCity = $_POST['peCity'];
    $peEmail = $_POST['peEmail'];
    $pePhone = $_POST['phoneNumber1']. '-' .$_POST['phoneNumber2']. '-' .$_POST['phoneNumber3'];
    $snn = $_SESSION['soc_sec_id'];
    $admin = "1";
    //check if fields are empty
    if($doe == '')
    {
      $valid="false";
      echo '<div class="alert alert-danger" role="alert">
      You must enter your last date of employment.
        <!--Close button on alert-->
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
                </div>';
    }
    if($salary == '')
    {
      $valid="false";
      echo '<div class="alert alert-danger" role="alert">
      You must enter your current salary.
        <!--Close button on alert-->
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
                </div>';
    }
    if($peName == '')
    {
      $valid="false";
      echo "<div class='alert alert-danger' role='alert'>
      You must enter your previous employer's name.
        <!--Close button on alert-->
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
              </button>
                </div>";
    }
    if($peDept == '')
    {
      $valid="false";
      echo '<div class="alert alert-danger" role="alert">
      You must enter your previous department.
        <!--Close button on alert-->
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
                </div>';
    }
    if($peAddress == '')
    {
      $valid="false";
      echo "<div class='alert alert-danger' role='alert'>
      You must enter your previous employer's address.
        <!--Close button on alert-->
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
              </button>
                </div>";
    }
    if($state == 'null')
    {
      $valid="false";
      echo "<div cl  iv>";
    }
    if($peZip == '')
    {
        echo "<div class='alert alert-danger' role='alert'>
        You must enter your previous employer's zipcode.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
    }
    if($peCity == '')
    {
        echo "<div class='alert alert-danger' role='alert'>
        You must enter your previous employer's city.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
    }
    if($peEmail == '')
    {
        echo "<div class='alert alert-danger' role='alert'>
        You must enter your previous employer's email.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
                </button>
                  </div>";
    }
    if($pePhone == '')
    {
        echo "<div class='alert alert-danger' role='alert'>
        You must enter your previous employer's email.
          <!--Close button on alert-->
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden=true'>&times;</span>
                </button>
                  </div>";
    }
     else
        {
          echo("runs the query");
          //process information and insert it into database

          $query="INSERT INTO claims(last_date_of_employment, employer_name, department, employer_address, employer_state_id, employer_zip_code, employer_city, employer_email, employer_phone, salary, applicant_soc_sec, application_status, open, admin_id) 
          VALUES('$doe', '$peName', '$peDept', '$peAddress', '$state', '$peZip', '$peCity', '$peEmail', '$pePhone', '$salary', '$ssn', 'P', 'Y', '$admin')";
          $result = mysqli_query($conn, $query);
          header('location:appHome.php'); //should go to the view claim page, or a success page
        }
    }
?>