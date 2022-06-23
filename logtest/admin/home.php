<<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="styyle.css?v=<?php echo time () ; ?>">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <h1><a href="home.php" class="logo"> 𝕄𝕐 𝕋𝕌𝕋𝕆ℝ</a></h1>

   <nav class="navbar">
   <a href="">𝕽𝖊𝖌𝖎𝖘𝖙𝖊𝖗</a>
   <a href="login.php">𝕷𝖔𝖌𝖎𝖓</a>
   <a href="home.php">𝕳𝖔𝖒𝖊</a>
      <a href="newsubject.php">𝕮𝖔𝖚𝖗𝖘𝖊𝖘</a>
      <a href="newtutor.php">𝕿𝖚𝖙𝖔𝖗</a>
      <a href="">𝕾𝖚𝖇𝖘𝖈𝖗𝖎𝖕𝖙𝖎𝖔𝖓</a>
     <a href="">𝕻𝖗𝖔𝖋𝖎𝖑𝖊</a>
   </nav>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>



<body>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
 width: 900px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: black;
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 20px;
  width: 20px;
  margin: 0 2px;
  background-color:grey;
  border-radius: 100%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: black;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 800px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="ok.jpg" style="width: 100%">
  <
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="m.jpg" style="width: 100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="aa.jpg" style="width: 100%">

</div>

<a class="prev" onclick="plusSlides(-1)"></a>
<a class="next" onclick="plusSlides(1)"></a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>



<section class="home-about">


   <div class="content">
      <h1><center><h3>QUOTE</h3></center></h1>
     <h1> <center><p>"Your heart is slightly larger than the average human heart, but that's because you're a teacher</p></center></h1>
     
   </div>

</section>



<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> TOP COURSES </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="1.png" alt="">
         </div>
         <div class="content">
            <h3>PROGRAMMING 101</h3>
            <p>Basic programming for new student with no background in programming</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="2.png" alt="">
         </div>
         <div class="content">
            <h3>PROGRAMMING 201 </h3>
            <p>Intermediate programming course that aim for those who has basic programming knowledge</p>
         
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="3.png" alt="">
         </div>
         <div class="content">
            <h3>INTRODUCTION TO WEB PROGRAMMING</h3>
            <p>Basic introduction to HTML, CSS, JavaScript, PHP and MySQL.</p>
           
         </div>
      </div>

   </div>

   
</section>



<section class="home-offer">
   <div class="content">
      <h3>JOIN US !</h3>
      <p>Get The Best Home Tutor for Your Child Today </p>
      <a href="" class="btn">REGISTER NOW !</a>
   </div>
</section>
<section class="footer">

   

   <div class="credit"> Copyright &copy:2022 NUR MURSYIDA</span> | all rights reserved! </div>

</section>

<!-- home offer section ends -->















