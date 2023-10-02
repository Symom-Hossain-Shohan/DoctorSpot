<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive FAQ Accordion | CodingLab </title>
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="scriptcb.js" defer></script>
    
   </head>
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
      <div id="search-btn" class="fas fa-search" style="font-size:26px;"></div>
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
      <input type="search" name="" placeholder="search here.." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
    </form>
  </div>






  <div class="accordion">
    <div class="image-box">
      <img src="images/mainImg.png" alt="">
    </div>
    <div class="accordion-text">
      <div class="title">Frequently Asked Questions?</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">What do you mean by HTML & CSS?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, doloribus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What do you mean by JavaScript?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">From where you learned HTML & CSS?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, necessitatibus.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Which code editor do you use?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, labore.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Software you use for video editing?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, repudiandae!</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>


  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>


  
<footer>
  <div class="fcontainer" style="padding-left:180px;">
      <div class="frow">
            <div class="fcol" id="fcompany">
              <h3>DoctorSpot</h3>
                <!-- <img src="logo.png" alt="" class="flogo"> -->
                <p>
                  Elevate your medical practice with<br>
                  our premium services and transform<br>
                  your online presence into a reputable<br>
                  brand. Find the perfect doctor effortlessly<br>
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



</body>
</html>
