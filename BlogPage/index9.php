<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Blogger</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style9.css">


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

<?php

session_start();


$nid = $_SESSION['id']; 


$con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
$sqln2 = "SELECT * FROM user WHERE id = '$nid'";
$resultn2 = $con->query($sqln2);
$userrow = $resultn2->fetch_assoc();

?>

<body>


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
        <li> <a href="../LoginSignUp/homepage.php">&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
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

        <a href="../LoginSignUp/loginSignUp.php" class="sub-menu-link">
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
          <input type="search" name="" placeholder="search here.." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
      </div>

      <script src="script.js"></script>


    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title" style="color:pearl; font-size:46px;">Trending Blogs</h2>
            <span class="home-subtitle" style="color:pearl; font-size:16px;">Your source of great content</span>
        </div>
    </section>

    <section class="about container" id="about">
        <div class="contentBx">
            <h2 class="titleText" style="font-size: 28px;">Healthy Fruits & Vegetables</h2>
            <p class="title-text" style="font-size: 18px;">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos consequuntur voluptate dolorum totam provident ducimus cupiditate dolore doloribus repellat. Saepe ad fugit similique quis quam. Odio suscipit incidunt distinctio.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed blanditiis libero pariatur ipsum suscipit voluptates aut, repellendus quos dolor autem, natus laboriosam consectetur maxime cumque, sunt magni optio? Veritatis, ea?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero porro architecto eos veniam sequi qui quos saepe excepturi id neque eum exercitationem possimus asperiores nostrum vero nemo laboriosam corporis amet, ratione minus 
                quae perspiciatis odit unde debitis! Quod, beatae. Beatae cum, voluptates ab saepe totam voluptas aut vitae possimus neque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsa non repellendus quaerat omnis totam natus alias veniam eius voluptatibus.
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, veniam. Magnam veritatis sit voluptate quae eos velit minus fuga nulla!
            </p>
        </div>
        <div class="imgBx">
            <img src="images/preview9.jpg" alt="" class="fitBg" style="height: 420px; width: 590px;">
        </div>
        
    </section>

    <div class="ddf">
        <p class="title-text" style="font-size: 18px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum eos consequuntur voluptate dolorum totam provident ducimus cupiditate dolore doloribus repellat. Saepe ad fugit similique quis quam. Odio suscipit incidunt distinctio.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed blanditiis libero pariatur ipsum suscipit voluptates aut, repellendus quos dolor autem, natus laboriosam consectetur maxime cumque, sunt magni optio? Veritatis, ea?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero porro architecto eos veniam sequi qui quos saepe excepturi id neque eum exercitationem possimus asperiores nostrum vero nemo laboriosam corporis amet, ratione minus 
            quae perspiciatis odit unde debitis! Quod, beatae. Beatae cum, voluptates ab saepe totam voluptas aut vitae possimus neque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsa non repellendus quaerat omnis totam natus alias veniam eius voluptatibus.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, veniam. Magnam veritatis sit voluptate quae eos velit minus fuga nulla!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus saepe, aliquam sapiente ex impedit aliquid magnam nam deserunt in, praesentium dolores illum distinctio doloremque officia earum omnis architecto quibusdam eaque quisquam vero cupiditate quidem, facere quo. Qui dolor ullam doloremque cupiditate eos cum, tempora voluptatem earum neque atque quo consequatur at quod animi velit rerum odit, quaerat excepturi. Vero illum, voluptatibus, debitis incidunt dolor, voluptatum natus assumenda fuga distinctio non nihil eum odio impedit quis.
        </p>
    </div>

    <div class="post-filter container" >
        <span class="filter-item active-filter" data-filter="all" style="font-size: 18px;">All</span>
        <span class="filter-item" data-filter="tech" style="font-size: 18px;">Health</span>
        <span class="filter-item" data-filter="food" style="font-size: 18px;">Food</span>
        <span class="filter-item" data-filter="news" style="font-size: 18px;">News</span>
    </div>
    
    <div class="post container">
        <!-- Post 1 -->
        <div class="post-box tech">
            <img src="images/preview4.jpg" alt="" class="post-img">
            <a href="index3.php" class="post-title">Exercises and Yoga for better health</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
        <!-- Post 2 -->
        <div class="post-box food">
            <img src="images/img2.jpg" alt="" class="post-img">
            <a href="#" class="post-title">Healthy Fruits & Vegetables for better health</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
        <!-- Post 3 -->
        <div class="post-box food">
            <img src="images/preview8.jpg" alt="" class="post-img">
            <a href="index6.php" class="post-title">How junk foods harms your health</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
        <!-- Post 4 -->
        <div class="post-box news">
            <img src="images/img4.jpg" alt="" class="post-img">
            <a href="index10.php" class="post-title">Travelling makes you feel better & Healthy</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        </div>
        <!-- Post 5 -->
        <div class="post-box tech">
            <img src="images/preview2.jpg" alt="" class="post-img">
            <a href="index.php" class="post-title">Smilling is the secret to happi..</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
        </div>
        <!-- Post 6 -->
        <div class="post-box news">
            <img src="images/preview12.jpg" alt="" class="post-img">
            <a href="index12.php" class="post-title">Working all time in the desk makes you..</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
        <!-- Post 7 -->
        <div class="post-box tech">
            <img src="images/preview6.jpg" alt="" class="post-img">
            <a href="index5.php" class="post-title">The Science of Aging Gracefully...</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
        <!-- Post 1 -->
        <div class="post-box news">
            <img src="images/preview7.jpg" alt="" class="post-img">
            <a href="index7.php" class="post-title">True friends are blessing for anyone</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
        <!-- Post 9 -->
        <div class="post-box food">
            <img src="images/img10.jpg" alt="" class="post-img">
            <a href="index11.php" class="post-title">Seafoods can be you today's dinner</a>
            <span class="post-date">12 Feb 2022</span>
            <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
            
        </div>
    </div>


    <footer>
        <div class="fcontainer" style="padding-left:180px;">
            <div class="frow">
                  <div class="fcol" id="fcompany">
                    <h3>DoctorSpot</h3>
                      <!-- <img src="logo.png" alt="" class="flogo"> -->
                      <p>
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
                      <br>
                      <div class="fcontact-details">
                         <i class="fa fa-phone"></i>
                         <p>+1-8755856858</p>
                      </div>
                  </div>
            </div>

            <div class="frow" style="padding-right:180px;">
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
  
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>
</html>