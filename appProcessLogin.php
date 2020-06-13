<?php
if(isset($_POST['submit']))
{
    include "db.php";
    $uname=trim($_POST['Username']);
    $ssn=trim($_POST ['SSN1'].$_POST ['SSN2'].$_POST ['SSN3']);
    $query = "SELECT * FROM applicants WHERE username= '$uname' AND soc_sec_id='$ssn'";
    $result = mysqli_query($conn, $query);
    $row= mysqli_fetch_assoc($result);
    $count= mysqli_num_rows($result);
    if($count>0) {
        $_SESSION['firstname']= $row['first_name'];
        $_SESSION['lastname']= $row['last_name'];
        $_SESSION['ssn']= $row['soc_sec_id'];
        header('location:appHome.php');
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
        Invalid Login Credentials
          <!--Close button on alert-->
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>';
    }

}
?>
