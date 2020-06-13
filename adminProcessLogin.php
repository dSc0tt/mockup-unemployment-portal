<?php
if(isset($_POST['submit']))
{

    include "db.php";
    $uname=trim($_POST['uname']);
    $pass=trim($_POST['pass']);
    $query = "SELECT * FROM admin WHERE username= '$uname' AND password='$pass'";
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
