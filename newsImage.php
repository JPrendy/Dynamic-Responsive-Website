<?php if ($row["carousel"] !== "Yes") {?>
                <?php if ($row["image"] == "") { 
                 }else{ ?>
                <img class="newsImage" id="image<?php echo $row["image"]?>identifier" src="images/<?php echo $row["image"]?>">
                <?php } ?>

                    <?php } else { ?>
        <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
 <!-- The slideshow -->
 <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="carouselImage" src="images/<?php echo $row["imageOne"]?>" alt="imageOne"> 
    </div>
    <div class="carousel-item">
        <img class="carouselImage" src="images/<?php echo $row["imageTwo"]?>" alt="Chicago">
    </div>
    <?php if ($row["imageThree"] !== "") { ?>
    <div class="carousel-item">
        <img class="carouselImage" src="images/<?php echo $row["imageThree"]?>" alt="New York">
    </div>
    <?php } ?>
    <?php if ($row["imageFour"] !== "") { ?>
    <div class="carousel-item">
        <img class="carouselImage" src="images/<?php echo $row["imageFour"]?>" alt="New York">
    </div>
    <?php } ?>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
    </div>
   <?php } ?>
