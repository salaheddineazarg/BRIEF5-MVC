<?php include (view.'include/header.php')?>

<body >

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
      </div>
    </header>
    <!-- end header section -->
    <!-- Gallery -->
 <h1 class="gallery"><b>Gallery</b></h1>
 <div  class="quote">
 <h2 class><b> IF YOU CAN’T  STOP <br> THINKING ABOUT IT...</b> </h2><br>

  <h2> <center><b> BUY IT.</b></center></h2>
</div>
  
<!-- First Cataloge-->
   <section class="price_section layout_padding C">
    <div class="container">
      <div class="price_container">
  
        <!-- ----------------------------------------------------- -->

        <?php
      foreach($products as $row){
        ?>
      <div class="box">
          <div class="name">
            <h6>
             <?php echo $row['name'] ?>
            </h6>
          </div>
          <div class="img-box">
            <img src="<?php url('Public/IMAGE2/'.$row['image'])?>" alt="bracelt">
          </div>
          <div class="detail-box">
            <h5>
              $<span><?php echo $row['prix'] ?></span>
            </h5>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      <?php 
    } ?>
    </div>
    </div>
    </section>

        <!-- -------------------------------------------------------- -->
     

    
      
      <?php include (view.'include/footer.php')?>