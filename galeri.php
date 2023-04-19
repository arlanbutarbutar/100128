<?php require_once("controller/script.php");
$_SESSION["page-name"] = "Galeri";
$_SESSION["page-url"] = "galeri";
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
            <h2>Galeri</h2>
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
          <!-- end col -->
          <?php if (mysqli_num_rows($viewGaleri) > 0) {
            while ($row = mysqli_fetch_assoc($viewGaleri)) { ?>
              <div class="content col-lg-3 blog-alt">
                <div class="blog-box clearfix">
                  <div class="media-box">
                    <img src="<?= $row['image'] ?>" style="object-fit: cover;" alt="" class="img-responsive img-thumbnail" />
                  </div>
                </div>
                <!-- end blogbox -->
              </div>
          <?php }
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