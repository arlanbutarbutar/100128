<?php require_once("controller/script.php");
if (!isset($_GET['tentang'])) {
  header("Location: ./");
  exit();
} else {
  $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_GET['tentang']))));
  $nama = str_replace('-', ' ', $nama);
  if (isset($_POST['search-kegiatan'])) {
    $keyword = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_POST['keyword']))));
    $takeSub = mysqli_query($conn, "SELECT * FROM sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan JOIN artikel ON sub_kegiatan.id_sub_kegiatan=artikel.id_sub_kegiatan WHERE kegiatan.nama_kegiatan='$nama' AND artikel.title LIKE '%$keyword%'");
  } else {
    $takeSub = mysqli_query($conn, "SELECT * FROM sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan JOIN artikel ON sub_kegiatan.id_sub_kegiatan=artikel.id_sub_kegiatan WHERE kegiatan.nama_kegiatan='$nama'");
  }
  $_SESSION["page-name"] = "Kegiatan $nama";
  $_SESSION["page-url"] = "kegiatan?tentang=$nama";
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php require_once("resources/header.php") ?>
</head>

<body>

  <div id="wrapper">
    <?php require_once("resources/navbar.php") ?>

    <?php if (mysqli_num_rows($takeSub) == 0) { ?>
      <section class="section transheader parallax" data-stellar-background-ratio="0.5" style="background-image:url('assets/images/bg_01.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
              <h2>Kegiatan</h2>
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end container -->
      </section><!-- end section -->
    <?php } elseif (mysqli_num_rows($takeSub) > 0) { ?>
      <section class="section transheader parallax" data-stellar-background-ratio="0.5" style="background-image:url('assets/images/bg_01.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
              <h2>Kegiatan <?= $nama ?></h2>
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end container -->
      </section><!-- end section -->

      <section class="section">
        <div class="container">
          <div class="row">
            <div class="content col-md-8">
              <?php while ($row = mysqli_fetch_assoc($takeSub)) { ?>
                <div class="blog-box clearfix row">
                  <div class="media-box col-md-4">
                    <a href="artikel?nya=<?= str_replace(' ', '-', $row['title']); ?>" title=""><img src="<?= $row['image'] ?>" alt="" class="img-responsive img-thumbnail"></a>
                  </div><!-- end media-box -->
                  <div class="blog-desc col-md-8">
                    <div class="blog-meta">
                      <ul class="list-inline">
                        <li><i class="fa fa-folder-open-o"></i> <?= $row['sub_kegiatan'] ?></li>
                      </ul>
                    </div><!-- end meta -->
                    <h3><a href="artikel?nya=<?= str_replace(' ', '-', $row['title']); ?>" title=""><?= $row['title'] ?></a></h3>
                    <?php $string = strip_tags($row['content']); // Menghilangkan tag HTML dari string
                    if (strlen($string) > 250) {
                      echo substr($string, 0, 250) . "...";
                    }
                    ?>
                    <a class="" href="artikel?nya=<?= str_replace(' ', '-', $row['title']); ?>">Baca lebih</a>
                  </div><!-- end blog-desc -->
                </div><!-- end blogbox -->
              <?php } ?>
            </div><!-- end content -->

            <div class="sidebar col-md-4 col-sm-4">
              <div class="widget clearfix">
                <h4 class="widget-title">Pencarian</h4>
                <div class="newsletter-widget">
                  <form method="post" class="form-inline" role="search">
                    <div class="form-1">
                      <input type="text" name="keyword" class="form-control" placeholder="Cari disini..." />
                      <button type="submit" name="search-kegiatan" class="btn btn-primary">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <!-- end newsletter -->
              </div>

              <div class="widget clearfix">
                <div class="category-widget">
                  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9126874274957459" crossorigin="anonymous"></script>
                  <!-- Wikisuku -->
                  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9126874274957459" data-ad-slot="8033833224" data-ad-format="auto" data-full-width-responsive="true"></ins>
                  <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div><!-- end category -->
              </div><!-- end widget -->

              <div class="widget clearfix">
                <h4 class="widget-title">Kegiatan</h4>
                <div class="category-widget">
                  <ul>
                    <?php if (mysqli_num_rows($takeKegiatan2) > 0) {
                      while ($row = mysqli_fetch_assoc($takeKegiatan2)) {
                        $nama_kegiatan = str_replace(' ', '-', $row['nama_kegiatan']); ?>
                        <li><a href="kegiatan?tentang=<?= $nama_kegiatan ?>"><?= $row['nama_kegiatan'] ?></a></li>
                    <?php }
                    } ?>
                  </ul>
                </div>
                <!-- end category -->
              </div>
              <!-- end widget -->
            </div><!-- end col -->
          </div><!-- end row -->
        </div><!-- end container -->
      </section><!-- end section -->
    <?php } ?>

    <?php require_once("resources/footer.php") ?>

</body>

</html>