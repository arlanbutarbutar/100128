<div class="translate" id="google_translate_element"></div>
<div class="gtranslate_wrapper"></div>
<script>
  window.gtranslateSettings = {
    "default_language": "id",
    "native_language_names": true,
    "detect_browser_language": true,
    "languages": ["id", "fr", "de", "it", "es", "en"],
    "wrapper_selector": ".gtranslate_wrapper"
  }
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

<header class="header site-header">
  <div class="container">
    <nav class="navbar navbar-default yamm">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./" style="font-size: 40px;font-weight: bold;">Wikisuku</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Beranda</a></li>
            <li class="dropdown yamm-fw hasmenu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kegiatan <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="row">
                      <div class="col-md-4">
                        <ul>
                          <?php if (mysqli_num_rows($takeKegiatan) > 0) {
                            while ($row = mysqli_fetch_assoc($takeKegiatan)) {
                              $nama_kegiatan = str_replace(' ', '-', $row['nama_kegiatan']); ?>
                              <li><a href="kegiatan?tentang=<?= $nama_kegiatan ?>" class="text-dark"><?= $row['nama_kegiatan'] ?></a></li>
                          <?php }
                          } ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="artikel">Artikel</a></li>
            <li class="lastlink hidden-xs hidden-sm"><a class="btn btn-primary" href="auth/">Masuk</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
    </nav><!-- end nav -->
  </div><!-- end container -->
</header><!-- end header -->