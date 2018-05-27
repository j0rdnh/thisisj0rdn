<div id="main-grid">
    <?php
    $images = [
        ["2017_terryfest/clueman-general004.jpg", "terryfest2017"],
        ["2017_terryfest/makayla_donica-dj_they.jpg", "terryfest2017"],
        ["2017_terryfest/makayla_donica-general007.jpg", "terryfest2017"],
        ["2017_terryfest/terry_radio-beta_librae.jpg", "terryfest2017"],
        ["2017_terryfest/wes_landis-peter_anthony.jpg", "terryfest2017"],
        ["2017_terryfest/cxpa.mp4", "terryfest2017"],
        ["2017_terryfest/dj_ry-general015.mp4", "terryfest2017"],
        ["2017_terryfest/dj_they-general011.mp4", "terryfest2017"],
        ["2017_terryfest/dj_they.mp4", "terryfest2017"],
        ["2017_terryfest/jack_clayton-shortwave.mp4", "terryfest2017"],
        ["2017_terryfest/makayla_donica-expo70.mp4", "terryfest2017"],
        ["2017_terryfest/makayla_donica-peter_anthony.mp4", "terryfest2017"],
        ["2017_terryfest/opheliaxz.mp4", "terryfest2017"],
        ["2017_terryfest/terry_radio-ulla.mp4", "terryfest2017"],
        ["2017_terryfest/training.mp4", "terryfest2017"],
        ["tsp042118/IMG_1657.mp4", "tsp0418"],
        ["tsp042118/IMG_1659.jpg", "tsp0418"],
        ["tsp042118/IMG_1664.mp4", "tsp0418"],
        ["tsp042118/IMG_1665.mp4", "tsp0418"],
        ["tsp042118/IMG_1666.mp4", "tsp0418"],
        ["tsp042118/IMG_1668.mp4", "tsp0418"],
        ["tsp042118/IMG_1671.mp4", "tsp0418"],
        ["tsp042118/IMG_1681.jpg", "tsp0418"],
        ["tsp042118/IMG_1653.m4v", "tsp0418"],
        ["tsp042118/IMG_1658.m4v", "tsp0418"],
        ["raw/bendy.m4v", "raw"],
        ["raw/blobGlitch.m4v", "raw"],
        ["raw/circles1.m4v", "raw"],
        ["raw/doomy.m4v", "raw"],
        ["raw/fuzz.m4v", "raw"],
        ["raw/blox.m4v", "raw"],
        ["raw/linesRGB.m4v", "raw"],
        ["raw/heatlips.m4v", "raw"],
        ["raw/pinkframe.m4v", "raw"],
        ["raw/redlips.m4v", "raw"],
        ["raw/tropPers.m4v", "raw"],
        ["raw/waves2.m4v", "raw"],
        ["raw/slowWalk2.m4v", "raw"],
        ["raw/haw.m4v", "raw"],
        ["raw/flarss.m4v", "raw"],
        ["raw/tip10.m4v", "raw"],
        ["raw/cross5.m4v", "raw"],
        ["raw/staticglitch.m4v", "raw"],
        ["raw/sunset-2.m4v", "raw"],
        ["raw/plant-1.m4v", "raw"],
        ["raw/gt-3.m4v", "raw"],
        ["raw/gt-2.m4v", "raw"],
        ["raw/gt-1.m4v", "raw"],
        ["raw/redstrobe.m4v", "raw"],
        ["raw/redblackline.m4v", "raw"],
        ["raw/redlineswirl.m4v", "raw"],
        ["raw/tsp1.m4v", "raw"],
        ["raw/tsp2.m4v", "raw"],
        ["raw/tsp4.m4v", "raw"],
        ["raw/tsp6.m4v", "raw"],
        ["raw/vertlinesglitch.m4v", "raw"],
        ["raw/staticlineglitch.m4v", "raw"],
        ["raw/greenstrobe.m4v", "raw"],
    ];

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
            } if (strpos($images[$i], "terryfest") !== false) {
                echo " terryfest";
            } else if (strpos($images[$i], "tsp") !== false) {
                echo " tsp";
            } else if (strpos($images[$i], "raw") !== false) {
                echo " raw";
            } echo "\">";
            if (strpos($images[$i], "mp4") || strpos($images[$i], "m4v") !== false) {
                echo "<video autoplay loop muted playsinline src=\"images/$images[$i]\" type=\"video/mp4\"></div>";
            } else {
                echo "<img src=\"images/$images[$i]\"></div>";
            }
        }?>
    </div>
</div>