<?php
session_start();
include 'database2.php';
if (isset($_POST['submit']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $organization=$_POST['organization'];
  if($password==$cpassword){
    $query=mysql_query("SELECT email from projectform where email='$email'");
    $n=mysql_num_rows($query);
    if($n==0)
    {
      $q=mysql_query("INSERT into projectform(email,password,country,gender,organization) VALUES('$email','$password','$country','$gender','$organization')");
      if($q)
      {
        echo "success";
        $_SESSION['email']=$email;
      }
      else {
        echo "fail";
      }}
    /*  else{
        $q=mysql_query("UPDATE tableform set password='$password',gender='$gender',state='$state' where email='$email'");

  		if ($q)
  		{
  			echo "updated";

  		}

  		else
  		{
  			echo "update failed";
  		}
    }*/
    }
    else{
      echo "password doesn't match";
    }
  }
  if (isset($_POST['submit1']))
  {
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query=mysql_query("SELECT * from projectform where email='$email' ");
  $n=mysql_num_rows($query);//retrieves a number of rows from a result set
  if($n==1)
  {
   $row=mysql_fetch_assoc($query);//corresponds to the fetched row,and moves the internal data pointer ahead;
   if ($password==$row['password'])
   {
  echo "Success";
  header("refresh:1;url=codebuckets1.php");}
  else
   {
     echo "failure!";
   }
  }
  else {
   echo "email doesn't Exist!";
  }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <style>
  body{
    font-size:20px;
    border:40px 40px 40px 40px;
    border-style: dotted;
    background: #f6f5f7;
  }
  .column {
    float: left;
    width: 50%;
  /*  padding: 10px;*/
    height: 600px; /* Should be removed. Only for demonstration */
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
</style>
  </head>
<center><body>
    <h1 style="background-color:grey;">The Data Journalists</h1>
  <div class="row">
    <div class="column" style="background-color:#9e363a;">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <table style="width:100%">
        <tr>
          <th style="text-align:left">Sign Up credentials</th>
          <th style="text-align:left">Your Info</th>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" required placeholder="Enter a valid e-mail id" name="email"></td>
        </tr>
        <tr>
          <td>Country:</td>
          <td><select name="country">
              <option value="" >select country</option>
              <option value="india">India</option>
              <option value="america">America</option>
              <option value="britain">Britain</option>
              <option value="pakistan">Pakistan</option>
              <option value="canada">Canada</option>
              <option value="restofworld">Rest Of World</option>
            </select></td>
        </tr>
        <tr>
          <td>Present Organisation:</td>
          <td>  <select name="organization">
              <option value="" >select your organization</option>
              <option value="thehindu">The Hindu</option>
              <option value="washingtonpost">The Washington Post</option>
              <option value="guardian">The Guardian</option>
              <option value="dawn">The Dawn</option>
              <option value="reutersw">The Reuters</option>
              <option value="aljajeera">Al_Jajeera</option>
            </select></td>
        </tr>
        <tr>
          <td>Gender:</td>
          <td>  <select name="gender">
              <option value="" >select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="disclose">Rather Not Say</option>
            </select></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" required placeholder="Enter your password" name="password"></td>
        </tr>
        <tr>
          <td>Confirm Password:</td>
          <td><input type="password" placeholder="Confirm Password" id="confirm_password" name="cpassword" required></td>
        </tr>
      </table>
  <center><h1><button type="submit" name="submit" >Submit</button></h1></center>
</form>
</div>
<div class="column" style="background-color:#00a0a0;">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table style="width:100%">
      <tr>
        <th style="text-align:left">Login credentials</th>
        <th style="text-align:left">Login Info</th>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="email" required placeholder="Enter a valid e-mail id" name="email"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" required placeholder="Enter your password" name="password"></td>
      </tr>
    </table>
    <center><button type="submit" name="submit1">Submit</button></center></form>
</div>
</div>
</body></center>
</html>
