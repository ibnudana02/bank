<div class="container-fluid">
    <div class="row">
        <div id="slider" class="inspiro-slider col-lg-9" data-height-xs="460">
            <?php foreach ($slider as $row) : ?>
                <div class="slide" style="background-image:url('<?php echo base_url('upload/slider/' . $row->image); ?>');">
                    <div class="container">
                        <div class="slide-captions">

                            <!-- <h1 data-caption-animation="rotateInUpLeft">Beautiful Websites</h1>
                    <h3 data-caption-animation="rotateInUpLeft" data-caption-delay="300">Are now easy to made!</h3> -->

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-lg-3">
            <table border="0" cellspacing="2" cellpadding="7" style="font-family: Tahoma,Geneva,sans-serif;font-size: 13px;font-weight: normal;width: auto;background-color: #ffffff;height: auto;border-color: #ffffff;margin-left: auto;margin-right: auto;">
                <tbody>

                    <tr style="height: 20px;">
                        <td colspan="2" style="text-align: center;width:258px;"><strong>Suku Bunga :</strong></td>
                    </tr>
                    <tr>
                        <td>BI Rate</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>LPS BPR Rate</td>
                        <td></td>
                    </tr>
                    <tr style="height: 20px;">
                        <td colspan="2" style="text-align: center;width:258px;"><strong>Tabungan :</strong></td>
                    </tr>
                    <?php foreach ($tabungan as $tab) : ?>
                        <tr>
                            <td><?= ucwords($tab->produk) ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr style="height: 20px;">
                        <td colspan="2" style="text-align: center;width:258px;"><strong>Deposito :</strong></td>
                    </tr>
                    <tr style="height: 20px;">
                        <td colspan="2" style="text-align: center;width:258px;"><strong>Jam Kerja :</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>