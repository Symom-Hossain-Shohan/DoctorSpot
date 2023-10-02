<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="scriptcb.js" defer></script>
    

    <title>Document</title>
    
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


    <section id="blog">

        <div class="blog-heading">
            <span style="margin-bottom: 70px;"> <h1>Health A to Z</h1></span>
        </div>
        <div class="gb">
        <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="preview9.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">How fruits and vegetables makes you healthy and...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index9.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="preview10.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">Travelling makes you feel fresh and healthy...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index10.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="preview11.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">Some tasty seafoods can make you day much...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index11.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>

            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="preview12.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">Too much working sitting on the desk can be...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index12.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>




            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="meditation.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>10 July 2023 / Meditation</span>
                        <a href="#" class="blog-title">Unlocking the Power of Meditation: A Path to...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index3.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="hand.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>10 June 2023 / Mental</span>
                        <a href="#" class="blog-title">The Surprising Link Between Social...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beli sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index1.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="smile.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>05 June 2023 / Positivity</span>
                        <a href="#" class="blog-title">The Power of a Smile: Exploring the...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="food.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>7 June 2023 / Food</span>
                        <a href="#" class="blog-title">Superfoods Unveiled: Exploring the Nutritional...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index4.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="fitness.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Physical Fitness</span>
                        <a href="#" class="blog-title">From Desk to Fitness: How Incorporating Physical...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index2.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="preview6.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">The Science of Aging Gracefully: Lifestyle...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index5.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="helena-lopes-PGnqT0rXWLs-unsplash.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">True friendship in life is always like a blessing...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index7.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>
            <div class="blog-container">
                <div class="blog-box">
                    <div class="blog-img">
                        <img src="preview8.jpg" alt="">
                    </div>
    
                    <div class="blog-text">
                        <span>01 June 2023 / Lifestyle</span>
                        <a href="#" class="blog-title">How junk foods and can effect your health...</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error maiores ratione officiis, quasi velit necessitatibus! Itaque reiciendis temporibus ab, sit illum nostrum eos repudiandae? Consequuntur minima odit dolorum perspiciatis accusamus?</p>
                        <a href="../BlogPage/index6.php" class="bttn">Read more</a>
                    </div>
                </div>
            </div>

            
        </div>


        
    </section>


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
  <script src="script.js"></script>

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