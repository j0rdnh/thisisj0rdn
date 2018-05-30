<div id="main-grid">
    <?php
    shuffle($images);

    ?>
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
        <?php
        for ($i=0; $i<=10; $i++) {
            $width2 = rand(0, 6);
            echo "<div class=\"grid-item"; 
            if ($width2 == 5) {
                echo " grid-item--width2";
            } echo " {$images[$i][1][0]}\">";
            if (strpos($images[$i][0], "mp4") || strpos($images[$i][0], "m4v") !== false) {
                echo "<video autoplay loop muted playsinline src=\"images/{$images[$i][0]}\" type=\"video/mp4\"></div>";
            } else {
                echo "<img src=\"images/{$images[$i][0]}\"></div>";
            }
        }?>
    </div>
</div>
</div>