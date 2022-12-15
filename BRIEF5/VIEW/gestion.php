<?php include (view.'include/header.php')?>
<body class="gestionadmin">

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
            <a class="nav-link" href="<?php url('gallery/index'); ?>"> Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('gestion/add'); ?>">Add Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php url('home/index'); ?>">Deconnecte</a>
          </li>
          
         
          
         </ul>

      </div>
    </div>
  </nav>
  <!-- ------------------------------------------------------------------------------- -->
 
  

  <section class="price_section  layout_padding C ">
   
    <div class="container">
      <H1 style="width:442px;" class="text-canter mx-auto"><b>VIEW ALL PRODUCTS</b></H1>
      <div class="price_container"> 
        
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
            <a href="<?php url('gestion/update/'.$row['id'])?>">
              Update
            </a>
            <a href="<?php url('gestion/delete/'.$row['id'])?>">
              Delete
            </a>
          </div>
        </div>
      <?php 
    } ?>
     
      </div>
    </div>
  </section> 
  <!-- -------------------------------------------------------------------------------- -->



    
</body>
</html>