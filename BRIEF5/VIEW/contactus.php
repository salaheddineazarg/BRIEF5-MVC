<?php include (view.'include/header.php')?>

<body>
  <nav class="cnav navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="index.html">
      <img src="../Public/IMAGE2/logog.png" alt="jewellery">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
          <a class="nav-link" href="<?php url('home/index'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="<?php url('about/index'); ?>"> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('gallery/index'); ?>"> Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('contactus/index'); ?>"> Contact US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('login/index'); ?>">Login</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- Contact -->
  <div class="contact1">
    <div>
      <img id="imgc" src="../Public/IMAGE2/salah7.jpg" alt="Jewellery store">
    </div>
    <div class="formc">
      <div>
        <H2 class="make"> <b> MAKE YOUR LOOK <br> GLOOS <br></b></H2>
      </div>
      <form id="form1">



        <input type="text" placeholder="Full Name">

        <input type="tel" placeholder="N°Phone">

        <input class="emailc" type="email" placeholder="example@gmail.com">
        <textarea name="message" placeholder="Message"></textarea>
        <button class="sub">Submit </button>

      </form>

    </div>
  </div>
  
  <div class="item_section layout_padding2">
    <h2 class="THE"><b>THE BEST OFFERS</b> </h2>
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="<?php url('Public/images/i-1.png')?>" alt="Bracelet">
          </div>
          <div class="name">
            <h5>
              Bracelet
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="../Public/images/i-2.png" alt="Ring">
          </div>
          <div class="name">
            <h5>
              Ring
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="<?php url('Public/images/i-3.png')?>" alt="Earing">
          </div>
          <div class="name">
            <h5>
              Earings
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- info section -->
  <?php include (view.'include/header.php')?>