
<?php
include_once('db.php');
$claim_id =$_SESSION['claim_id'];


echo $claim_id;
if(isset($_POST['deny'])){
  $sql = "UPDATE claims SET application_status='D', open='N' WHERE claim_id = '$claim_id'";
  $result= mysqli_query($conn, $sql);
}

?>