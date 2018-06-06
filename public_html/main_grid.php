<div class="grid">
  <div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>

  <?php 
  
  shuffle($images);
  

  function mainGrid($img) {
    $width2 = rand(0, 6);
    $isWidth2 = ($width2 == 5) ? " grid-item--width2\"" : "\"";
    $isVideo = 
      (strpos($img[0], "mp4") || strpos($img[0], "m4v") !== false) ?
        "<video autoplay loop muted playsinline src=\"images/{$img[0]}\" type=\"video/mp4\">" :
        "<img src=\"images/{$img[0]}\">";
        
    echo 
      "<div class=\"grid-item{$isWidth2} {$img[1][0]}\">
        {$isVideo}
        <div class=\"over-item\">
          <div class\"\"></div>
        </div>
      </div>";
  };

  ?>