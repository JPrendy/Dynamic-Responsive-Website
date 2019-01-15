<?php
    include 'partials/header.php';
    include 'database/db.php';
    $sqlStaff ="SELECT * FROM staff ORDER BY staffid asc";
    $resultStaff = mysqli_query($conn, $sqlStaff);
    $sqlVolunteer="SELECT * FROM volunteer ORDER BY volunteerid asc";
    $resultVolunteer = mysqli_query($conn, $sqlVolunteer);
    $sqlDirectors="SELECT * FROM directors ORDER BY directorid asc";
    $resultDirectors = mysqli_query($conn, $sqlDirectors);
?>
<div  class="col-sm-12">
  <p id="staff"></p>
<h1 class="staffHeader">The Team</h1>
</div>
<?php foreach ($resultStaff as  $key => $value) { ?>
<div class="col-sm-4">
<div class="cardBody"> 
<div class="card">
        <img class="card-img-top staffImage" src="images/staff/<?php echo $value["staffImage"] ?>" alt="Card image">
        <div class="card-body">
          <h4 class="card-title"><?php echo $value["staffname"] ?></h4>
          <p class="card-text"><?php echo $value["stafftitle"] ?></p>
          <p class="card-text"><?php echo $value["staffmessage"] ?></p>
</div>
</div>
</div>
</div>
<?php } ?>
<div  class="col-sm-12" id="volunteerHeaderContainer">
<h1 class="volunteerHeader">Volunteers</h1>
</div>

<?php foreach ($resultVolunteer as  $key => $value) { ?>
  <div class="col-sm-4">
  <div class="cardBody"> 
  <div class="card">
          <img class="card-img-top staffImage" src="images/staff/<?php echo $value["volunteerImage"] ?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?php echo $value["volunteername"] ?></h4>
            <p class="card-text"><?php echo $value["volunteertitle"] ?></p>
            <p class="card-text"><?php echo $value["volunteermessage"] ?></p>
  </div>
  </div>
  </div>
  </div>
  <?php } ?>


  <div  class="col-sm-12" id="volunteerHeaderContainer">
<h1 class="volunteerHeader">Board of Directors</h1>
</div>

  <?php foreach ($resultDirectors as  $key => $value) { ?>
  <div class="col-sm-4">
  <div class="cardBody"> 
  <div class="card">
          <img class="card-img-top staffImage" src="images/staff/<?php echo $value["directorimage"] ?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?php echo $value["directorname"] ?></h4>
            <p class="card-text"><?php echo $value["directortitle"] ?></p>
            <p class="card-text"><?php echo $value["directormessage"] ?></p>
  </div>
  </div>
  </div>
  </div>
<?php } ?>



<?php   
include 'partials/footer.php';
?>