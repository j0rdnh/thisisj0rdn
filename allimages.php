<?php 

include "header.php";
include "media.php";
include "nav.php";

// use all images
$images = array_merge($tf2017media, $tsp180421media, $rawmedia);

include "main_grid.php";

// display images
  foreach ($images as $image) {
    mainGrid($image);
  }
    
?>

</div>

<?php include "footer.php"; ?>