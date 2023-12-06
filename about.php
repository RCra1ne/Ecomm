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
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p style = "text-align: justify;">&nbsp;&nbsp;Manhattan Apparel is a clothing company. Established in 2012, we started through live selling on various online platforms. This particular business of ours thrived and  proved to be popular, so we upped our game and decided to shift to a web-based ordering system. This was decided on the fact that our business are growing exponentially, to the point that relying on social media platform for exposure has been too much and the human resource to accommodate our customers has been insufficient, and so did our capability to handle much transaction on a limited system.</p>

      </div>

   </div>

</section>



<br><br><br><br><br><br><br><br>









<?php include 'components/footer.php'; ?>



<script src="js/script.js"></script>



</body>
</html>