<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="hero">

   <div class="swiper hero-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="content">
               <span>Enjoy Italian Cuisine</span>
               <h3>Pasta Alfredo</h3>
               <a href="menu.php" class="btn">Order to Click</a>
            </div>
            <div class="image">
               <img src="images/home-img-1(1).jpg" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Authentic Italian Pizza</span>
               <h3>Crispy Chessey Pizza</h3>
               <a href="menu.php" class="btn">Order to Click</a>
            </div>
            <div class="image">
               <img src="images/home-img-2(1).jpg" alt="">
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="content">
               <span>Classic Tiramisù</span>
               <h3>Tiramisu Cake</h3>
               <a href="menu.php" class="btn">Order to Click</a>
            </div>
            <div class="image">
               <img src="images/home-img-3.jpg" alt="">
            </div>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<section class="category">

   <h1 class="title">Food Category</h1>

   <div class="box-container">

      <a href="category.php?category=Pasta" class="box">
         <img src="images/cat-1.png" alt="">
         <h3>Pasta</h3>
      </a>

      <a href="category.php?category=Pizza" class="box">
         <img src="images/cat-2.png" alt="">
         <h3>Pizza</h3>
      </a>

      <a href="category.php?category=Drinks" class="box">
         <img src="images/cat-3.png" alt="">
         <h3>Drinks</h3>
      </a>

      <a href="category.php?category=Desserts" class="box">
         <img src="images/cat-4.png" alt="">
         <h3>Desserts</h3>
      </a>

   </div>

</section>























<?php include 'components/footer.php'; ?>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>