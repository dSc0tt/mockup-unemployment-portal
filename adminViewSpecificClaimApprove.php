<?php
include_once('db.php');
$claim_id =$_SESSION['claim_id'];


echo $claim_id;
if(isset($_POST['approve'])){
  $sql = "UPDATE claims SET application_status='A', open='N' WHERE claim_id = '$claim_id'";
  $result= mysqli_query($conn, $sql);
}

/*if($result){
  echo "Record updated successfully";
} 
else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);*/


?>