<!DOCTYPE html>
<html lang="en">
<head>
  <title>Youth Project Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--Need this for hamburger menu in mobile mode-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="images/favicon.jpg">
  <link
      href="https://fonts.googleapis.com/css?family=Patrick+Hand"
      rel="stylesheet"
    />
    <!-- The following link is a good php formatter https://www.tutorialspoint.com/online_php_formatter.htm -->
</head>
<body>

<div class="header text-center" >
<h1 class="indexHeader">Dynamic Responsive Website</h1>
</div>

<!-- to change the navbar padding, so you can easily change colours, it is important you change the following 
padding to 0

.navbar {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem;
} -->






<!-- To have the navbar and the div bar with the notification in the fixed area, you need to tag it in a div tag-->
<div id="fixedHeader">
<nav class="navbar navbar-expand-lg  bg-dark navbar-dark"  id="myHeader">
  <a class="navbar-brand" href="index.php"><span class="fa fa-home"> Home</span></a>
  <button class="navbar-toggler" id="navbarT" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
    <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li> 
      <li class="nav-item">
          <a class="nav-link" href="staff.php#staff">Staff</a>
        </li>  
      <li class="nav-item">
        <a class="nav-link" href="news.php?n=1">News</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="keep_project.php">Keep Project</a>
        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        KEEP Project
      </a> -->
      <!-- <div class="dropdown-menu">
        <a class="dropdown-item" href="keep_project.php#keepHeader">Who We Are</a>
        <a class="dropdown-item" href="keep_project.php#whatWeDo">What We Do </a>
        <a class="dropdown-item" href="keep_project.php#typeOfP">Types of Programmes</a>
      </div> -->
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="young_leaders.php">Young Leaders Project</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="mainstream_project.php">Mainstream Project</a>
      </li>  
        <li class="nav-item">
            <a class="nav-link" href="volunteers.php">Volunteers</a>
          </li> 
          <li class="nav-item">
              <a class="nav-link" href="directors.php">Directors</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="contacts.php">Contact Us</a>
            </li>
    </ul>
  </div>  
</nav>
<?php
    include 'database/db.php';
    $sqlNotification ="SELECT * FROM notification";
    $resultNotification = mysqli_query($conn, $sqlNotification);
?>
<div class="notificationTitle" id="notificationTag">
  <?php foreach ($resultNotification as  $key => $value) { 
   if ($value["notificationmessage"] == "") { 
   }else{ 
   echo $value["notificationmessage"]; 
   } 
  } ?>
</div>
</div>
<div class="container" style="margin-top:30px">
  <div class="row">

