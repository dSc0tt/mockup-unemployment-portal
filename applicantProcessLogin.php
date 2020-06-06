<?php
if(isset($_POST['submit']))
{

    include "db.php";
    $uname=trim($_POST['Username']);
    $ssn=trim($_POST ['social_security_number']);
    $query = "SELECT * FROM applicants WHERE username= '$uname' AND soc_sec_id='$ssn'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);
    if($count>0) {
        session_start();
        $_SESSION['firstname']= $row['first_name'];
        $_SESSION['lastname']= $row['last_name'];
        header('location:viewClaims.php');
    }
    else {
        echo 'Invalid Login Credentials';
    }

}
?>
