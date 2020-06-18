<? include ("db.php");
$claim_id = $_get["claim_id"];
if isset ("delete") {
  $query = "DELETE FROM claims WHERE claim_id = '$claim_id'";
  $results = mysqli_query ($conn,$query);
  header ("location:adminViewAllClaims.php");
}
