<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
  <style>
   body {
         background-image: url('./images/redimage.jpeg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image file */
         background-size: cover; /* This ensures that the background image covers the entire body */
         background-repeat: no-repeat; 
         height: 100vh;
         background-position: center;
        
      }
  </style>
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>this is the JNL'S  pasabuy shop this is the one trusted store in ph and guaranteed the cashback if you need</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">ABOUT JNL'S PASABUY SHOP</h1><br><h2> slide the Image➡️➡️➡️➡️</h2>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/bag.jpg" alt="">
         <p>Dito sa shop na ito madami kang pagpipilian</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>MAGAGANDANG  BAG</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/sapatos.jpg" alt="">
         <p>mabilis maka order sa shop na ito at hinding hindi ka mag sisi sa mga producto na nabili mo</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>SHOES</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/watch.jpg" alt="">
         <p>Marami din ditong  accessories na mapapagpilian</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>WATCH</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/quality.jpg" alt="">
         <p>📌Imported and Authentic</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>TOP QUALITY AND TESTED</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/FAST.jpg" alt="">
         <p>FAST DELIVERY NATIONWIDE</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>GUARANTEE FAST DELIVERY</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/registered.jpg" alt="">
         <p>REHISTRADO AT MAASAHAN MGA BOSSING</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>✔️DTI & BIR Registered</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>