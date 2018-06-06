<?php 
include "header.php";
include "media.php";
include "nav.php";

$images = array_merge($tf2017media, $tsp180421media, $rawmedia);

include "main_grid.php";

    for ($i=0; $i<=10; $i++) {
      $image = $images[$i];
      mainGrid($image);
    }?>
  </div>
</div>
<?php include "footer.php"; ?>