<?php
if(isset($_POST['name']))
{
  
$server="localhost";
$username="root";
$password="";
$database="council-7.o";
// Database Connection
$con=mysqli_connect($server,$username,$password,$database);

if(!$con){
  die(mysqli_connect_error());
}
else{
  $name=$_POST["name"]; 
  $course=$_POST["course"];
  $branch=$_POST["branch"];
  $year=$_POST["year"];
  $phone=$_POST["phone"];
// Database Query       
  $sql="INSERT INTO `council-7.o`.`council-form`(`name`,`course`,`branch`,`year`,`phone`)VALUES('$name','$course','$branch','$year','$phone');";  
}
if($con->query($sql)==true){
    // echo "sucessfully Inserted!";
}
else
{
    // echo "Failed!";
}
$con->close();
}
?>



<link href='https://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>

<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/red.css" rel="alternate stylesheet" title="red" media="screen">
<link href="css/green.css" rel="alternate stylesheet" title="green" media="screen">
<link href="css/blue.css" rel="alternate stylesheet" title="blue" media="screen">
<link href="css/switcher.css" rel="stylesheet" media="screen">
   <style>
    .img-container-inline {
  text-align: center;
  display: block;
}

.input{
  display:block;
  margin:10px;
  margin-left:35%;
  width:400px;
  border-radius:5px;
}

.label-f{
  margin-left:35%;
  color:black;
}

    </style>
</head>
<body>

<!-- <div class="loader">
<div class="loader-brand"><img alt="" class="img-responsive center-block" src="img/Literario White.webp"></div>
</div> -->
<div id="layout" class="layout">

<header id="top" class="navbar js-navbar">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="#layout" class="brand js-target-scroll">
<img alt="" width="70" class="brand-img js-brand-hinge" src="img/output.webp">
<i>Literario</i>
</a>
</div>
<div class="collapse navbar-collapse" id="navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>

<li class="active"><a href="index.html">Home </a></li>


<li><a href="index.html#about" class="js-target-scroll">About</a></li>

<li><a href="index.html#portfolio" class="js-target-scroll">Showcase</a></li>
<li><a href="team/team.html" class="js-target-scroll">Team</a>

</li>
<li><a href="#" class="js-target-scroll">Brands</a>
<ul>
    <li><a href="brand/alumni.html">Alumni</a></li>
    <li> <a href="brand/startup.html">StartUp</a></li>
    
</ul>
</li>
<li>
<a href="#" class="js-target-scroll">Blog</a>


</li><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Literario Council 7.O Registration|| Official Club of English Department || GLA University</title>

<link rel="shortcut icon" href="favicon.webp">
<link rel="apple-touch-icon" href="apple-touch-icon.webp">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.webp">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.webp">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>

<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/red.css" rel="alternate stylesheet" title="red" media="screen">
<link href="css/green.css" rel="alternate stylesheet" title="green" media="screen">
<link href="css/blue.css" rel="alternate stylesheet" title="blue" media="screen">
<link href="css/switcher.css" rel="stylesheet" media="screen">
   <style>
    .img-container-inline {
  text-align: center;
  display: block;
}

    </style>
</head>
<li><a href="index.html#contacts" class="js-target-scroll">Contacts</a></li>
</ul>
</div>
</div>
</header>

<main id="home" class="masthead masthead-image parallax" data-stellar-ratio="0.8" data-stellar-background-ratio="0.4">
<div class="mouse"></div>
<div class="opener">
<div class="container rel-1">
<div class="row">
<div class="text-center col-lg-6 col-lg-offset-3">
<h1>COUNCIL 7.O DRIVE</h1>
<div class="lead wow fadeIn" data-wow-duration="2s">
<p class="lead-text">Official Club of English Department , GLA University , Mathura</p>
</div>
<!-- <a href="tel:7376320430" class="btn-lead btn btn-light" data-wow-delay="1s" data-text-hover="Call Now" data-toggle="modal">
<span class="btn-text wow fadeInDown" data-wow-delay="1s">Call Now</span>
<span class="line-top wow fadeInLeft" data-wow-delay="1s"> -->
<span class="line-square-l-t line-square"></span>
<span class="line-square-r-t line-square"></span>
</span>
<span class="line-bottom wow fadeInRight" data-wow-delay="1s">
<span class="line-square-l-b line-square"></span>
<span class="line-square-r-b line-square"></span>
</span>
</a>
</div>
</div>
</div>
</div>
</main>
<br><br>
<h2 style="text-align: center;">Council 7.O Registration Form</h2>
  <hr>
  <br>
  
  <form action="council.php" method="post" >
                <label for="" class="label-f">Name :</label>
                <input type="text" name="name"    placeholder=""    class="input" id="name">
                <label for="" class="label-f">Email :</label>
                <input type="Email" name="email">
                <label for="" class="label-f">Course :</label>
                <input type="text" name="course"  placeholder=""    class="input" id="course">
                <label for="" class="label-f">Branch :</label>
                <input type="text" name="branch"  placeholder=""    class="input" id="branch">
                <label for="" class="label-f">Year :</label>
                <input type="text" name="year"    placeholder=""    class="input" id="year">
                <label for="" class="label-f">Whatsapp Phone Number :</label>
                <input type="text" name="phone"   placeholder=""    class="input" id="phone">
                <br>
           <a href="index.html">   <button style="padding:5px; border-radius:3px; width:100px; background-color:black; color:white; margin-left:47%; " id="button">Register</button></a>  
  </form>
  <br>
  
<footer class="footer bgc-dark text-white">
  <div class="container">
  <section class="footer-top text-center-sm">
  <div class="row-columns row">
  <div class="column col-md-6">
  <div class="social">
  
  <a href="https://www.facebook.com/LiterarioClub/"><img src="img/f.webp"></a>
  <a href="https://www.instagram.com/literario_glau/"><img src="img/i.webp"></a>
  <a href="https://www.linkedin.com/in/literario-glau-94b2231a4"><img src="img/l.webp"></a>
  <a href="https://twitter.com/literarioglau"><img src="img/t.webp"></a>
  <a href="https://www.youtube.com/channel/UC3PNOuDH-5M0W1gzohZY62A"><img src="img/y.webp"></a>
  </div>
  </div>
  <div class="text-right-md column col-md-6">
  <!--<div class="footer-links">
  <a href="#">Terms of service</a>
  <a href="#">Private police</a>
  <a href="#">Information</a>
  </div>-->
  </div>
  </div>
  </section>
  <div class="copyright text-center">
  <i class="text-primary">Literario</i> © 2020. All rights reserved
  <br>Designed and Developed by <a href="D:\literario-main\literario-main\team\webdesign.html">Web Development Team Of Literario</a>
  </div>
  </div>
  </footer>
</div>
</html>