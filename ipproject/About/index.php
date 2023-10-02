<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Blogger</title>
    <!-- Box-icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">

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
        <li> <a href="index.php">&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;</a> </li>
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


      <div class="about-section">
        <div class="inner-container">
            <h1>About DoctorSpot</h1>
            <p class="text" style="font-size:18px;">
            Welcome to DoctorSpot, your trusted destination for finding qualified healthcare professionals. Our user-friendly platform simplifies the process of connecting you with the right doctor to meet your medical needs.

Our platform empowers you to take control of your health journey by offering a wide range of skilled doctors. Each doctor's profile provides essential information, including specialties, qualifications, experience, and patient reviews, helping you make an informed decision.

Thank you for choosing DoctorSpot for your healthcare needs. Start your journey to better health with us today.
              </p>
            <div class="skills" style="font-size:20px;">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span>
            </div>
        </div>
    </div>


<div class="us">
    <div class="lekha">
      <h1 class = "ello" data-text="Our dedicated doctors 
      find the best possible treatment">Our dedicated doctors find the best possible treatment</h1> 
    </div>


    <div class="container">
            <div class="drop" style="--clr:#ff0f5b;">
                <div class="content">
                    <h2 style="font-size:24px;">Awards</h2>
                    <p style="font-size:17px;">Our website for it's top-notch service over the year have won multiple awards.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="drop" style="--clr:#be01fe;">
                <div class="content">
                    <h2 style="font-size:24px;">Affiliated Hospitals</h2>
                    <p style="font-size:17px;">We have over 1000 affiliated hospitals all around the country. All of them providing state of the art fascilities.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="drop" style="--clr:#01b4ff;">
                <div class="content">
                    <h2 style="font-size:24px;">Registered Doctors</h2>
                    <p style="font-size:17px;">We have currently more than 1200 Specialist doctors 24/7 on service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
          </div>
  </div>


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
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>
</html>