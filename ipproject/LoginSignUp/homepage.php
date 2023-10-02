<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
  <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <script src="scriptcb.js" defer></script>
</head>

<body>

<?php

  $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
  $sqln1 = "SELECT * FROM doctor WHERE id = 1";
  $resultn1 = $con->query($sqln1);

  $sqln2 = "SELECT * FROM doctor WHERE id = 2";
  $resultn2 = $con->query($sqln2);

  $sqln3 = "SELECT * FROM doctor WHERE id = 3";
  $resultn3 = $con->query($sqln3);

  $sqln4 = "SELECT * FROM doctor WHERE id = 4";
  $resultn4 = $con->query($sqln4);

  $sqln5 = "SELECT * FROM doctor WHERE id = 5";
  $resultn5 = $con->query($sqln5);

  $sqln6 = "SELECT * FROM doctor WHERE id = 6";
  $resultn6 = $con->query($sqln6);

  $sqln7 = "SELECT * FROM doctor WHERE id = 7";
  $resultn7 = $con->query($sqln7);

  // $sqld1 = "SELECT department FROM doctor WHERE id = 1";
  // $resultd1 = $con->query($sqld1);

  if($resultn1->num_rows > 0){
    $row1 = $resultn1->fetch_assoc();
    $name1 = $row1["name"];
    $dept1 = $row1["department"];
    $rat1 = $row1["rating"];
  }

  if($resultn2->num_rows > 0){
    $row2 = $resultn2->fetch_assoc();
    $name2 = $row2["name"];
    $dept2 = $row2["department"];
    $rat2 = $row2["rating"];
  }

  if($resultn3->num_rows > 0){
    $row3 = $resultn3->fetch_assoc();
    $name3 = $row3["name"];
    $dept3 = $row3["department"];
    $rat3 = $row3["rating"];

  }

  if($resultn4->num_rows > 0){
    $row4 = $resultn4->fetch_assoc();
    $name4 = $row4["name"];
    $dept4 = $row4["department"];
    $rat4 = $row4["rating"];
  }

  if($resultn5->num_rows > 0){
    $row5 = $resultn5->fetch_assoc();
    $name5 = $row5["name"];
    $dept5 = $row5["department"];
    $rat5 = $row5["rating"];
  }


  if($resultn6->num_rows > 0){
    $row6 = $resultn6->fetch_assoc();
    $name6 = $row6["name"];
    $dept6 = $row6["department"];
    $rat6 = $row6["rating"];
  }


  if($resultn7->num_rows > 0){
    $row7 = $resultn7->fetch_assoc();
    $name7 = $row7["name"];
    $dept7 = $row7["department"];
    $rat7 = $row7["rating"];
  }



  function printStars($rating) {
    $stars = '';
    for ($i = 1.0; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '<i class="fa-solid fa-star" style="color: #ec994b;"></i>';
        } else {
            if($i-1.0<$rating)
            {
              $stars .= '<i class="fa-solid fa-star-half" style="color: #ec994b;"></i>';
            }
            // else 
            // {
            //   $stars .= '<i class="fa-solid fa-star"  style="color: rgba(255, 0, 0, 0.5);"></i>';
            // }
            
        }
    }
    return $stars;
}
session_start();


$nid = $_SESSION['id']; 


$con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
$sqln2 = "SELECT * FROM user WHERE id = '$nid'";
$resultn2 = $con->query($sqln2);
$userrow = $resultn2->fetch_assoc();



?>





<style>

/* Import Google font - Poppins */

@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;1,100;1,300;1,400&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style-type: none;
  text-decoration: none;
}

:root {
  --primary: #ec994b;
  --white: #ffffff;
  --bg: #f5f5f5;
}

* {
  font-family: "Poppins", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  transition: 0.2s linear;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 5rem;
}
html::-webkit-scrollbar {
  width: 1rem;
}
html::-webkit-scrollbar-track {
  background: #fff;
}
html::-webkit-scrollbar-thumb {
  background: #10221b;
}

section {
  padding: 5rem 9%;
}

.btn {
  margin-top: 1rem;
  display: inline-block;
  border: 0.2rem solid #10221b;
  color: #10221b;
  cursor: pointer;
  background: none;
  font-size: 1.7rem;
  padding: 1rem 3rem;
}
.btn:hover {
  background: #10221b;
  color: #fff;
}




.sheader {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    padding: 2rem 9%;
    z-index: 1000;
    display: flex;
    align-items: center;
    height: 75px;
  
    background: linear-gradient(135deg,rgba(255,255,255,1),rgba(255, 20, 147, 0.6));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    
  }
  .sheader .logo {
    margin-right: auto;
    font-size: 2.5rem;
    color: #10221b;
    font-weight: bolder;
  }
  .sheader .logo i {
    color: #219150;
  }
  
  .sheader nav{
    padding: 10px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .sheader ul{
    display: flex;
    justify-content: center;
  }
  
  .sheader li a{
    position: relative;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    letter-spacing: 0.5px;
  }
  
  .sheader li a::after{
    content: "";
    position: absolute;
    background-color: #ff3c78;
    height: 3px;
    width: 0;
    margin: auto;
    display: block;
  }
  
  .sheader li a:hover{
   color: black;
  }
  
  .sheader li a:hover:after{
   width: 100%;
   transition: width 0.3s linear;
   margin-top: 8px;
  }
  
  .sheader nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 15px;
  }
  
  .sheader nav ul li a{
    text-decoration: none;
    color: #333;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    margin-right: 15px;
    letter-spacing: 0.5px;
  }
  
  
  .sheader .navbar #nav-close {
    font-size: 5rem;
    cursor: pointer;
    color: #10221b;
    display: none;
  } 
  
  .sheader .icons a,
  .sheader .icons div {
    font-size: 2.5rem;
    margin-left: 2rem;
    cursor: pointer;
    color: #10221b;
  
    padding: 10px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  
    position: relative;
    text-decoration: none;
  
    display: inline-block;
    list-style: none;
    margin: 10px 15px;
  
    margin-right: 15px;
    
  }
  .sheader .icons a:hover,
  .sheader .icons div:hover {
    color: #ff3c78;
  }
  
  
  .search-form {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background: rgba(0, 0, 0, 0.0);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10000;
    transform: translateY(-110%);
  }
  .search-form.active {
    transform: translateY(0%);
  }
  
  
  .search-form #close-search {
    position: absolute;
    top: 2rem;
    right: 2.5rem;
    cursor: pointer;
    color: #fff;
    font-size: 6rem;
  }
  
  
  .search-form #close-search:hover {
    color: #ff3c78;
  }
  
  .search-form form {
    width: 70rem;
    margin: 2rem;
    padding-bottom: 2rem;
    border-bottom: 0.2rem solid #fff;
    display: flex;
    align-items: center;
  }
  .search-form form input {
    width: 100%;
    font-size: 2rem;
    color: #fff;
    text-transform: none;
    background: none;
    padding-right: 2rem;
  }
  .search-form form input::-moz-placeholder {
    color: #aaa;
  }
  .search-form form input::placeholder {
    color: #aaa;
  }
  .search-form form label {
    font-size: 3rem;
    cursor: pointer;
    color: #fff;
  }
  .search-form form label:hover {
    color: #ff3c78;
  }
  





.home {
  padding: 0;
}
.home .box {
  
  min-height: 100vh;
  width: 400px;
  display: flex;
  align-items: center;
  background-size: cover !important;
  background-position: cover !important;
  justify-content: flex-end;
  padding: 2rem 9%;

  width: 100%;
  min-height: 100vh;
  background-image: url(canva1.png);
  background-position: center;
  background-size: cover;
  padding: 10px 10%; 
  overflow: hidden;
  position: relative;
}
.home .box.second {

  min-height: 100vh;
  width: 400px;
  display: flex;
  align-items: center;
  background-size: cover !important;
  background-position: cover !important;
  justify-content: flex-start;
  padding: 2rem 9%;
 
  width: 100%;
  min-height: 100vh;
  background-image: url(canva2.png);
  background-position: center;
  background-size: cover;
  padding: 10px 10%;
  overflow: hidden;
  position: relative;

}

.home .box.third {
  justify-content: flex-start;

  min-height: 100vh;
  width: 400px;
  display: flex;
  align-items: center;
  background-size: cover !important;
  background-position: cover !important;
  justify-content: flex-end;
  padding: 2rem 9%;

  width: 100%;
  min-height: 100vh;
  background-image: url(canva.png);
  background-position: center;
  background-size: cover;
  padding: 10px 10%;
  overflow: hidden;
  position: relative;
}

.home .box .content {
  /* width: 50rem; */
  display:absolute;
  left:-30px;
  top:-150px;
  box-sizing: content-box;
  height: 70px;
  padding: 50px 30px;
  display: flex;
  border-radius: 8px;
  box-shadow: 0 20px 25px rgba(0, 0, 0, 0.0);
  position: relative;

}
.home .box .content span {
  /* font-size: 4rem;
  color: #10221b; */

  display: block;
  height: 100%;
  padding-left: 10px;
  position: relative;
  left: 377px;
  top:-123px;
  
  
  color: #ff3c78;
  animation: spin_words 7s infinite;
}

.home .box .content .words{
  overflow: hidden;
  font-size: 50px;
  font-weight: bold;
  font-family: "Poppins",sans-serif;
  height: 500px;
  width: 550px;
  top:-100px;
  
  /* width: 1000px; */

}

.home .box .content .words p{
  
  font-size: 50px;
  font-weight: bold;
  font-family: "Poppins",sans-serif;
}





.home .box .second .content {
  /* width: 50rem; */

  display:absolute;
  box-sizing: content-box;
  height: 70px;
  padding: 50px 30px;
  display: flex;
  border-radius: 8px;
  box-shadow: 0 20px 25px rgba(0, 0, 0, 0.0);
  position: relative;
}
.home .box .second .content span {
  /* font-size: 4rem;
  color: #10221b; */
  
  display: block;
  height: 100%;
  padding-left: 10px;
  position: relative;
  left: 240px;
  top:-20px;
  
  
  color: #ff3c78;
  animation: spin_words 6s infinite;
}

.asd{
  color: #ff3c78;

}

.home .box .second .content .words{
  overflow: hidden;
  font-size: 50px;
  font-weight: bold;
  font-family: "Poppins",sans-serif;
  height: 500px;
  width: 550px;
  top:-100px;
  
  /* width: 1000px; */

}

.home .box .second .content .words p{
  font-size: 50px;
  font-weight: bold;
  font-family: "Poppins",sans-serif;
}



.home .box .third .content {
  /* width: 50rem; */
  display:absolute;
  left:-30px;
  box-sizing: content-box;
  height: 70px;
  padding: 50px 30px;
  display: flex;
  border-radius: 8px;
  box-shadow: 0 20px 25px rgba(0, 0, 0, 0.0);
  position: relative;
}
.home .box .third .content span {
  /* font-size: 4rem;
  color: #10221b; */

  display: block;
  height: 100%;
  padding-left: 10px;
  position: relative;
  left: 240px;
  top:-20px;
  
  
  color: #ff3c78;
  animation: spin_words 6s infinite;
}

.home .box .third .content .words{
  overflow: hidden;
  font-size: 50px;
  font-weight: bold;
  font-family: "Poppins",sans-serif;
  height: 500px;
  width: 550px;
  top:-100px;
  
  /* width: 1000px; */

}

.home .box .third .content .words p{
  
  font-size: 50px;
  font-weight: bold;
  font-family: "Poppins",sans-serif;
}


@keyframes spin_words {
  10%{
    transform: translateY(-128%);
  }
  33.33%{
    transform: translateY(-126%);
  }
  43.33%{
    transform: translateY(-228%);
  }
  66.67%{
    transform: translateY(-226%);
  }
  76.67%{
    transform: translateY(-328%);
  }
  100%{
    transform: translateY(-326%);
  }
}

.btn{
  display: inline-block;
  text-decoration: none;
  padding: 15px 50px;
  color: #fff;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  font-size: 22px;
  border-radius: 30px;
  border-color: transparent;
  border-top-right-radius: 0;
  transition: 0.5s;
}




.btn:hover{
  border-top-right-radius: 30px;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
}


/* .home .box .content h3 {
  font-size: 6rem;
  color: #219150;
  padding-top: 0.5rem;
  text-transform: uppercase;
}
.home .box .content p {
  line-height: 2;
  color: #10221b;
  font-size: 1.5rem;
  padding: 1rem;
} */

@media (max-width: 1200px) {
  .header {
    padding: 2rem;
  }
  section {
    padding: 3rem 2rem;
  }
}
@media (max-width: 991px) {
  html {
    font-size: 55%;
  }
}
@media (max-width: 768px) {
  .header #menu-btn {
    display: inline-block;
  }
  .header .navbar {
    position: fixed;
    top: 0;
    left: -110%;
    background: #fff;
    z-index: 10000;
    width: 35rem;
    height: 100%;
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
  }
  .header .navbar.activate {
    left: 0;
    box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.8);
  }
  .header .navbar a {
    margin: 1rem 0;
    font-size: 3rem;
  }
  .header .navbar #nav-close {
    display: block;
    position: absolute;
    top: 1rem;
    right: 2rem;
  }
}
@media (max-width: 450px) {
  html {
    font-size: 50%;
  }
}/*# sourceMappingURL=style.css.map */

.swiper-button-next{
  color: #000;
}

.swiper-button-next:hover{
  color: #ff3c78;
}

.swiper-button-prev{
  color: #000;
}

.swiper-button-prev:hover{
  color: #ff3c78;
}


.theswiper {

font-size: 62.5%;
font-family: "Montserrat", sans-serif;
scroll-behavior: smooth;
  

@media (min-width: 1440px) {
  html {
    zoom: 1.5;
  }
}

@media (min-width: 2560px) {
  html {
    zoom: 1.7;
  }
}

@media (min-width: 3860px) {
  html {
    zoom: 2.5;
  }
}

::-webkit-scrollbar {
  width: 1.3rem;
}

::-webkit-scrollbar-thumb {
  border-radius: 1rem;
  background: #797979;
  transition: all 0.5s ease-in-out;
}

::-webkit-scrollbar-thumb:hover {
  background: #222224;
}

::-webkit-scrollbar-track {
  background: #f9f9f9;
}

font-size: 1.6rem;
background: var(--bg);






.sajid {
  max-width: 132.5rem;
  padding: 0 1rem;
  margin: 0 auto;
}

.text-center {
  text-align: center;
}

.section-heading {
  font-size: 3rem;
  color: var(--primary);
  padding: 2rem 0;
}

#tranding {
  padding: 4rem 0;
}

@media (max-width:1440px) {
  #tranding {
    padding: 7rem 0;
  }
}

#tranding .tranding-slider {
  height: 52rem;
  padding: 2rem 0;
  position: relative;
}

@media (max-width:500px) {
  #tranding .tranding-slider {
    height: 45rem;
  }
}

.tranding-slide {
  width: 37rem;
  height: 42rem;
  position: relative;
  
}

@media (max-width:500px) {
  .tranding-slide {
    width: 28rem !important;
    height: 36rem !important;
  }
  .tranding-slide .tranding-slide-img img {
    width: 28rem !important;
    height: 36rem !important;
    
  }
}

.tranding-slide .tranding-slide-img
{
  width: 37rem;
  height: 42rem;
  border-radius: 2rem;
  background-color: skyblue;
}

.tranding-slide .tranding-slide-img img {
  width: 37rem;
  height: 42rem;
  border-radius: 2rem;
  object-fit: cover;
}

.tranding-slide .tranding-slide-content {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
}

.tranding-slide-content .food-price {
  position: absolute;
  top: 2rem;
  right: 2rem;
  color: var(--white);
}

.tranding-slide-content .tranding-slide-content-bottom {
  position: absolute;
  bottom: 2rem;
  left: 2rem;
  color: var(--white);
}

.food-rating {
  padding-top: 1rem;
  display: flex;
  gap: 1rem;
}

.rating ion-icon {
  color: var(--primary);
}

.swiper-slide-shadow-left,
.swiper-slide-shadow-right {
  display: none;
}

.tranding-slider-control {
  position: relative;
  bottom: 2rem;
  display: flex;
  align-items: center;
  justify-content: center;
}

.tranding-slider-control .swiper-button-next {
  left: 58% !important;
  transform: translateX(-58%) !important;
}

@media (max-width:990px) {
  .tranding-slider-control .swiper-button-next {
    left: 70% !important;
    transform: translateX(-70%) !important;
  }
}

@media (max-width:450px) {
  .tranding-slider-control .swiper-button-next {
    left: 80% !important;
    transform: translateX(-80%) !important;
  }
}

@media (max-width:990px) {
  .tranding-slider-control .swiper-button-prev {
    left: 30% !important;
    transform: translateX(-30%) !important;
  }
}

@media (max-width:450px) {
  .tranding-slider-control .swiper-button-prev {
    left: 20% !important;
    transform: translateX(-20%) !important;
  }
}

.tranding-slider-control .slider-arrow {
  background: var(--white);
  width: 3.5rem;
  height: 3.5rem;
  border-radius: 50%;
  left: 42%;
  transform: translateX(-42%);
  filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
}

.tranding-slider-control .slider-arrow ion-icon {
  font-size: 2rem;
  color: #222224;
}

.tranding-slider-control .slider-arrow::after {
  content: '';
}

.tranding-slider-control .swiper-pagination {
  position: relative;
  width: 15rem;
  bottom: 1rem;
}

.tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
  filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
}

.tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
  background: var(--primary);
}

background-color: white;

}

.hello{
  background: linear-gradient(135deg,rgba(255,255,255,0.6),rgba(255,255,255,0));
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-bottom-left-radius: 30px;
  border-bottom-right-radius: 30px;
  border-top-right-radius: 30px;
  border-top-left-radius: 30px;

  border: 1px solid rgba(255,255,255,0.2);
  box-shadow: 0px 8px 32px 0 rgba(0,0,0,0.8);
  width: 33rem;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 15px;
}

.world div {
  font-weight: 500;
}

.world .btn{
  display: inline-block;
  text-decoration: none;
  padding: 6px 16px;
  color: #fff;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  font-size: 15px;
  border-radius: 30px;
  border-color: transparent;
  border-top-right-radius: 0;
  transition: 0.5s;
}

.hehe {
  display: inline-block;
  width: 160px;
}

.world .btn:hover{
  border-top-right-radius: 30px;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
}

.food-rating {
  margin-top: -10px;
  font-weight: 500;
}






/* td */
.container{
  margin-top: 20px;
  margin-left: 25px;
  width: 1860px;
  background-color: white;
  padding: 30px;
  box-shadow: 0 2px 16px rgba(0, 0, 0, .5);
  border-radius: 20px;
}

.container h4{
  margin-left: 18px;
  font-size: 30px;
  color: black;
}

.container h3{
  font-size: 18px;
}

.container .content_box .khela .box:hover h3{
    text-decoration: underline;
}

.container .content_box .khela h3{
  margin-top:0px;
}

.container .content_box .khela1 .box:hover h3{
  text-decoration: underline;
}

.container .content_box .khela2 .box:hover h3{
  text-decoration: underline;
}

.container .btn{
  display: inline-block;
  text-decoration: none;
  padding: 6px 14px;
  color: #fff;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  font-size: 13px;
  border-radius: 30px;
  border-color: transparent;
  border-top-right-radius: 0;
  transition: 0.5s;
}

.container .btn:hover{
  border-top-right-radius: 30px;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
}

.tab_box{
  width: 100%;
  justify-content: space-around;
  align-items: center;
  border-bottom: 2px solid rgba(229, 229, 229);
  font-size: 18px;
  font-weight: 600;
  position: relative;
}

.tab_box .tab_btn{
  font-size: 18px;
  font-weight: 600;
  color: #919191;
  background: none;
  border: none;
  padding: 18px;
  cursor: pointer;
}

.tab_box .tab_btn.active{
  color: #7360ff;
}

.content_box{
  padding: 20px;
}

.content_box .content{
  display: none;
  animation: moving .5s ease;
}

@keyframes moving{
  from{transform: translateX(50px); opacity: 0;}
  to{transform: translateX(0px); opacity: 1;}
}

.content_box .content.khela.active{
  display:grid;
  grid-template-columns: 3fr 3fr 3fr 3fr 3fr;
}

.content_box .content.khela1.active{
  display:grid;
  grid-template-columns: 3fr 3fr 3fr 3fr 3fr;
}

.content_box .content.khela2.active{
  display:grid;
  grid-template-columns: 3fr 3fr 3fr 3fr 3fr;
}


.content_box .content h2{
  margin-bottom: 10px;
}

.line{
  position: absolute;
  top: 62px;
  left: 0;
  width: 90px;
  height: 5px;
  background-color: #7360ff;
  border-radius: 10px;
  transition: all .3s ease-in-out;
}

/* .container .content_box .khela .box .line-on-hover{
  outline: none;
  transition: border 0.3s;
}

.container .content_box .khela .box .line-on-hover:hover{
  border: 2px solid blue;
  border-radius: 6px;
}

.container .content_box .khela1 .box .line-on-hover{
  outline: none;
  transition: border 0.3s;
}

.container .content_box .khela1 .box .line-on-hover:hover{
  border: 2px solid blue;
  border-radius: 6px;
}

.container .content_box .khela2 .box .line-on-hover{
  outline: none;
  transition: border 0.3s;
}

.container .content_box .khela2 .box .line-on-hover:hover{
  border: 2px solid blue;
  border-radius: 6px;
} */

.container .content_box .content .box{
      text-align: center;
      padding: 2rem;

}

.container .content_box .content .box img{
      height:12rem;
      width: 12rem;
      border-radius: 100%;
      margin-bottom: 1rem;
}

.container .content_box .content .box:hover img{
  height:14rem;
  width: 14rem;
  border-radius: 100%;
  margin-bottom: 1rem;
  box-shadow: rgba(0, 0, 0, .5);
  cursor: pointer;
}

/* td */


footer{
  background-color: #000000ff;
  position: relative;
  width: 100%;
  /* margin-top: 3000px; */
  height: 400px;
  padding: 3rem 1rem;
  font-size: 13px;
  margin-top: 80px;
  padding-top: 60px;
}




.fcontainer {
  max-width: 1140px;
  margin: 0 auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;


}
.frow{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.fcol{
  width: 400px;
  height:200px;
  color:#f2f2f2f2;
  font-family: poppins;
  padding:0 10rem;
}
.fcol .flogo{
  width: 100px;
  margin-bottom:25px;
}
.fcol h3{
  color:#ff014fff;
  margin-bottom: 20px;
  position: relative;
  cursor: pointer;
}
.fcol h3::after{
  content: '';
  height:3px;
  width:0px;
  background-color: #ff014fff;
  position: absolute;
  bottom: 0;
  left:0;
  transition: 0.3s ease;

}
.fcol h3:hover::after{
  width:30px
}
.fcol .fsocial a i{
  color:#ff014fff;
  margin-top:2rem;
  margin-right: 5px;
  transition: 0.3s ease;
}
.fcol .fsocial a i:hover{
  transform: scale(1.5);
  filter:grayscale(25);
}
.fcol .flinks a{
  display: block;
  text-decoration: none;
  color:#f2f2f2;
  margin-bottom: 5px;
  position: relative;
  transition: 0.3s ease;
}
.fcol .flinks a::before{
  content:'';
  height: 16px;
  width:3px;
  position: absolute;
  top:5px;
  left:-10px;
  background-color: #ff014fff;
  transition: 0.5s ease;
  opacity: 0;
}
.fcol .flinks a:hover::before{
  opacity: 1;
}
.fcol .flinks a:hover{
  transform: translateX(-8px);
  color:#ff014fff;
}
.fcol .fcontact-details{
  display: inline-flex;
  justify-content: space-between;
}
.fcol .fcontact-details i{
  margin-right:15px;
}
.frow .fform{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:2rem 0;
}
.frow .fform input{
  background-color: #1a1c20ff;
  border:0;
  outline:none;
  padding:14px 20px;
  border-radius: 6px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.fform button{
  padding:14px 20px;
  border:0;
  border-radius: 6px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  background-color: #ff014fff;
}

/********** Responsive Design ********/
@media(max-width:900px)
{
.frow{
  flex-direction: column;
}
.fcol{
  width: 100%;
  text-align: left;
  margin-bottom: 25px;
}
}
@media(max-width:768px)
{
.frow{
  flex-direction: column;
}
.fcol{
  width: 100%;
  text-align: left;
  margin-bottom: 20px;
}
}




@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  background: #E3F2FD;
}
.chatbot-toggler {
  z-index: 500;
  position: fixed;
  bottom: 30px;
  right: 35px;
  outline: none;
  border: none;
  height: 50px;
  width: 50px;
  display: flex;
  cursor: pointer;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  /* background: #724ae8; */
  background: linear-gradient(45deg,#df4881, #000080);
  transition: all 0.2s ease;
}
body.show-chatbot .chatbot-toggler {
  transform: rotate(90deg);
}
.chatbot-toggler span {
  color: #fff;
  position: absolute;
}
.chatbot-toggler span:last-child,
body.show-chatbot .chatbot-toggler span:first-child  {
  opacity: 0;
}
body.show-chatbot .chatbot-toggler span:last-child {
  opacity: 1;
}
.chatbot {
  z-index: 500;
  position: fixed;
  right: 35px;
  bottom: 90px;
  width: 420px;
  background: #fff;
  border-radius: 15px;
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
  transform: scale(0.5);
  transform-origin: bottom right;
  box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
              0 32px 64px -48px rgba(0,0,0,0.5);
  transition: all 0.1s ease;
}
body.show-chatbot .chatbot {
  opacity: 1;
  pointer-events: auto;
  transform: scale(1);
}
.chatbot header {
  padding: 16px 0;
  position: relative;
  text-align: center;
  color: #fff;
  background: linear-gradient(45deg,#df4881, #000080);
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.chatbot header span {
  position: absolute;
  right: 15px;
  top: 50%;
  display: none;
  cursor: pointer;
  transform: translateY(-50%);
}
header h2 {
  font-size: 25.6px
}
.chatbot .chatbox {
  overflow-y: auto;
  height: 510px;
  padding: 30px 20px 100px;
}
.chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
  width: 6px;
}
.chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
  background: #fff;
  border-radius: 25px;
}
.chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
  background: #ccc;
  border-radius: 25px;
}
.chatbox .chat {
  display: flex;
  list-style: none;
}
.chatbox .outgoing {
  margin: 20px 0;
  justify-content: flex-end;
}
.chatbox .incoming span {
  width: 32px;
  height: 32px;
  color: #fff;
  cursor: default;
  text-align: center;
  line-height: 32px;
  align-self: flex-end;
  background: linear-gradient(45deg,#df4881, #000080);
  border-radius: 4px;
  margin: 0 10px 7px 0;
}
.chatbox .chat p {
  white-space: pre-wrap;
  padding: 12px 16px;
  border-radius: 10px 10px 0 10px;
  max-width: 75%;
  color: #fff;
  font-size: 15.2px;
  background: linear-gradient(45deg,#df4881, #000080);
}
.chatbox .incoming p {
  border-radius: 10px 10px 10px 0;
}
.chatbox .chat p.error {
  color: #721c24;
  background: #f8d7da;
}
.chatbox .incoming p {
  color: #000;
  background: #f2f2f2;
}
.chatbot .chat-input {
  display: flex;
  gap: 5px;
  position: absolute;
  bottom: 0;
  width: 100%;
  background: #fff;
  padding: 3px 20px;
  border-top: 1px solid #ddd;
}
.chat-input textarea {
  height: 55px;
  width: 100%;
  border: none;
  outline: none;
  resize: none;
  max-height: 180px;
  padding: 15px 15px 15px 0;
  font-size: 15.2px;
}
.chat-input span {
  align-self: flex-end;
  color: linear-gradient(45deg,#df4881, #000080);
  cursor: pointer;
  height: 55px;
  display: flex;
  align-items: center;
  visibility: hidden;
  font-size: 1.35rem;
}
.chat-input textarea:valid ~ span {
  visibility: visible;
}

@media (max-width: 490px) {
  .chatbot-toggler {
    right: 20px;
    bottom: 20px;
  }
  .chatbot {
    right: 0;
    bottom: 0;
    height: 100%;
    border-radius: 0;
    width: 100%;
  }
  .chatbot .chatbox {
    height: 90%;
    padding: 25px 15px 100px;
  }
  .chatbot .chat-input {
    padding: 5px 15px;
  }
  .chatbot header span {
    display: block;
  }
}

body {
  background-color: white;
}



.sub-menu-wrap {
  position: absolute;
  top: 80%;
  right: 8%; 
  width: 320px;
  max-height: 0px;
  overflow: hidden;
  transition: max-height 0.5s;
}

.sub-menu-wrap.open-menu{
  max-height: 400px;
}

.sub-menu {
  background: #fff;
  padding: 20px;
  margin: 10px;
  border-radius: 30px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, .3);
}

.user-info{
  display: flex;
  font-size: 19px;
}

.user-info h3{
  font-weight: bold;
  padding-top: 14px;
}

.user-info img{
  width: 60px;
  border-radius: 50%;
  margin-right: 15px;
}

.sub-menu hr {
  border: 0;
  height: 2px;
  width: 100%;
  background: #df4881;
  margin: 15px 0 10px;
}

.sub-menu-link {
  display: flex;
  align-items:center;
  text-decoration: none;
  color: #000000;
  margin: 12px 0;
}

.sub-menu-link p{
  width: 100%;
  font-size: 15px;
  font-weight: 500;
}

.sub-menu-link img {
  width: 40px;
  background: #e5e5e5;
  border-radius: 50%;
  padding: 8px;
  margin-right: 15px;
}

.sub-menu-link span {
  font-size: 26px;
  transition: transform 0.5s;
}

.sub-menu-link:hover span {
  color: #df4881;
  /* font-weight: bold; */
  transform: translateX(5px);
}

.sub-menu-link:hover p {
  font-weight: 600;
  color: #df4881;
  transform: translateX(5px);
}

.user-pic{
  width: 40px;
  border-radius: 50%;
  cursor: pointer;
  margin-left: 30px;
}


</style>

  <header class="sheader">
    <img src="logo.png" alt="" style="height: 40px; width: 47px;">
    <span style="font-size: 28px; font-weight: 500; padding-right: 80px;">&nbsp;doctorSP<i class="fa-solid fa-location-dot" style="padding-left: 2px; padding-right: 2px; color: #c430d7;"></i>T</span>
    <nav class="navbar">
      <div id="nav-close" class="fas fa-times"></div>
      <!-- <a href = "#home">home</a>
        <a href = "#services">services</a>
        <a href = "#about">about</a>
        <a href = "#contact us">contact us</a> -->

      <ul>
        <li> <a href="homepage.php">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        <li> <a href="../DoctorPage/index.php">&nbsp;&nbsp;&nbsp;Find a doctor&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        <li> <a href="../HospitalPage/index.php">&nbsp;&nbsp;&nbsp;Find a hospital&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        <li> <a href="../HealthAtoZ/index.php">&nbsp;&nbsp;&nbsp;Health A to Z&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        <!-- <li> <a href="">&nbsp;&nbsp;Services&nbsp;&nbsp;</a> </li> -->
        <li> <a href="../About/index.php">&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
        <li> <a href="../FAQ/index.php">&nbsp;&nbsp;&nbsp;FAQ&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
      </ul>
    </nav>

    <div class="icons">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="../DoctorPage/index.php">
      <div id="search-btn" class="fas fa-search"></div>
      </a>
     
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="images/user.png" class="user-pic" alt="" onclick="toggleMenu()">


    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="images/user.png" alt="">
          <h3><?php echo $userrow['fullname'] ;  ?></h3>
        </div>
        <hr>

        <a href="../Dashboard2/index.php" class="sub-menu-link">
          <img src="images/profile.png" alt="">
          <p>Dashboard</p>
          <span>></span>
        </a>

        <a href="#" class="sub-menu-link">
          <img src="images/setting.png" alt="">
          <p>Settings</p>
          <span>></span>
        </a>

        <a href="#" class="sub-menu-link">
          <img src="images/help.png" alt="">
          <p>Help & Support</p>
          <span>></span>
        </a>

        <a href="loginSignUp.php" class="sub-menu-link">
          <img src="images/logout.png" alt="">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>

    </div>

    <script>
      let subMenu=document.getElementById("subMenu");
      function toggleMenu(){
        subMenu.classList.toggle("open-menu");
      }
    </script>

  </header>

  <div class="search-form">
    <div id="close-search" class="fas fa-times"></div>
    <form action="">
      <!-- <input type="search" name="" placeholder="search here.." id="search-box"> -->
      <!-- <label for="search-box" class="fas fa-search"></label> -->
    </form>
  </div>
  

  <section class="home" id="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="box first">
            <div class="content">

              <div class="words" style="width: 700px; font-size: 55px;">
                <p style="font-size: 55px;">Find the right <br>right at your fingertips<br>
                  <a href="#" class="btn anim">Learn more</a>

                </p>
                <span>Doctor</span>
                <span>Hospital</span>
                <span>Care</span>
                <span>Doctor</span>
              </div>
              <!-- <p>hello t<?php echo $nid; ?> </p> -->


              <!-- <span>never stop</span> -->
              <!-- <h3>exploring</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facilis molestiae repellendus nemo odio quo nobis expedita perferendis saepe minima nam reprehenderit consequatur veritatis debitis et, maxime atque voluptatem distinctio!</p>
                        <a href="#" class = "btn">get started</a> -->
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box second">
            <div class="content">
              <div class="words" style="width: 1100px; padding-left: 80px;">

                <p style="font-size: 50px;">Get the best <strong style="color: #ff3c78;">Suggestions</strong> and learn
                  <br> which <strong style="color: #ff3c78;">Questions</strong> to ask your doctor<br>
                  <a href="#" class="btn anim">Learn more</a>
                </p>
                <!-- <span>doctor</span>
                            <span>hello</span>
                            <span>awesome</span>
                            <span>incredible</span>
                            <span>fantastic</span>
                     -->
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="box third">
            <div class="content" style="left: -980px; top: -200px;">
              <div class="words">
                <p>Schedule your <strong style="color: #ff3c78;">Appointment</strong> anytime<br>
                  <a href="#" class="btn anim">Learn more</a>
                </p>
                <!-- <span>fantastic</span>
                            <span>interesting</span>
                            <span>awesome</span>
                            <span>incredible</span>
                            <span>fantastic</span> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
  <script src="script2.js"></script>




  







  <div class="theswiper">
    <section id="tranding">
      <div class="sajid">
        <h3 class="text-center section-subheading">- Family Medicine Doctors near you -</h3>
        <h1 class="text-center section-heading" style="color: #ff3c78;">Top Doctors</h1>
      </div>
      <div class="sajid">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src ="1.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                      <?php if(isset($name1)) : ?>
                      <h2 id = "nd1">
                        <?php echo $name1; ?>
                      </h2>
                      <h4 id = "dd1">
                      <?php echo $dept1; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-regular fa-calendar-plus"></i>
                        &nbsp;Easy scheduling
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      <div>
                        <i class="fa-regular fa-comment"></i>
                        &nbsp;Explains conditions well
                      </div>
                      <h3 class="food-rating">
                        <div class="rating">
                          <div class="hehe">
                          <span> <?php echo $rat1; ?></span>
                          <!-- <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i> -->

                          <!-- //<p>kire bhai</p> -->

                          <?php echo printStars($rat1); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=1" class="btn anim">View Profile</a>  
                        </div>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="2.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                    <?php if(isset($name2)) : ?>
                      <h2 id = "nd2">
                        <?php echo $name2; ?>
                      </h2>
                      <h4 id = "dd2">
                      <?php echo $dept2; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-solid fa-laptop-medical"></i>
                        &nbsp;Offers Telehealth
                      </div>
                      <div>
                        <i class="fa-regular fa-calendar-plus"></i>
                        &nbsp;Easy scheduling
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      
                      <h3 class="food-rating">
                        <div class="rating">
                          
                          <!-- <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i> -->
                          <div class="hehe">
                          <span><?php echo $rat2; ?></span>
                          <?php echo printStars($rat2); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=2" class="btn anim">View Profile</a>  
                        </div>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="3.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                    <?php if(isset($name3)) : ?>
                      <h2 id = "nd1">
                        <?php echo $name3; ?>
                      </h2>
                      <h4 id = "dd1">
                      <?php echo $dept3; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-solid fa-laptop-medical"></i>
                        &nbsp;Offers Telehealth
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      <div>
                        <i class="fa-regular fa-comment"></i>
                        &nbsp;Explains conditions well
                      </div>
                      <h3 class="food-rating">
                        <div class="rating">
                          <!-- <span>4.0</span> -->
                          <!-- <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i> -->
                          <!-- <a href="#" class="btn anim">View Profile</a>   -->
                          <div class="hehe">
                          <span><?php echo $rat3; ?></span>
                          <?php echo printStars($rat3); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=3" class="btn anim">View Profile</a>  

                        </div>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="4.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                    <?php if(isset($name4)) : ?>
                      <h2 id = "nd1">
                        <?php echo $name4; ?>
                      </h2>
                      <h4 id = "dd1">
                      <?php echo $dept4; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-regular fa-calendar-plus"></i>
                        &nbsp;Easy scheduling
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      <div>
                        <i class="fa-regular fa-clock"></i>
                        &nbsp;Low wait times
                      </div>
                      <h3 class="food-rating">
                        <div class="rating">
                          <!-- <span>4.0</span> -->
                          <!-- <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i> -->
                          <!-- <a href="#" class="btn anim">View Profile</a>   -->
                          <div class="hehe">
                          <span><?php echo $rat4; ?></span>
                          <?php echo printStars($rat4); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=4" class="btn anim">View Profile</a>  

                        </div>
                      </h3>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="5.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                    <?php if(isset($name5)) : ?>
                      <h2 id = "nd1">
                        <?php echo $name5; ?>
                      </h2>
                      <h4 id = "dd1">
                      <?php echo $dept5; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-regular fa-calendar-plus"></i>
                        &nbsp;Easy scheduling
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      <div>
                        <i class="fa-regular fa-comment"></i>
                        &nbsp;Explains conditions well
                      </div>
                      <h3 class="food-rating">
                        <div class="rating">
                          <!-- //<span>4.0</span> -->
                          <!-- <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i> -->
                          <!-- <a href="#" class="btn anim">View Profile</a>   -->
                          <div class="hehe">
                          <span><?php echo $rat5; ?></span>
                          <?php echo printStars($rat5); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=5" class="btn anim">View Profile</a>  

                        </div>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="6.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                    <?php if(isset($name6)) : ?>
                      <h2 id = "nd1">
                        <?php echo $name6; ?>
                      </h2>
                      <h4 id = "dd1">
                      <?php echo $dept6; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-regular fa-calendar-plus"></i>
                        &nbsp;Easy scheduling
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      <div>
                        <i class="fa-regular fa-comment"></i>
                        &nbsp;Explains conditions well
                      </div>
                      <h3 class="food-rating">
                        <div class="rating">
                          <!-- <span>4.0</span>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <a href="#" class="btn anim">View Profile</a>   -->
                          <div class="hehe">
                          <span><?php echo $rat6; ?></span>
                          <?php echo printStars($rat6); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=6" class="btn anim">View Profile</a>  

                        </div>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="7.png" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom" style="color: black;">
                  <div class="hello">
                    <div class="world">
                    <?php if(isset($name7)) : ?>
                      <h2 id = "nd1">
                        <?php echo $name7; ?>
                      </h2>
                      <h4 id = "dd1">
                      <?php echo $dept7; ?>
                      </h4>
                      <?php endif; ?>
                      <div>
                        <i class="fa-regular fa-calendar-plus"></i>
                        &nbsp;Easy scheduling
                      </div>
                      <div>
                        <i class="fa-regular fa-heart"></i>
                        &nbsp;Employs friendly staff
                      </div>
                      <div>
                        <i class="fa-regular fa-comment"></i>
                        &nbsp;Explains conditions well
                      </div>
                      <h3 class="food-rating">
                        <div class="rating">
                          <!-- <span>4.0</span>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i>
                          <i class="fa-solid fa-star" style="color: #ec994b;"></i> -->
                          <!-- <a href="#" class="btn anim">View Profile</a>   -->
                          <div class="hehe">
                          <span><?php echo $rat7; ?></span>
                          <?php echo printStars($rat7); ?>
                          </div>
                          <a href="../DoctorProfile/profile.php?id=7" class="btn anim">View Profile</a>  

                        </div>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>


          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script2.js"></script>
  </div>





  <!-- td -->
<div class="container">
  <h4>Our &nbsp;Medical &nbsp;Departments&nbsp; and &nbsp;Specialities</h4>
  <div class="tab_box">
      <button class="tab_btn">Specialities</button>
      <button class="tab_btn">Conditions</button>
      <button class="tab_btn">Procedures</button>

      <div class="line"></div>
  </div>
  <div class="content_box">
      <div class="content khela active">
          <div class="box">
              <img src = "Family Medicine.png" alt = "" class="line-on-hover">
              <h3>Family Medicine</h3>
              <a href="../DoctorPage/dum2.php?id=1" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Internal Medicine.png" alt = "" class="line-on-hover">
              <h3>Internal Medicine</h3>
              <a href="../DoctorPage/dum2.php?id=2" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Dentistry.png" alt = "" class="line-on-hover">
              <h3>Dentistry</h3>
              <a href="../DoctorPage/dum2.php?id=3" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Orthopedic.png" alt = "" class="line-on-hover">
              <h3>Orthopedic Surgery</h3>
              <a href="../DoctorPage/dum2.php?id=4" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Obsetrics.png" alt = "" class="line-on-hover">
              <h3>Obstetrics Gynecology</h3>
              <a href="../DoctorPage/dum2.php?id=5" class="btn">Visit</a>
          </div>            
      </div>

      <div class="content khela1">
          <div class="box">
              <img src = "Endometroisis.png" alt = "" class="line-on-hover">
              <h3>Endometriosis</h3>
              <a href="../DoctorPage/dum2.php?id=6" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "ADHD.png" alt = "" class="line-on-hover">
              <h3>ADHD and-or ADD</h3>
              <a href="../DoctorPage/dum2.php?id=7" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Anxiety.png" alt = "" class="line-on-hover">
              <h3>Anxiety</h3>
              <a href="../DoctorPage/dum2.php?id=8" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Fibromalgia.png" alt = "" class="line-on-hover">
              <h3>Fibromalgia</h3>
              <a href="../DoctorPage/dum2.php?id=9" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "sleep.png" alt = "" class="line-on-hover">
              <h3>Sleep Apnea</h3>
              <a href="../DoctorPage/dum2.php?id=10" class="btn">Visit</a>
          </div>
      </div>

      <div class="content khela2">
          <div class="box">
              <img src = "colonoscopy.png" alt = "" class="line-on-hover">
              <h3>Colonoscopy</h3>
              <a href="../DoctorPage/dum2.php?id=11" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Hernia.png" alt = "" class="line-on-hover">
              <h3>Hernia Repair</h3>
              <a href="../DoctorPage/dum2.php?id=12" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "Vasectomy.png" alt = "" class="line-on-hover">
              <h3>Vasectomy</h3>
              <a href="../DoctorPage/dum2.php?id=13" class="btn">Visit</a>
          </div>

          <div class="box">
              <img src = "knee.png" alt = "" class="line-on-hover">
              <h3>Knee replacement</h3>
              <a href="../DoctorPage/dum2.php?id=15" class="btn">Visit</a>
          </div>
      </div>
  </div>
</div>

<script>
  const tabs= document.querySelectorAll('.tab_btn');
  const all_content= document.querySelectorAll('.content');

  tabs.forEach((tab, index)=>{
      tab.addEventListener('click', (e)=>{
          tabs.forEach(tab=>{tab.classList.remove('active')});
          tab.classList.add('active');

          var line=document.querySelector('.line');
      line.style.width = e.target.offsetWidth + "px";
      line.style.left = e.target.offsetLeft + "px";
      all_content.forEach(content=>{content.classList.remove('active')});
      all_content[index + 3].classList.add('active');
      })
  })
</script>

<!-- td -->



<footer>
  <div class="fcontainer">
      <div class="frow">
            <div class="fcol" id="fcompany">
              <h3>DoctorSpot</h3>
                <!-- <img src="logo.png" alt="" class="flogo"> -->

                <p style="width:500px;">
                      Elevate your medical practice with <br>
                      our premium services and transform <br>
                      your online presence into a reputable <br>
                      brand. Find the perfect doctor effortlessly <br> 
                      on our user-friendly platform.
                </p>
                <div class="fsocial">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>


            <div class="fcol" id="fservices">
               <h3>Services</h3>
               <div class="flinks">
                  <a href="#">Find a doctor</a>
                  <a href="#">Find a hospital</a>
                  <a href="#">Health A to Z</a>
                  <!-- <a href="#">Card Design</a> -->
               </div>
            </div>

            <div class="fcol" id="fuseful-links">
               <h3>Links</h3>
               <div class="flinks">
                  <a href="#">About</a>
                  <a href="#">Services</a>
                  <a href="#">Our Policy</a>
                  <a href="#">Help</a>
               </div>
            </div>

            <div class="fcol" id="fcontact">
                <h3>Contact</h3>
                <div class="fcontact-details">
                   <i class="fa fa-location"></i>
                   <p>Bangabandhu Hall, CUET, <br> Chattogram, Bangladesh</p>
                </div>
                <div class="fcontact-details">
                   <i class="fa fa-phone"></i>
                   <p>+1-8755856858</p>
                </div>
            </div>
      </div>

      <div class="frow">
            <div class="fform">
              <form action="">
                  <input type="text" placeholder="Email here...">
                  <button><i class="fa fa-paper-plane"></i></button>
              </form>
            </div>
      </div>

  </div>
</footer>

<button class="chatbot-toggler">
      <span class="material-symbols-rounded">mode_comment</span>
      <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
      <header>
        <h2>Predico</h2>
        <div style="font-size:small;">by DoctorSpot</div>
        <span class="close-btn material-symbols-outlined">close</span>
      </header>
      <ul class="chatbox">
        <li class="chat incoming">
          <span class="material-symbols-outlined">smart_toy</span>
          <p>Hi there 👋<br>How can I help you today?</p>
        </li>
      </ul>
      <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
      </div>
    </div>


</body>

</html>


