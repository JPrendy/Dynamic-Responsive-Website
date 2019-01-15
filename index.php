<?php

    include 'partials/header.php';
    include 'database/db.php';
?>



<div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <!-- <a href="#">Welcome to the Youth Project Application</a> -->
          <!-- <img src="images/logo10.PNG"> -->
         
        </div>
        <button class="overlayButton btn btn-link" onclick="closeNav()">Click Here</button>
        <!-- <a href="javascript:void(0)" class="overlayButton" onclick="closeNav()"> -->
      </div>

<div class="col-sm-2"></div>

<div class="col-sm-8 indexBody">

       <h1 class="indexHeader"> Welcome to  Youth Project (YP) </h1>
        <p>The  Youth Project is a Company Limited by Guarantee. It was re-established in 2009 to respond to the needs of young people in the  area. It is managed by a voluntary management committee made up of local residents and workers from the area.</p>
        
        <p>YP is a place of welcome, understanding, support and encouragement for young people living in the community. We aim to enhance the lives of our young people, while we cater for all young people, the Project will proactively seek to support those most at risk of isolation of any form. We hope to encourage the uniqueness of individual(s) within an atmosphere of collective responsibility guided by principle(s) of quality.</p>
        
        <p> Youth Project, the KEEP, is co-funded by the Irish Government and the European Social Fund as part of the ESF Programme for Employability, Inclusion and Learning (PEIL) 2014-2020</p>
        
        <div class="learnMore">
          <a  href="about.php"><button type="button" class="btn btn-primary " id="learnM">Learn More About Us </button></a>
  </div>
</div>

<div class="col-sm-2"></div>


     <?php   
        
        include 'partials/footer.php';
    ?>