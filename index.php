<?php 

include "header.php";
include "media.php";
include "nav.php";

// use all images
$images = array_merge($tf2017media, $tsp180421media, $rawmedia);

include "main_grid.php";

// display 10 images
  for ($i=0; $i<=10; $i++) {
    $image = $images[$i];
    mainGrid($image);
  }
    
?>

</div> <!-- end grid -->
<div id="bottom-nav" class="main-nav">
    <ul>
      <li><a href="allimages.php" class=".main-button">SEE ALL</a></li>
    </ul>
  </div>

<?php include "footer.php"; ?>