<?php require_once("controller/script.php");
if (!isset($_GET['tentang'])) {
  header("Location: ./");
  exit();
} else {
  $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_GET['tentang']))));
  $nama = str_replace('_', ' ', $nama);
  $takeSub = mysqli_query($conn, "SELECT * FROM kegiatan JOIN data_kegiatan ON kegiatan.id_kegiatan=data_kegiatan.id_kegiatan WHERE kegiatan.nama_kegiatan='$nama'");
  $dataArtikel = mysqli_query($conn, "SELECT artikel.* FROM artikel JOIN sub_kegiatan ON artikel.id_sub_kegiatan=sub_kegiatan.id_sub_kegiatan JOIN kegiatan ON sub_kegiatan.id_kegiatan=kegiatan.id_kegiatan WHERE kegiatan.nama_kegiatan='$nama'");
  $_SESSION["page-name"] = "Kegiatan $nama";
  $_SESSION["page-url"] = "kegiatan?tentang=$nama";
}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <?php require_once("resources/header.php") ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style-type: none;
      text-decoration: none;
    }

    :root {
      --primary: #31adc0;
      --white: #ffffff;
      --bg: #f5f5f5;
    }

    .normalhead {
      position: relative;
    }

    .normalhead::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-color: rgba(0, 0, 0, 0.6);
      /* Ubah angka transparansi (0.5) sesuai kebutuhan */
      z-index: 0;
    }

    .normalhead h2 {
      color: #fff;
      /* Warna teks yang diinginkan */
      z-index: 1;
    }

    .container {
      max-width: 124rem;
      padding: 0 1rem;
      margin: 0 auto;
    }

    .text-center {
      text-align: center;
    }

    .section-heading {
      font-size: 3rem;
      color: var(--primary);
      padding: 2rem 0;
    }

    #tranding {
      padding: 4rem 0;
    }

    @media (max-width:1440px) {
      #tranding {
        padding: 7rem 0;
      }
    }

    #tranding .tranding-slider {
      height: 52rem;
      padding: 2rem 0;
      position: relative;
    }

    @media (max-width:500px) {
      #tranding .tranding-slider {
        height: 45rem;
      }
    }

    .tranding-slide {
      width: 37rem;
      height: 42rem;
      position: relative;
    }

    @media (max-width:500px) {
      .tranding-slide {
        width: 28rem !important;
        height: 36rem !important;
      }

      .tranding-slide .tranding-slide-img img {
        width: 28rem !important;
        height: 36rem !important;
      }
    }

    .tranding-slide .tranding-slide-img img {
      width: 37rem;
      height: 42rem;
      border-radius: 2rem;
      object-fit: cover;
    }

    .tranding-slide .tranding-slide-content {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
    }

    .tranding-slide-content .food-price {
      position: absolute;
      top: 2rem;
      right: 2rem;
      color: var(--white);
    }

    .tranding-slide-content .tranding-slide-content-bottom {
      position: absolute;
      bottom: 2rem;
      left: 2rem;
      color: var(--white);
    }

    .food-rating {
      padding-top: 1rem;
      display: flex;
      gap: 1rem;
    }

    .rating ion-icon {
      color: var(--primary);
    }

    .swiper-slide-shadow-left,
    .swiper-slide-shadow-right {
      display: none;
    }

    .tranding-slider-control {
      position: relative;
      bottom: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .tranding-slider-control .swiper-button-next {
      left: 58% !important;
      transform: translateX(-58%) !important;
    }

    @media (max-width:990px) {
      .tranding-slider-control .swiper-button-next {
        left: 70% !important;
        transform: translateX(-70%) !important;
      }
    }

    @media (max-width:450px) {
      .tranding-slider-control .swiper-button-next {
        left: 80% !important;
        transform: translateX(-80%) !important;
      }
    }

    @media (max-width:990px) {
      .tranding-slider-control .swiper-button-prev {
        left: 30% !important;
        transform: translateX(-30%) !important;
      }
    }

    @media (max-width:450px) {
      .tranding-slider-control .swiper-button-prev {
        left: 20% !important;
        transform: translateX(-20%) !important;
      }
    }

    .tranding-slider-control .slider-arrow {
      background: var(--white);
      width: 3.5rem;
      height: 3.5rem;
      border-radius: 50%;
      left: 42%;
      transform: translateX(-42%);
      filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .slider-arrow ion-icon {
      font-size: 2rem;
      color: #222224;
    }

    .tranding-slider-control .slider-arrow::after {
      content: '';
    }

    .tranding-slider-control .swiper-pagination {
      position: relative;
      width: 15rem;
      bottom: 1rem;
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
      filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
      background: var(--primary);
    }
  </style>
</head>

<body>

  <div id="wrapper">
    <?php require_once("resources/navbar.php") ?>

    <?php if (mysqli_num_rows($takeSub) == 0) { ?>
      <section class="section normalhead lb" style="background-color: #31adc0;">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
              <h2>Kegiatan</h2>
            </div>
          </div>
        </div>
      </section>
    <?php } else if (mysqli_num_rows($takeSub) > 0) {
      $row = mysqli_fetch_assoc($takeSub); ?>
      <section class="section normalhead lb" style="background-color: #31adc0;">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
              <h2>Kegiatan <?= $nama ?></h2>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="row">
            <?php if ($row['col_image'] == "kiri") { ?>
              <div class="col-lg-6">
                <div class="clearfix">
                  <img src="<?= $row['slug_image'] ?>" style="width: 100%;" alt="<?= $row['judul'] ?>">
                </div>
              </div>
            <?php } ?>
            <div class="col-lg-6">
              <div class="clearfix row">
                <div class="blog-desc col-md-10">
                  <h3><?= $row['judul'] ?></h3>
                  <?= strip_tags($row['deskripsi']); ?>
                </div>
              </div>
            </div>
            <?php if ($row['col_image'] == "kanan") { ?>
              <div class="col-lg-6">
                <div class="clearfix">
                  <img src="<?= $row['slug_image'] ?>" style="width: 100%;" alt="<?= $row['judul'] ?>">
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </section>

      <section id="tranding">
        <div class="container">
          <h1 class="text-center section-heading">Artikel <?= $nama ?></h1>
        </div>
        <div class="container">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
              <!-- Slide-start -->
              <?php if (mysqli_num_rows($dataArtikel) > 0) {
                while ($row = mysqli_fetch_assoc($dataArtikel)) {
                  $url = str_replace(' ', '_', $row['title']); ?>
                  <div class="swiper-slide tranding-slide">
                    <div class="tranding-slide-img">
                      <img src="<?= $row['image'] ?>" alt="Tranding">
                    </div>
                    <div class="tranding-slide-content">
                      <div class="tranding-slide-content-bottom">
                        <h2 class="food-name">
                          <a href="artikel?nya=<?= $url; ?>" style="color: #fff;padding: 0 15px;background-color: #222224;"><?= $row['title'] ?></a>
                        </h2>
                        <p class="food-rating" style="padding: 0 10px;background:#fff;color: #000;cursor: pointer;" onclick="window.location.href='artikel?nya=<?= $url; ?>'">
                          <?php $string = strip_tags($row['content']);
                          if (strlen($string) > 100) {
                            echo substr($string, 0, 100) . "...";
                          }
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
              <?php }
              } ?>
              <!-- Slide-end -->
            </div>

            <div class="tranding-slider-control">
              <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
              </div>
              <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>
      </section>
    <?php } ?>


    <?php require_once("resources/footer.php") ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
      var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 2.5,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      });
    </script>

</body>

</html>