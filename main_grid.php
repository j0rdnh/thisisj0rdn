<div class="grid">
  <div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>

  <?php 
  
  shuffle($images);
  
  function mainGrid($img) {
    $width2 = rand(0, 3);
    // only load jpg items with width2
    $isWidth2 = 
      (($width2 == 2) && strpos($img[0], ".jpg") !== false) ? 
        " grid-item--width2 " :
        null;
    $isVideo = 
      (strpos($img[0], ".mp4") || strpos($img[0], ".m4v") !== false) ?
        "<video id=\"video\" preload=\"auto\" autoplay loop muted playsinline src=\"images/{$img[0]}\" type=\"video/mp4\" poster=\"images/{$img[3]}\" class=\"lazyload\">" :
        "<img src=\"images/{$img[0]}\" class=\"lazyload\">";
  
    // insert item
    echo 
      "<div class=\"grid-item{$isWidth2} {$img[1][0]}\">
        {$isVideo}
        <div class=\"over-item\">
          <div class\"\"></div>
        </div>
      </div>";
  };

  ?>