<?php
session_start();
include 'database3.php';
if(isset($_POST['submission'])){
  $website=$_POST['website'];
  $data=$_POST['data'];
  $query="SELECT website from company_data where website='$website'";
  $lory=mysql_query($query);
  $n=mysql_num_rows($lory);
  //$ram=mysql_error();using mysql_error() was very helpful.
//  echo $ram;
  if($n==0)
  {
    $q=mysql_query("INSERT into company_data(website,data) VALUES('$website','$data')");
    if($q)
    {
      echo "success";
      $_SESSION['website']=$website;
    }
    else {
      echo "fail!";
    }}
    else{
      $q=mysql_query("UPDATE company_data set website='$website',data='$data'");
echo mysql_error();
    if ($q)
    {
      echo "updated";

    }

    else
    {
      echo "update failed";
    }
    }
}
 ?>
<!DOCTYPE html>
<html>
<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <label><input type="text" name="website" placeholder="enter the website you want to enter about"></label><br>
  <label><input type="text" name="data" placeholder="enter the details"></label><br>
  <button type="submit" name="submission">Submit</button>
</form>
</html>
