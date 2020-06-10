<?php
//if fields are empty
//check if password fields match
//validate SSN
include ('db.php');
$fname = trim($_POST['fname']);
$lname = trim($_POST['lname']);
$gender=trim($_POST['gender']);
$soc = trim($_POST['social']);
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state_id'];
$zip = $_POST['zip'];
$pass = $_POST['pass'];
$confirm_pass = $POST['pass2'];
//check if fields are Empty

if($fname == '')
{
    echo "You must enter your first name.";
    die();
}
if($lname == '')
{
    echo "You must enter a last name.";
    die();
}
if($soc =='')
{
    echo "You must enter a social security number.";
    die();
}
if($email =='')
{
    echo "You must enter an email.";
    die();
}
if($address =='')
{
    echo "You must enter an address";
    die();
}
if($city == '')
{
    echo "You must enter a city.";
    die();
}
if($state =='')
{
    echo "You must enter a state.";
    die();

}
if($zip =='')
{
    echo "You must enter a zip code.";
    die();
}
if($pass =='')
{
    echo "You must enter a password.";
    die();
}
if($pass2 =='')
{
    echo "You must confirm your password.";
    die();
}
if($pass == '' || $pass2 = '')
{
    echo "You must enter your password and confirm it.";
    die();
}

//check if password fields match
if($pass != $pass 2)
{
    echo "Your passwords do not match. Try again.";
}
//validate social security number
if(!is_numeric($social))
{
    echo "Please enter a valid social security number.";
}
//Q: WHAT DOES SUBSTR DO??
//A: PULLING OUT SPECIFIC NUMBER OF CHARACTERS OUT OF STRING 
else{
    $substr_soc = substr($social, 0, 2);
    //PULL FIRST THREE CHARACTERS OUT
    $social_range = range(577, 579);
    //FIRST THREE CHARACTERS IN SSN MUST BE WITHIN RANGE 577-579
    if(!in_array($substr_soc, $social_range)
    {
        echo "Please a valid social security number.";
    //IF FIRST THREE NOT WITHIN RANGE, NOT VALID SSN 
    }
    else
    {
    //ENTER INFORMATION FORM APPLICANT FORM TO MYSQL
    $query = "INSERT INTO applicants(soc_sec_id, first_name, last_name, dob, address, city, state, )"
    }
}
?>