<?php require_once("controller/script.php");
$_SESSION["page-name"] = "";
$_SESSION["page-url"] = "./";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php require_once("resources/header.php") ?>
</head>

<body>

  <div id="wrapper">
    <?php require_once("resources/navbar.php") ?>

    <section class="section transheader homepage parallax" data-stellar-background-ratio="0.5" style="background-image:url('assets/images/beranda.jpg');object-fit: cover;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
            <h2>Selamat Datang di <strong>Wikisuku</strong></h2>
            <p class="lead">Sebuah dokumen digital tentang tradisi mama sirih pinang di Suku Dawan</p>
            <form class="calculateform" method="post">
              <div class="item-box">
                <div class="item-top form-inline">
                  <div class="form-group">
                    <div class="input-group2">
                      <span class="input-addon">
                        <i class="fa fa-search"></i>
                      </span>
                      <input type="text" class="form-control" name="keyword" placeholder="Apa yang ingin kamu cari?">
                    </div>
                  </div>
                  <input type="submit" name="search" value="Cari" class="btn btn-default" />
                </div>
              </div>
            </form>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end section -->

    <?php require_once("resources/footer.php") ?>

</body>

</html>