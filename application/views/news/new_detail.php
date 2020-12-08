<head>
    <meta property="og:url" content="<?= current_url() ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= $row->judul ?>" />
    <meta property="og:description" content="<?= htmlspecialchars_decode(substr($row->isi, 0, 30)) ?>" />
    <meta property="og:image" content="<?= base_url('upload/berita/' . $row->image); ?>" />
</head>
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <div class="content col-lg-9">
                <div id="blog" class="single-post">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-animate="zoomIn">
                                <a href="#">
                                    <img alt="" src="<?= base_url('upload/berita/' . $row->image); ?>">
                                </a>
                            </div>
                            <div class="post-item-description">
                                <h2><?= ucwords($row->judul); ?></h2>
                                <div class="post-meta">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('M d, Y', strtotime($row->created_on)) ?></span>
                                    <span class="post-meta-category"><a href="#"><i class="fa fa-tag"></i><?= $row->kategori ?></a></span>
                                    <div class="post-meta-share">
                                        <a class="btn btn-xs btn-slide btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-twitter" href="https://twitter.com/intent/tweet?url=<?= urlencode(current_url()) ?>" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                            <span>Twitter</span>
                                        </a>
                                        <a class="btn btn-xs btn-slide btn-whatsapp" href="whatsapp://send?text=<?= current_url() ?>" target="_blank">
                                            <i class="fab fa-whatsapp"></i>
                                            <span>Whatsapp</span>
                                        </a>
                                    </div>
                                </div>
                                <?= htmlspecialchars_decode($row->isi) ?>
                            </div>
                            <div class="seperator"><i class="fa fa-chevron-down"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar sticky-sidebar col-lg-3">
                <div class="widget widget-newsletter">
                    <form id="widget-search-form-sidebar" action="#" method="get">
                        <div class="input-group">
                            <input type="text" aria-required="true" name="q" class="form-control widget-search-form" placeholder="Search for pages...">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="widget">
                    <div class="tabs">
                        <ul class="nav nav-tabs nav-justified" id="tabs-posts" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Recent Berita</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabs-posts-content">
                            <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                <div class="post-thumbnail-list">
                                    <?php foreach ($berita as $value) : ?>
                                        <div class="post-thumbnail-entry">
                                            <img alt="" src="<?= base_url('upload/berita/' . $value->image) ?>">
                                            <div class="post-thumbnail-content">
                                                <a href="<?= base_url('berita/' . $value->slug)  ?>"><?= ucwords($value->judul) ?></a>
                                                <span class="post-date"><i class="icon-calendar"></i> <?php echo date('D, d M Y', strtotime($value->created_on)) ?></span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>