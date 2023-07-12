<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fody Slider</title>
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
      --primary: #ec994b;
      --white: #ffffff;
      --bg: #f5f5f5;
    }

    html {
      font-size: 62.5%;
      font-family: "Montserrat", sans-serif;
      scroll-behavior: smooth;
    }

    @media (min-width: 1440px) {
      html {
        zoom: 1.5;
      }
    }

    @media (min-width: 2560px) {
      html {
        zoom: 1.7;
      }
    }

    @media (min-width: 3860px) {
      html {
        zoom: 2.5;
      }
    }

    ::-webkit-scrollbar {
      width: 1.3rem;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 1rem;
      background: #797979;
      transition: all 0.5s ease-in-out;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #222224;
    }

    ::-webkit-scrollbar-track {
      background: #f9f9f9;
    }

    body {
      font-size: 1.6rem;
      background: var(--bg);
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
  <section id="tranding">
    <div class="container">
      <h3 class="text-center section-subheading">- popular Delivery -</h3>
      <h1 class="text-center section-heading">Tranding food</h1>
    </div>
    <div class="container">
      <div class="swiper tranding-slider">
        <div class="swiper-wrapper">
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-1.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$20</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Special Pizza
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-2.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$20</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Meat Ball
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-3.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$40</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Burger
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-4.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$15</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Frish Curry
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-5.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$15</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Pane Cake
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-6.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$20</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Vanilla cake
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
          <!-- Slide-end -->
          <!-- Slide-start -->
          <div class="swiper-slide tranding-slide">
            <div class="tranding-slide-img">
              <img src="images/tranding-food-7.png" alt="Tranding">
            </div>
            <div class="tranding-slide-content">
              <h1 class="food-price">$8</h1>
              <div class="tranding-slide-content-bottom">
                <h2 class="food-name">
                  Straw Cake
                </h2>
                <h3 class="food-rating">
                  <span>4.5</span>
                  <div class="rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </h3>
              </div>
            </div>
          </div>
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