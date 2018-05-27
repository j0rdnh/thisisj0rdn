<div id="main-grid">
    <?php
    $images = [
        "clueman-general004.jpg",
        "makayla_donica-dj_they.jpg",
        "makayla_donica-general007.jpg",
        "terry_radio-bacxte.jpg",
        "terry_radio-beta_librae.jpg",
        "terry_radio-beta_librae002.jpg",
        "wes_landis-peter_anthony.jpg",
        "cxpa.mp4",
        "dj_ry-general015.mp4",
        "dj_they-general011.mp4",
        "dj_they.mp4",
        "jack_clayton-shortwave.mp4",
        "makayla_donica-expo70.mp4",
        "makayla_donica-peter_anthony.mp4",
        "opheliaxz.mp4",
        "terry_radio-ulla.mp4",
        "training.mp4",
    ];

    shuffle($images);

    ?>
    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
        <?php
        foreach ($images as $image) {
            $width2 = rand(0, 6); 
            if ($width2 == 5) {
                echo '<div class="grid-item grid-item--width2"><img src="/images/'.$image.'"></div>';
            } else {
                echo '<div class="grid-item"><img src="/images/'.$image.'"></div>';
            }
        }?>
    </div>
</div>