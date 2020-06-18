<?php
include_once('db.php');
$adminID=$_SESSION['adminID'];
$query= "SELECT a.first_name, a.last_name, c.application_status, c.employer_name, c.claim_id, c.applicant_soc_sec  FROM applicants AS a INNER JOIN claims AS c ON a.soc_sec_id= c.applicant_soc_sec AND c.admin_id='$adminID' AND c.open = 'Y'";
$claim_id =$_GET['claim_id'];
$result=mysqli_query($conn,$query);
//echo $claim_id;
if(isset($POST['approve'])){
  $sql = "UPDATE claims SET application_status='Approved' WHERE claim_id = '$claim_id'";
}
$result= mysqli_query($conn, $sql);
if($result){
  echo "Record updated successfully";
} 
else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>