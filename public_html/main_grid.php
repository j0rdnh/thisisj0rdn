<?php
function mainGrid($img) {
  $width2 = rand(0, 6);
  echo "<div class=\"grid-item"; 
  if ($width2 == 5) {
    echo " grid-item--width2";
  } echo " {$img[1][0]}\">";
  if (strpos($img[0], "mp4") || strpos($img[0], "m4v") !== false) {
    echo "<video autoplay loop muted playsinline src=\"images/{$img[0]}\" type=\"video/mp4\"></div>";
  } else {
    echo "<img src=\"images/{$img[0]}\"></div>";
  }
}; ?>

<div class="grid">
  <div class="grid-sizer"></div>
  <div class="gutter-sizer"></div>
  <?= shuffle($images); ?>