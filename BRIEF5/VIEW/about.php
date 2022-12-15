<?php include (view.'include/header.php')?>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="<?php url('Public/IMAGE2/logog.png')?>" alt="Jewellery">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php url('home/index'); ?>" >Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php url('about/index'); ?>"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"href="<?php url('gallery/index'); ?>"> Gallery</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contactus.php"href="<?php url('contactus/index'); ?>"> Contact US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php url('login/index'); ?>">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
     <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Jewellery Shop
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <div>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?php url('Public/images/about-img.png')?>" alt="Bracelet">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  </div>



 

  <?php include (view.'include/footer.php')?>