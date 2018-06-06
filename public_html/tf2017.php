<?php
include "header.php";
include "media.php";

$images = $tf2017media;

include "main_grid.php";

  foreach ($images as $image) {
    mainGrid($image);
  }

?>

</div>

<?=include "footer.php";?>
