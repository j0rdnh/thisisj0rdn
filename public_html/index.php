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

</div>

<?php include "footer.php"; ?>