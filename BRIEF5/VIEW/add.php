<?php 
 include (view.'include/header.php');?>

 <body   >

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
             <a class="nav-link" href="<?php url('gestion/index'); ?>"> Gestion</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php url('about/index'); ?>"> About</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="<?php url('gallery/index'); ?>"> Gallery</a>
           </li>
           
          </ul>
 
       </div>
     </div>
   </nav>
<div class="bodyadd" >
   <form class="form"  method="POST"  action="<?php url('gestion/store')?>" enctype="multipart/form-data" >
<div class="input-group mb-3">
  <!-- <span class="input-group-text" id="basic-addon1">Name</span> -->
  <input  style="font-family: inter;"   name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <input  name="price" type="text" class="form-control" placeholder="prix" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <!-- <span class="input-group-text" id="basic-addon2">Prix</span> -->
</div>
<div class="input-group mb-3">
  <!-- <span class="input-group-text" id="basic-addon3">IMAGE</span> -->
  <input   style="font-family: inter;" accept=".jpg,jpeg,.png" name="image" type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
<div id="btnadd" class="input-group">
    <button  style="font-family: inter;" id="btnSubAdd" class="btn bg-primary submitadd btn-dark" name="submit" type="submit" >Submit</button>
 </div>
</form>
</div>

</body>
</html>



 





