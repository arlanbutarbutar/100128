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
            <div style="width: 100%;height: 300px;padding: 20px;background: linear-gradient(to bottom, rgba(21, 105, 167, 0.8), rgba(14, 59, 93, 0.8));border-radius: 20px;">
              <h2>Tradisi Sirih pinang suku dawan</h2>
              <h3 style="font-size: 35px;color: #fff;">Selamat datanng di website tradisi sirih pinang suku Dawan di Pulau Timor</h3>
              <p class="lead">Terimakasih telah berkunjung ke situ website kami. kami mengundang anda untuk melihat-lihat website kami untuk kemudian mendapat gambaran seputar tradisi sirih pinang atau biasa di sebut Puah Manus.</p>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end section -->

    <?php require_once("resources/footer.php") ?>

</body>

</html>