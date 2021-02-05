<meta property="fb:app_id" content="1283434705339233" />
<meta property="og:url" content="<?= current_url() ?>" />
<meta property="og:title" content="<?= ucwords($row->judul) ?>" />
<meta property="og:description" content="<?= html_entity_decode(substr(ucfirst($row->isi), 0, 30)) ?>" />
<meta property="og:image" content="<?= base_url('upload/berita/' . $row->thumb); ?>" />
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="300" />
<meta property="og:type" content="website" />