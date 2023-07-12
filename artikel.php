<?php require_once("controller/script.php");
if (!isset($_GET['nya'])) {
  $_SESSION["page-name"] = "Artikel";
  $_SESSION["page-url"] = "artikel";
} else {
  $title = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_GET['nya']))));
  $title = str_replace('_', ' ', $title);
  $takeArtikel = mysqli_query($conn, "SELECT * FROM artikel JOIN sub_kegiatan ON artikel.id_sub_kegiatan=sub_kegiatan.id_sub_kegiatan WHERE artikel.title='$title'");
  $_SESSION["page-name"] = "Artikel $title";
  $_SESSION["page-url"] = "artikel?nya=$title";
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

    <section class="section normalhead lb">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
            <h2>Artikel</h2>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end section -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="sidebar col-md-4 col-sm-4">
            <div class="widget clearfix">
              <h4 class="widget-title">Pencarian</h4>
              <div class="newsletter-widget">
                <form method="post" class="form-inline" role="search">
                  <div class="form-1">
                    <input type="text" name="keyword" class="form-control" placeholder="Cari disini..." />
                    <button type="submit" name="search-artikel" class="btn btn-primary">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </form>
              </div>
              <!-- end newsletter -->
            </div>
            <!-- end widget -->

            <div class="widget clearfix">
              <div class="category-widget">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9126874274957459" crossorigin="anonymous"></script>
                <!-- Wikisuku -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9126874274957459" data-ad-slot="8033833224" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
              </div>
              <!-- end category -->
            </div>
            <!-- end widget -->

            <div class="widget clearfix">
              <h4 class="widget-title">Kegiatan</h4>
              <div class="category-widget">
                <ul>
                  <?php if (mysqli_num_rows($takeKegiatan2) > 0) {
                    while ($row = mysqli_fetch_assoc($takeKegiatan2)) {
                      $nama_kegiatan = str_replace(' ', '_', $row['nama_kegiatan']); ?>
                      <li><a href="kegiatan?tentang=<?= $nama_kegiatan ?>"><?= $row['nama_kegiatan'] ?></a></li>
                  <?php }
                  } ?>
                </ul>
              </div>
              <!-- end category -->
            </div>
            <!-- end widget -->
          </div>
          <!-- end col -->

          <?php if (!isset($_GET['nya'])) { ?>
            <div class="content col-md-8">
              <?php if (mysqli_num_rows($takeSub_kegiatan) == 0) { ?>
                <?php } else if (mysqli_num_rows($takeSub_kegiatan) > 0) {
                while ($rowSub = mysqli_fetch_assoc($takeSub_kegiatan)) { ?>
                  <div class="blog-box clearfix row">
                    <div class="media-box col-md-4">
                      <a href="artikel?nya=<?= str_replace(' ', '_', $rowSub['title']); ?>" title=""><img src="<?= $rowSub['image'] ?>" alt="" class="img-responsive img-thumbnail"></a>
                    </div><!-- end media-box -->
                    <div class="blog-desc col-md-8">
                      <div class="blog-meta">
                        <ul class="list-inline">
                          <li><i class="fa fa-folder-open-o"></i> <?= $rowSub['sub_kegiatan'] ?></li>
                        </ul>
                      </div><!-- end meta -->
                      <h3><a href="artikel?nya=<?= str_replace(' ', '_', $rowSub['title']); ?>" title=""><?= $rowSub['title'] ?></a></h3>
                      <?php $string = strip_tags($rowSub['content']); // Menghilangkan tag HTML dari string
                      if (strlen($string) > 250) {
                        echo substr($string, 0, 250) . "...";
                      }
                      ?>
                      <a class="" href="artikel?nya=<?= str_replace(' ', '_', $rowSub['title']); ?>">Baca lebih</a>
                    </div><!-- end blog-desc -->
                  </div><!-- end blogbox -->
              <?php }
              } ?>
            </div>
            <?php } else if (isset($_GET['nya'])) {
            if (mysqli_num_rows($takeArtikel) > 0) {
              while ($row = mysqli_fetch_assoc($takeArtikel)) { ?>
                <div class="content col-md-8 blog-alt">
                  <div class="blog-box clearfix">
                    <div class="media-box">
                      <img src="<?= $row['image'] ?>" style="width: 100%;height: 450px;" alt="<?= "Gambar " . $row['title'] ?>" class="img-responsive img-thumbnail" />
                    </div>
                    <!-- end media-box -->
                    <div class="blog-single">
                      <div class="blog-meta">
                        <ul class="list-inline">
                          <li>
                            <i class="fa fa-calendar-o"></i> <?php $publish = date_create($row["published_date"]);
                                                              echo date_format($publish, "d M Y"); ?>
                          </li>
                          <li>
                            <i class="fa fa-folder-open-o"></i> <?= $row['sub_kegiatan'] ?>
                          </li>
                        </ul>
                      </div>
                      <!-- end meta -->
                      <h3 class="post-title">
                        <?= $row['title'] ?>
                      </h3>
                      <?= $row['content'] ?>

                    </div>
                    <!-- end blog-desc -->
                  </div>
                  <!-- end blogbox -->
                </div>
          <?php }
            }
          } ?>
          <!-- end content -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end section -->

    <?php require_once("resources/footer.php") ?>

</body>

</html>