<?php
include 'partials/header.php';
include 'database/db.php';
if (!isset($_GET['n'])) {
    $number = 0;
} else {
    $number = $_GET['n'];
}
if ($number == 0) {
    $firstboundary = 0;
    $lastboundary = 0;
} else {
    $firstboundary = 5 * ($number - 1);
    $lastboundary = 5 * $number;
}
?>


<div  class="col-sm-12">
<h1 class="newsHeader">Latest News</h1>
</div>


<div class="col-sm-3">
<span class="twitterTimeline">    
<h2 class="newsTitle">Latest Tweets</h2>
<a class="twitter-timeline" href="https://twitter.com/merrionstreet?lang=en" data-height="1000"  data-theme="dark">Tweets by Youth Work Ireland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</span>
</div>
<div class="col-sm-7">


<?php
$sql = "SELECT * FROM news ORDER BY newsid desc LIMIT $firstboundary , $lastboundary";
$totalNews = "SELECT COUNT(newsid) as Test FROM news";
$result = mysqli_query($conn, $sql);
$totalNewsResult = mysqli_query($conn, $totalNews);
$rowNewsTotal = mysqli_fetch_assoc($totalNewsResult);
if ($rowNewsTotal["Test"] > $lastboundary) {
    $visibleButton = "True";
} else {
    $visibleButton = "False";
}

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
?>  <div class="story">
                <h1 class="newsTitle"><?php echo $row["title"] ?></h1>
                <p class="newsDate"><?php echo $row["date"] ?></p>
                <p><?php echo substr($row["content"], 0, 300) ?> </p>
                <!-- The following will keep the image options to its own file to make it easier to follow -->
                <!-- The following checks if the video tag is yes, we will get the video, if the video is not yes we will get the image -->
                <?php if ($row["video"] != "Yes") {
                include 'newsImage.php'; 
                 } 
                 else 
                 { 
                include 'newsVideo.php';
                 }  ?>
                <!-- End of the include statement -->

                
                <div class="readMore">
                <a  href="readmore.php?n=<?php echo $row["newsid"] ?>"><button type="button" class="btn btn-primary">Read More</button></a>
        </div>
            </div>
    <?php
    }
} else {
    echo "0 results";
} ?>
                 <?php if ($number != 1) { ?>
            <?php if ($visibleButton == "False") { ?>
            <button type="button" class="btn btn-primary" id="previousPage">Previous Page</button>
            <?php
    } ?>
            <?php
} ?>
                <?php if ($visibleButton == "True") { ?>
                    <button type="button" class="btn btn-primary" id="nextPage">Next Page</button>
                <?php
} ?>
      <?php
mysqli_close($conn);
?> 

</div>

        
<?php
include 'partials/footer.php';
?>
