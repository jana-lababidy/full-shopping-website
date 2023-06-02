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
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/chooseus.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
<p>
Competitive Pricing: We offer competitive pricing on all of our products, ensuring that our customers get the best value for their money.
Wide Range of Options: We have a wide range of laptops and smartphones to choose from, so you can find the perfect product that meets your needs and budget.
Excellent Customer Service: Our customer service team is dedicated to providing exceptional support to our customers, answering questions, resolving issues, and ensuring that you are completely satisfied with your purchase.
Fast Shipping: We understand that time is of the essence when it comes to purchasing a laptop or smartphone, and we strive to deliver our products as quickly as possible.
</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      </div>

      <div class="swiper-slide slide">
      </div>

      <div class="swiper-slide slide">

      </div>

      <div class="swiper-slide slide">
         
      </div>

      <div class="swiper-slide slide">
         
      </div>

      <div class="swiper-slide slide">
         
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