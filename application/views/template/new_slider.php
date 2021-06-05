<!-- <div class="container-fluid"> -->
<div class="row">
    <div id="slider" class="inspiro-slider col-lg-9 wow fadeInLeft" data-height-xs="460">
        <?php foreach ($slider as $row) : ?>
            <div class="slide kenburns" style="background-image:url('<?php echo base_url('upload/slider/' . $row->image); ?>');">
                <div class="bg-overlay"></div>

            </div>
        <?php endforeach; ?>
    </div>
    <div class="col-lg-3 pt-4 wow fadeInRight">
        <table border="0" cellspacing="2" cellpadding="7" style="font-family: Tahoma,Geneva,sans-serif;font-size: 12px;font-weight: normal;width: auto;background-color: #ffffff;height: auto;border-color: #ffffff;margin-left: auto;margin-right: auto;">
            <tbody>
                <tr style="height: 20px;">
                    <td colspan="2" style="background-color: #f9f9f9; height: 20px; text-align: center; width: 270px;"><strong>Suku Bunga :</strong></td>
                </tr>
                <?php foreach ($jenis as $row) : ?>
                    <tr style="height:20px;">
                        <td style="padding-left:10px;"><?= $row->suku_bunga ?></td>
                        <td style="padding-left:10px;text-align:center;"><?= $row->rate ?> %</td>
                    </tr>
                <?php endforeach; ?>
                <tr style="height: 20px;">
                    <td colspan="2" style="background-color: #f9f9f9; height: 20px; text-align: center; width: 270px;"><strong>Tabungan :</strong></td>
                </tr>
                <?php foreach ($tabungan as $tab) : ?>
                    <tr style="height:20px;">
                        <td style="padding-left:10px;"><a href="<?= base_url('produk/' . $tab->slug) ?>"><?= ucwords($tab->produk) ?></a></td>
                        <td style="padding-left:10px;text-align:center;"><?= $tab->suku_bunga ?> %</td>
                    </tr>
                <?php endforeach; ?>
                <tr style="height: 20px;">
                    <td colspan="2" style="background-color: #f9f9f9; height: 20px; text-align: center; width: 270px;"><strong>Deposito :</strong></td>
                </tr>
                <?php foreach ($deposito as $dps) : ?>
                    <tr style="height:20px;">
                        <td style="padding-left:10px;"><a href="<?= base_url('produk/'.$dps->slug) ?>"><?= ucwords($dps->produk) ?></a></td>
                        <td style="padding-left:10px;text-align:center;"><?= $dps->suku_bunga ?> %</td>
                    </tr>
                <?php endforeach; ?>
                <tr style="height: 20px;">
                    <td colspan="2" style="background-color: #f9f9f9; height: 20px; text-align: center; width: 270px;"><strong>Jam Kerja :</strong></td>
                </tr>
                <?php foreach ($jam as $row) : ?>
                    <tr style="height:20px;">
                        <td style="padding-left:10px;"><?= ucwords($row->nm_hari) ?></td>
                        <td style="padding-left:10px;"><?= date('H:i', strtotime($row->jam_masuk)) ?> - <?= date('H:i', strtotime($row->jam_plg)) ?> WIB</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- </div> -->