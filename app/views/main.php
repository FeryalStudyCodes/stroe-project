<?PHP
 session_start();
include "app/views/header.php"; 
?>
  
  <!-- start of hero -->
  <section class="hero-slider hero-style" id="hero">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://i.pinimg.com/originals/ed/c9/5a/edc95a3a7b8c8918448d0b832067f027.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <h1>New Collection</h1>
            </div>
          </div>
          <!-- end slide-inner -->
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://www.lg.com/global/images/Banner/lg-signature-hero-banner-oled-8k-tv-refrigerator-washing-machine-air-purifier-desktop.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- end slide-inner -->
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://www.apple.com/v/macbook-pro-13/f/images/overview/hero_endframe__bsza6x4fldiq_large.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slide-inner slide-bg-image"
            data-background="https://www.apple.com/v/macbook-air/i/images/overview/hero_endframe__ea0qze85eyi6_large.jpg">
            <div class="black-bg"></div>
            <div class="container">
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- swipper controls -->
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev" id="prev"></div>
      <div class="swiper-button-next" id="next"></div>
    </div>
  </section>
<!-- end of hero slider  -->


         
      
  
  <!-- Left and right controls -->
  <!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->

<!-- Product slider End -->



<!-- Product slider End -->
<section class="three-column-images mt-5"  style="margin: 10rem 0 0 0;" >
  <div class="container " >
    <div class="row">
      <div class="col-xs-6 col-sm-4 ">
        <img src="/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
         
      </div>
   
       <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
   
      <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
      </div> 
     </div>  
  </section>

<!-- Banner Start -->

    
<!--Satrt Featured Product-->
<div class="container" style="padding: 0rem;">
  <!-- <h3 class="h4 text-sm-right mb-5 text-secondary ">إلكترونيات  </h3>     -->
  <div class="active row orginize card-slider">
    <main class="row main bg-grid product-store">
    <?php 
            $i=0;
            $rows=$data['order_product'];
           // print_r($rows);
            foreach($rows as $row)
            {   
              $id = $row->product_id;
              // if($row->category_id==25){
                  
              
              $imageURl = 'http://localhost:81/Ecom-store-project/app/assets/images/'.$row->product_main_image;
          ?>
        <div class="col-md-3 col-sm-6 col-lg-3">
          <div class="card">
              <div class="card-img product-img">
                  <a href="#">
                      <img  width="60" height="60"  src='<?php  echo $imageURl; ?>'>
                  </a>
                  <ul class="social" >
                      <li><a href="main/product_details?action=product_details&product_id=<?PHP echo $id?>" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                      <?PHP
                      if(array_key_exists($id, $_SESSION['wish'])){
                      echo " <li><a style='color:blue' class='Wishlist' id='wishlisticon' data-id='$id' data-tip='Add to Wishlist'><i class='fa fa-heart'></i></a></li>";
                      }
                      else{
                        echo " <li><a  class='Wishlist' id='wishlisticon' data-id='$id' data-tip='Add to Wishlist'><i class='fa fa-heart'></i></a></li>";
                     
                      }
                      ?>
                      <?PHP
                      if(array_key_exists($id, $_SESSION['cart'])){
                      echo "<li><a style='color:blue' data-tip='Add to Cart' class='cart' id='shope' data-id='$id'><i class='fa fa-shopping-cart'></i></a></li>";
                      }
                      else{
                        echo "<li><a data-tip='Add to Cart' class='cart' id='shope' data-id='$id'><i class='fa fa-shopping-cart'></i></a></li>";
                      
                      }
                      ?>
                 </ul>
              

              </div>
              <div class="card-price product-content">
               <div class="card-name title">
               <!-- <h5 class="product-name"><a href="#"><p><?php  echo $row->product_name ?></p></a></h5> -->

                  <h3 class="title"><a href="#"><p><?php  echo $row->product_short_desc ?></p></a></h3>
                  <div class="price">
                  <p>$<?= $row->product_price ?></p>
                    <!-- <?php  echo $row->product_price ?> -->
                  </div>
                  <?PHP
                    echo "<div class='product-id display-none'></div>";
                    if(array_key_exists($id, $_SESSION['cart'])){
                      echo "<a  style='background-color:red' id='shopebtn' class='cart add-to-cart' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
                      echo "</a>";
                    }else{
                        echo "<a  class='cart add-to-cart' id='shopebtn' class='btn btn-primary w-100-pct'>أضف الى عربة التسوق</a>";
                    }
                ?>
                       </div>
                 </div>
             </div>
             </div>
             <?php $i++; } ?> 
          </div>
<!--End Featured Product-->



<!--Start View Moer-->
<div class="overview text-center mt-5">
         <div class="container">
          
           <button><a href="main/getcat">View Moer</a></button>
          </div>
       </div>

<!--End View Moer-->


<!-- Product slider End -->
<section class="three-column-images mt-5">
  <div class="container " >
    <div class="row">
      <div class="col-xs-6 col-sm-4 ">
        <img src="/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
         
      </div>
   
       <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add2.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
   
      <div class="col-xs-6 col-sm-4">
        <img src="/Ecom-store-project/app/assets/images/add.jpg"
             class="img-thumbnail img-responsive">
        <a href="#" target="_blank"></a>
        
      </div>
      </div> 
     </div>  
  </section>

<!-- Banner Start -->



<!-- 
<script>
$(document).ready(function(){
            // add the item to cart
            $('.cart').click(function(){
              var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: 'main/shopingCart?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  alert(response);
                }
             });
          });
          // add the item to Wishlist
          $('.Wishlist').click(function(){
              var id = $(this).data('id');
            // alert(id);
            $.ajax({
                url: 'main/wishlist?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  alert(response);
                }
             });
          });
})

</script> -->


 
  

<?PHP
include "app/views/footer.php"; 
?>
    
 
  
    <script>
$(document).ready(function(){
            // add the item to cart
            $('.cart').click(function(){
              var id = $(this).data('id');
            $.ajax({
                url: 'main/shopingCart?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  if(response == 0){
                   alert("تم اضافة المنتج مسبقاً");
                  }
                  else{
                   alert("تم إضافة المنتج الى السلة  ");
                    document.getElementById("comparison-count").innerHTML=response;
                    document.getElementById("shope").style.color = "blue";
                    document.getElementById("shopebtn").style.backgroundColor = "red";
                    
                  }
                }
             });
          });
          // add the item to Wishlist
          $('.Wishlist').click(function(){
              var id = $(this).data('id');
            $.ajax({
                url: 'main/wishlist?id='+ id,
                method: 'post',
                cache: false,
                data: {
                  id: id
                },
                success: function(response) {
                  if(response == 0){
                   alert("تم اضافة المنتج مسبقاً");
                  }
                  else{
                   alert("تم إضافة المنتج الى المضلة  ");
                    document.getElementById("wishcomparison-count").innerHTML=response;
                    document.getElementById("wishlisticon").style.color = "blue";
                  }
                }
             });
          });
})
</script>

</body>
</html>
