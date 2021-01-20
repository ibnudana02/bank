<div id="slider" class="inspiro-slider" data-height-xs="460">
    <?php foreach ($slider as $row) : ?>
        <div class="slide" style="background-image:url('<?php echo base_url('upload/slider/' . $row->image); ?>');">
            <div class="container">
                <div class="slide-captions text-dark">

                    <!-- <h1 data-caption-animation="rotateInUpLeft">Beautiful Websites</h1>
                    <h3 data-caption-animation="rotateInUpLeft" data-caption-delay="300">Are now easy to made!</h3> -->

                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>