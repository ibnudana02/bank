<section id="page-content">
    <div class="container">
        <div class="page-title text-center">
            <h1>Berita - Terbaru</h1>
            <br>
        </div>
        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
            <?php foreach ($berita as $key => $value) : ?>
                <div class="col-md-4 post-item border shadow">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="<?= base_url('upload/berita/' . $value->gambar) ?>">
                            </a>
                            <span class="post-meta-category"><a href="#"><?= $value->kategori ?></a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('M d, Y', strtotime($value->created_on)) ?></span>
                            <h2><a href="#"><?= $value->judul ?>
                                </a></h2>
                            <p><?= substr(html_entity_decode($value->isi), 0, 40) ?></p>
                            <div class="post-author"> <img src="<?= base_url('upload/user/' . $value->profil) ?>">
                                <p>by <a href="https://instagram.com/m_ibnuwardana" target="_blank"><?= ucwords(strtolower($value->name)) ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>