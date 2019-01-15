<?php
include 'partials/header.php';
include 'database/db.php';

    $sqlDirectors="SELECT * FROM directors ORDER BY directorid asc";
    $resultDirectors = mysqli_query($conn, $sqlDirectors);
?>
<div  class="col-sm-12">
        <h1 class="bomHeader">Board of Directors</h1>
        </div>
        <div class="col-sm-2"></div>       
<div class="col-sm-12">
<p class="titleAU">Board of Directors</p>
            <p> Youth Project is a company limited by guarantee. It’s run by a voluntary board of management. There are 3 directors representing the community and agencies we work with. </p>
            
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