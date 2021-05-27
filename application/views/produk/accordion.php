<div class="d-none d-md-block content col-lg-3">
    <div class="accordion accordion-shadow">
        <div class="ac-item">
            <h5 class="ac-title">Tabungan</h5>
            <div class="ac-content">
                <ul class="list-icon list-icon-colored">
                    <?php foreach ($tabungan as $key => $value) : ?>
                        <li><a href="<?= base_url('produk/' . $value->slug) ?>"><i class="fa fa-paper-plane"></i><?= ucwords($value->produk) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="ac-item">
            <h5 class="ac-title">Deposito</h5>
            <div class="ac-content">
                <ul class="list-icon list-icon-colored">
                    <?php foreach ($deposito as $key => $value) : ?>
                        <li><a href="<?= base_url('produk/' . $value->slug) ?>"><i class="fa fa-paper-plane"></i><?= ucwords($value->produk) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="ac-item">
            <h5 class="ac-title">Kredit</h5>
            <div class="ac-content">
                <ul class="list-icon list-icon-colored">
                    <?php foreach ($kredit as $key => $value) : ?>
                        <li><a href="<?= base_url('produk/' . $value->slug) ?>"><i class="fa fa-paper-plane"></i><?= ucwords($value->produk) ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>