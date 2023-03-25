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

    <section class="section transheader homepage parallax" data-stellar-background-ratio="0.5" style="background-image:url('upload/bg_04.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
            <h2>Let's Analysis Your Website SEO</h2>
            <p class="lead">Now you can customize your SEO service according to your need</p>
            <form class="calculateform">
              <div class="item-box">
                <div class="item-top form-inline">
                  <div class="form-group">
                    <div class="input-group2">
                      <span class="input-addon">
                        <i class="fa fa-link"></i>
                      </span>
                      <input type="url" class="form-control" id="urladres" name="url" placeholder="Add your website url">
                    </div>
                  </div>
                  <input type="submit" name="send" value="Analysis" class="btn btn-default" />
                </div>
              </div>
            </form>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end section -->

    <section class="section nopad">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-3 col-sm-6 nopad first">
            <div class="home-service c1">
              <i class="flaticon-competition"></i>
              <p>Owners: Promote your site on Google searches</p>
            </div><!-- end home-service -->
          </div><!-- end col -->

          <div class="col-md-3 col-sm-6 nopad">
            <div class="home-service c2">
              <i class="flaticon-chat"></i>
              <p>Publishers: Make money with blog articles</p>
            </div><!-- end home-service -->
          </div><!-- end col -->

          <div class="col-md-3 col-sm-6 nopad">
            <div class="home-service c3">
              <i class="flaticon-domain"></i>
              <p>Analyzers: Benefits from SEO analysis tools</p>
            </div><!-- end home-service -->
          </div><!-- end col -->

          <div class="col-md-3 col-sm-6 nopad last">
            <div class="home-service c4">
              <i class="flaticon-medal"></i>
              <p>Beginners: Learn more about search engines</p>
            </div><!-- end home-service -->
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end section -->

    <section class="section overfree">
      <div class="icon-center"><i class="fa fa-anchor"></i></div>
      <div class="container">
        <div class="section-title text-center">
          <small>Welcome to the best SEO service</small>
          <h3>Top Reasons to Choose Us</h3>
          <hr>
          <p class="lead"> Morbi quis porta dolor. Nullam feugiat sapien et libero elementum faucibus. Praesent sagittis venenatis ipsum, eget <br>tristique odio pharetra quis. Sed maximus a eros quis ornare.</p>
        </div><!-- end section-title -->

        <div class="row service-list text-center">
          <div class="col-md-4 col-sm-12 col-xs-12 first">
            <div class="service-wrapper wow fadeIn">
              <i class="flaticon-competition"></i>
              <div class="service-details">
                <h4><a href="service-01.html" title="">What We Do</a></h4>
                <p>Phasellus consequat egestas tempor. Fusce faucibus et ligula consequat imperdiet vel non ligula. Aliquam lorem leo.</p>
                <a href="#" class="readmore">View Details</a>
              </div>
            </div><!-- end service-wrapper -->
          </div><!-- end col -->

          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="service-wrapper wow fadeIn">
              <i class="flaticon-content"></i>
              <div class="service-details">
                <h4><a href="service-02.html" title="">Who We Are</a></h4>
                <p>Pellentesque diam lorem, convallis ac auctor pretium, commodo ac lectus. Maecenas quis dui vel velit blandit ultrices.</p>
                <a href="#" class="readmore">View Details</a>
              </div>
            </div><!-- end service-wrapper -->
          </div><!-- end col -->

          <div class="col-md-4 col-sm-12 col-xs-12 last">
            <div class="service-wrapper wow fadeIn">
              <i class="flaticon-html"></i>
              <div class="service-details">
                <h4><a href="service-02.html" title="">Our Mission</a></h4>
                <p>Donec non faucibus ligula. Phasellus fermentum tincidunt neque ac ultricies. Aenean felis eros, volutpat vitae lobortis.</p>
                <a href="#" class="readmore">View Details</a>
              </div>
            </div><!-- end service-wrapper -->
          </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis2">

        <div class="row">
          <div class="col-md-4">
            <div class="milestone-counter c1">
              <img src="images/icon_07.png" alt="" class="alignleft">
              <h3 class="stat-count">2901</h3>
              <p>Happy Customers</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="milestone-counter c2">
              <img src="images/icon_08.png" alt="" class="alignleft">
              <h3 class="stat-count">304</h3>
              <p>Online Strategy</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="milestone-counter c3">
              <img src="images/icon_09.png" alt="" class="alignleft">
              <h3 class="stat-count">890</h3>
              <p>Great Results</p>
            </div>
          </div>
        </div>
      </div><!-- end container -->
    </section><!-- end section -->

    <section class="section lb nopad spotlight style1">
      <div class="image col-md-4 hidden-sm hidden-xs">
        <img src="upload/blog_alt_06.jpg" alt="" />
      </div>
      <div class="content">
        <h2>Be the leader in the sector</h2>
        <p>Cras arcu sapien, maximus a accumsan at, iaculis nec nunc. Nullam ac ultricies velit, ut tincidunt tellus. Nunc nec sem at ante imperdiet tempor. Ut eu vulputate augue. Maecenas ultrices, arcu vel condimentum pharetra, diam eros mattis lectus, nec gravida sem erat nec orci. In dapibus ex eget arcu feugiat, non rhoncus enimpien id ligula sollicitudin fringilla ut id lacus. </p>
        <a href="#" class="btn btn-transparent">Learn More</a>
      </div>
    </section>

    <section class="section bt">
      <div class="container">
        <div class="section-title text-center">
          <small>Our search engine optimization works and happy customers in the past.</small>
          <h3>Case Studies</h3>
        </div><!-- end section-title -->

        <div class="owl-carousel owl-theme lightcasestudies withhover">
          <div class="item-carousel">
            <div class="case-box">
              <img src="upload/case_01.png" alt="" class="img-responsive">
              <div class="magnifier">
                <a href="case-studies-single.html"><i class="fa fa-link"></i></a>
              </div>
            </div><!-- end case-box -->
          </div><!-- end col -->

          <div class="item-carousel">
            <div class="case-box">
              <img src="upload/case_07.jpg" alt="" class="img-responsive">
              <div class="magnifier">
                <a href="case-studies-single.html"><i class="fa fa-link"></i></a>
              </div>
            </div><!-- end case-box -->
          </div><!-- end col -->

          <div class="item-carousel">
            <div class="case-box">
              <img src="upload/case_03.png" alt="" class="img-responsive">
              <div class="magnifier">
                <a href="case-studies-single.html"><i class="fa fa-link"></i></a>
              </div>
            </div><!-- end case-box -->
          </div><!-- end col -->

          <div class="item-carousel">
            <div class="case-box">
              <img src="upload/case_02.png" alt="" class="img-responsive">
              <div class="magnifier">
                <a href="case-studies-single.html"><i class="fa fa-link"></i></a>
              </div>
            </div><!-- end case-box -->
          </div><!-- end col -->

          <div class="item-carousel">
            <div class="case-box">
              <img src="upload/case_05.jpg" alt="" class="img-responsive">
              <div class="magnifier">
                <a href="case-studies-single.html"><i class="fa fa-link"></i></a>
              </div>
            </div><!-- end case-box -->
          </div><!-- end col -->

          <div class="item-carousel">
            <div class="case-box">
              <img src="upload/case_06.jpg" alt="" class="img-responsive">
              <div class="magnifier">
                <a href="case-studies-single.html"><i class="fa fa-link"></i></a>
              </div>
            </div><!-- end case-box -->
          </div><!-- end col -->
        </div>
      </div>
    </section>

    <section class="section lb nopad spotlight style1">
      <div class="content">
        <h2>Protect place with detailed analysis</h2>
        <p>Donec congue odio in mi finibus dignissim. Etiam faucibus pharetra euismod. Pellentesque malesuada et ligula et scelerisque. Pellentesque aliquet magna ut dolor consequat, luctus tincidunt metus consequat. Nam eu mattis ante, nec facilisis purus. Praesent ac venenatis erat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tincidunt finibus.</p>
        <a href="#" class="btn btn-transparent">Learn More</a>
      </div>
      <div class="image col-md-4 hidden-sm hidden-xs">
        <img src="upload/blog_alt_01.jpg" alt="" />
      </div>
    </section>

    <section class="section overfree">
      <div class="icon-center"><i class="fa fa-bar-chart"></i></div>
      <div class="container">
        <div class="section-title text-center">
          <small>Please select your correct price in below</small>
          <h3>Ideal SEO Packages</h3>
        </div><!-- end section-title -->
        <div class="center-pricing">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Montlhy</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Yearly</a></li>
          </ul>
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
              <div class="row big-pricing">
                <div class="col-md-4 col-sm-6 col-xs-12 colon1 nopad">
                  <div class="pricing-header firstch c0">
                    <p>Check our prices for SEO studies!</p>
                    <h4>Monthly SEO Packages</h4>
                  </div><!-- end pricing-header -->
                  <ul class="first-colon">
                    <li>Competition power
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Keyword
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Rank Guarantee
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Sectoral Agreement Limit
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>In-Site SEO Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li><a href="#">Link Building</a> Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Sector and Competitor Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Sectoral Presentation Articles
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Blog Based SEO
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Social Media Support
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Duplicate Content Support
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Product Base SEO
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Local SEO Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>W3 Validation Fix
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Site Speed Fix
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Harmful Link Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Support
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                  </ul>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
                  <div class="pricing-header firstch c1">
                    <p>$100/Month</p>
                    <h4>Beginner</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>Aggressive</li>
                    <li>5 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c1">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
                  <div class="pricing-header firstch c2">
                    <p>$500/Month</p>
                    <h4>Premium</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>Leader of Market</li>
                    <li>10 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-phone"></i> <i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c2">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
                  <div class="pricing-header firstch c3">
                    <p>$1500/Month</p>
                    <h4>Enterprise</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>Leader of Sector</li>
                    <li>25 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c3">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 colon4 nopad text-center">
                  <div class="pricing-header firstch c4">
                    <p>$2500/Month</p>
                    <h4>Ultimate</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>High</li>
                    <li>3 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c4">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
              </div><!-- end big-pricing -->
            </div><!-- end tab-pane -->
            <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="row big-pricing">
                <div class="col-md-4 col-sm-6 col-xs-12 colon1 nopad">
                  <div class="pricing-header firstch c0">
                    <p>Check our prices for SEO studies!</p>
                    <h4>Yearly SEO Packages</h4>
                  </div><!-- end pricing-header -->
                  <ul class="first-colon">
                    <li>Competition power
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Keyword
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Rank Guarantee
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Sectoral Agreement Limit
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>In-Site SEO Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li><a href="#">Link Building</a> Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Sector and Competitor Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Sectoral Presentation Articles
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Blog Based SEO
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Social Media Support
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Duplicate Content Support
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Product Base SEO
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Local SEO Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>W3 Validation Fix
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Site Speed Fix
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Harmful Link Analysis
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                    <li>Support
                      <span>
                        <a href="#" data-toggle="tooltip" data-placement="left" title="This is tooltip, you can add anything here.">
                          <i class="fa fa-info"></i>
                        </a>
                      </span>
                    </li>
                  </ul>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
                  <div class="pricing-header firstch c1">
                    <p>$1000/Yearly</p>
                    <h4>Beginner</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>Aggressive</li>
                    <li>5 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c1">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
                  <div class="pricing-header firstch c2">
                    <p>$5000/Yearly</p>
                    <h4>Premium</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>Leader of Market</li>
                    <li>10 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-phone"></i> <i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c2">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 nopad text-center">
                  <div class="pricing-header firstch c3">
                    <p>$15.000/Yearly</p>
                    <h4>Enterprise</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>Leader of Sector</li>
                    <li>25 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-close"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c3">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
                <div class="col-md-2 col-sm-6 col-xs-12 colon1 colon4 nopad text-center">
                  <div class="pricing-header firstch c4">
                    <p>$25.000/Yearly</p>
                    <h4>Ultimate</h4>
                  </div><!-- end pricing-header -->
                  <ul>
                    <li>High</li>
                    <li>3 Keywords</li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-check"></i></li>
                    <li><i class="fa fa-phone"></i> <i class="fa fa-skype"></i> <i class="fa fa-envelope"></i></li>
                  </ul>
                  <div class="pricing-footer text-center">
                    <a href="#" class="btn c4">ORDER NOW</a>
                  </div>
                </div><!-- end col -->
              </div><!-- end big-pricing -->
            </div><!-- end tab-pane -->
          </div><!-- end tab-content -->
        </div><!-- end center-pricing -->
        <hr class="invis">

        <div class="row callout bgcolor">
          <div class="col-md-9">
            <p class="lead">We've hundreds of happy customers, do not you want to be a member of this family? Just join us increase your website visitors!</p>
          </div>
          <div class="col-md-3">
            <div class="button-wrap text-center">
              <a href="#" class="btn btn-transparent btn-light btn-lg">Contact us</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section ldp">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="client-box">
              <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>
          </div><!-- end col -->
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="client-box">
              <a href="#"><img src="upload/client_02.png" alt="" class="img-responsive"></a>
            </div>
          </div><!-- end col -->
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="client-box">
              <a href="#"><img src="upload/client_03.png" alt="" class="img-responsive"></a>
            </div>
          </div><!-- end col -->
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="client-box">
              <a href="#"><img src="upload/client_04.png" alt="" class="img-responsive"></a>
            </div>
          </div><!-- end col -->
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="client-box">
              <a href="#"><img src="upload/client_05.png" alt="" class="img-responsive"></a>
            </div>
          </div><!-- end col -->
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="client-box">
              <a href="#"><img src="upload/client_06.png" alt="" class="img-responsive"></a>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end section -->

    <?php require_once("resources/footer.php") ?>

</body>

</html>