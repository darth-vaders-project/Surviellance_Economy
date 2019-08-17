<?php
session_start();
include 'database3.php';
if (isset($_GET['search'])){
$website=$_GET['website'];
$search=$_GET['search'];
if($search!=""){
$query=mysql_query("SELECT * from company_data where website like '%".$search."%' ");
  $n=mysql_num_rows($query);
  if($n!=0){
  $row=mysql_fetch_assoc($query);
header("refresh:1;url=cbresult.php");
$_SESSION['website']=$website;
$_SESSION['data']=$data;
}
//  $row=mysql_fetch_assoc($query);
//  echo mysql_error();
//  echo $data;
}}
 ?>
 <!DOCTYPE html>
  <html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
  <style>
  h1{
    font-family: 'Lobster Two', cursive;
    font-size: 45px;

  }
  .icon-bar {
    display:block;
    text-align:left;
    padding:15px;
    color:white;
    font-size:30px;
    background-color: #F7882F;
  }
  .active{
    background-color: #7dce94;
    color:white;
  }
  *{
    box-sizing: border-box;
  }

  /* Create two equal columns that floats next to each other */
  .column {
    float: left;
    width: 33.33333%;
  /*  padding: 10px;*/
    height: 1300px; /* Should be removed. Only for demonstration */
  }

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  h2{

  }
  </style>
  </head>
  <body style="background-color:pink;">
  <h1><center>Darth_Vaders_Enlightenment_Site</center></h1>
  <h2><center>When it comes to privacy, talk is cheap</center></h2>
  <div class="icon-bar">
    <a  href="#" class="active" style="margin-right:40px" ><i>Home</i></a>
    <a  href="#" style="margin-right:40px"><i>Take Action</i></a>
    <a  href="#" style="margin-right:40px"><i>FAQs</i></a>
    <a  href="#" style="margin-right:40px"><i>About</i></a>
  </div>
  <a href="facebook.html"><img src="no-facebook.png" alt="Say No To Facebook" style="height:150px" ></a>
  <img src="3.jpg" alt="Delete Instagram" style="height:150px;width:400px" >
  <img src="google.jpg" alt="Quit Google" style="height:150px;width:400px" >
<center>  <a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=37&cad=rja&uact=8&ved=2ahUKEwiVqJOurO7jAhWNT30KHTYpBvEQ-TAoADAkegQIEhAB&url=https%3A%2F%2Fwww.edwardsnowden.com%2F&usg=AOvVaw1B_erz7m4XZ7hFy2I0LCXt"><img src="snowden.jpg" alt="Support Rebels" style="height:150px;width:250px" ></a></center>
<h3><i>If you want to search any website,click the SEARCH Button:<a href="cbsearch.php">this button</a></i></h3>
      <div class="columnt1">
      <p>
        <a href="#politics">Political Articles</a> |
        <a class=nobr href="archives/polnotes.html">Political Notes</a> |
        <a class=nobr href="#travel">Travel Experiences</a> |
        <a class=nobr href="#travel_photos">Travel Photos</a> |
        <a href="#fiction">Fiction</a> |
        <a href="#books">Books</a> |
        <a href="sayings.html">Sayings</a> |
        <a class=nobr href="extra/personal.html">Personal Ad</a> |
        <a href="#humor">Humor</a> |
        <a class=nobr href="#non-political">Non-Political Articles</a> |
        <a class=nobr href="rms-lifestyle.html">RMS personal FAQ</a> |
        <a class=nobr href="gpg.html">GPG Key</a> |
        <a class=nobr href="#sci_links">Scientific Links</a> |
        <a href="airlines.html">Airlines</a> |
        <a class=nobr href="/biographies.html#humorousbio">Humorous
        Bio</a> |
        <a href="/comics.html">Comics</a> |
        <a class=nobr href="empire.html">Empire of the
        Megacorporations</a> |
        <a href="#apocalypse">The Four Factors of the Apocalypse</a> |
        <a class=nobr href="#oughttobe">There Ought to Be a Law</a> |
        <a href="/media.html">Media/Press/Bio</a> |
        <a href="/links.html">Links</a> |
        <a href="/archive.html">Archive</a> |
        <a href="/glossary.html">Glossary</a> |
        <a href="/antiglossary.html">Anti-Glossary</a> |
        <a href="#thanks">Thanks</a> |
        </p>
        </div>
  <h3>How They Stalk and Influence You:
    <a href="#">Your Own Government</a>
    <a href="amazon.html">Amazon</a>
    <a href="#">Google</a>
    <a href="facebook.html">Facebook</a>
    <a href="#">xVideos(NSFW)</a>
    <a href="#">DoubleClick</a>
    <a href="#">GoDaddy</a>
    <a href="#">Yahoo!</a>
    <a href="#">PornHub</a><br>
    <a href="#">Microsoft</a>
    <a href="#">Apple</a>
  </h3>
  <form></form>
  <div>
  </p>
  “Until they become conscious they will never rebel, and until after they have rebelled they cannot become conscious.”</p>
  <h5><center>George Orwell</center></h5></div>
  <div class="row">
    <div class="column" style="background-color:#aaa;">
  <iframe width="100%" height="326" src="https://www.youtube.com/embed/0hLjuVyIIrs/?controls=0" frameborder="0" ></iframe>
    </div>
    <div class="column" style="background-color:#bbb;"></div>
    <div class="column" style="background-color:#aaa;"></div>
  </div>
  </body>
  </html>
