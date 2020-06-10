<?php
include('db.php');



//pre - define variables
$fname = "" ;
$lname = ""; 
$soc = "" ;
$email = "";
$address = "";
$city = "";
$states = "";
$zip = "";
$pass = "";
$passC = "";
$gender = "";
$dob = "";
//pre - define states table

if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $soc = $_POST['SSN1'].$_POST['SSN2'].$_POST['SSN3'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $states = $_POST['states'];
    $zip = $_POST['zipcode'];
    $pass = $_POST['pass'];
    $passC = $_POST['cPass'];
    $gender = $_POST['gender'];
    $dob = $_POST['Year']. '-' .$_POST['Month']. '-' .$_POST['Day'];
    //check if fields are empty
    if($fname == '')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must enter your first name.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($lname == '')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must enter your last name.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($soc == '')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must enter your SSN.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($email == '')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must enter an email address.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($city == '')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must enter a city.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($states == 'null')
    {
        echo '<div class="alert alert-danger" role="alert">
        You must select a state.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($gender == 'null')
    {
        '<div class="alert alert-danger" role="alert">
        You must select a gender.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    if($pass || $passC == '')
    {
        '<div class="alert alert-danger" role="alert">
        You must provide a password for both fields.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    //validate password
    //check if password fields match
    if($pass != $passC){
        '<div class="alert alert-danger" role="alert">
        Passwords do not match.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }
    //validate social security number
    if(!is_numeric($soc))
    {
        '<div class="alert alert-danger" role="alert">
        Please enter a valid social security number.
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    } else
    {
        $substr_soc=substr($soc, 0, 3);
        $social_range = range(577,579);
        if(!in_array($substr_soc, $social_range))
        {
            '<div class="alert alert-danger" role="alert">
            Please enter a valid social security number.
            <!--Close button on alert-->
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
        }
        else
        {
            //process information and insert it into database

            //$query="INSERT INTO applicants(soc_sec_id, first_name, last_name, email, dob, address, city, state_id, zipcode, gender, password) 
            //VALUES($social, '$fname', '$email', '$dob', '$address', '$city', '$state', '$zip', '$gender', '$pass')";
            //$result = mysqli_query($conn, $query);

            //Second, more secure, more abstract method (prevents sql injection)
            $query="INSERT INTO applicants(soc_sec_id, first_name, last_name, email, dob, address, city, state_id, zipcode, gender, password)
            VALUES(?,?,?,?,?,?,?,?,?,?,?)";
            $preparedstatement = myslqi_prepare($conn,$query);
            $mysqli_stmt_bind_param ($preparedStatement, issssssisss, $social, $fname, $email, $dob, $address, $city, $state, $zip, $gender, $pass);
            mysqli_stmt_execute($preparedStatement);

            header('location:userLogin.php');
        }
    }
}
?>