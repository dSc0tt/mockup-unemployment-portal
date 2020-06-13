<?php
include('db.php');
$ssn = $_SESSION['ssn'];
$query = "SELECT * FROM claims WHERE applicant_soc_sec = '$ssn' ";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);
    if($count>0) {

        header('location:appViewClaim.php');
    }
    else {
        header('location:appFileClaim.php');
    }
?>