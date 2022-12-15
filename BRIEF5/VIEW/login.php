<?php include (view.'include/header.php')?>

<body class="bodylogin" >
<nav class="cnav navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="index.html">
      <img src="<?php url('Public/IMAGE2/logog.png')?>" alt="jewellery">
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
            <a class="nav-link" href="<?php url('about/index'); ?>"> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('gallery/index'); ?>"> Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('contactus/index'); ?>"> Contact US</a>
          </li>
         </ul>

      </div>
    </div>
  </nav>
<section class="gestion">
  <div class="imggestion">
    <img  class="imgg" src="https://i.pinimg.com/564x/6c/3c/d7/6c3cd702a5c0a7bec88db6289cdd706f.jpg" alt="">
  </div>
  <div class="blackside">


  </div>
</section>

</body>
</html>