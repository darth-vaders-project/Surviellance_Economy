<?php
session_start();
include 'database3.php';
$inspect =$_GET['inspect'];
//$kharch=$_GET['kharch'];
if($inspect!=""){
  $query=mysql_query("SELECT * from company_data where website like '%".$inspect."%' ");
  $n=mysql_num_rows($query);
// echo $n;
  $row=mysql_fetch_assoc($query);
  echo $row['website']."<br>".$row['data'];
}
?>
<html>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
  <label>Search:<input type="text" placeholder="enter website name" name="inspect"></label>
  <button type="submit" name="submit3">search</button><br></form>
</html>
