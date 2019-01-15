<?php
include 'partials/header.php';
include 'database/db.php';
if (!isset($_GET['n']))
{
$number = 0;
}else{
$number = $_GET['n'];
}
?>

<?php
$sql = "SELECT * FROM news where newsid=$number";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) { 
?>

<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="storyFull">
    <h1 class="newsTitle"><?php echo $row["title"] ?></h1>
    <p  class="newsDate"><?php echo $row["date"] ?></p>
    <!-- This is really important to have to show the html tags in the mysql database -->
    <p><?php echo $row["content"] ?></p>

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

</div>
</div>
<div class="col-sm-2"></div>

<?php 
    }
} else { ?>
    <h1>No results were found</h1>
<?php }
mysqli_close($conn);
?> 

     <?php   
        
        include 'partials/footer.php';
    ?>