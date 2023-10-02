<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <script>
        function checkEmail(){
            var email = docment.getElementById("emailInput").value;
            var hasAtSymbol = email.includes("@");
            var atCount = email.split("@").length - 1;
            if(hasAtSymbol){
                alert("Email is Valid.");
            }else{
                alert("Invalid email.Please include the @symbol.");
            }
        }
    </script>    
    <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

    <header class="header">
        <img src="logo.png" alt="" style="height: 40px; width: 47px;">
        <span style="font-size: 28px; font-weight: 500; padding-right: 80px;">&nbsp;doctorSP<i class="fa-solid fa-location-dot" style="padding-left: 2px; padding-right: 2px; color: #c430d7;"></i>T</span>
        <nav class="navbar">
          <div id="nav-close" class="fas fa-times"></div>
          <!-- <a href = "#home">home</a>
            <a href = "#services">services</a>
            <a href = "#about">about</a>
            <a href = "#contact us">contact us</a> -->
    
          <ul>
            <li> <a href="../LoginSignUp/homepage.php">&nbsp;&nbsp;Home&nbsp;&nbsp;</a> </li>
            <li> <a href="../DoctorPage/index.php">&nbsp;&nbsp;Find a doctor&nbsp;&nbsp;</a> </li>
            <li> <a href="../HospitalPage/index.php">&nbsp;&nbsp;Find a hospital&nbsp;&nbsp;</a> </li>
            <li> <a href="../HealthAtoZ/index.php">&nbsp;&nbsp;Health A to Z&nbsp;&nbsp;</a> </li>
            <li> <a href="#">&nbsp;&nbsp;Services&nbsp;&nbsp;</a> </li>
            <li> <a href="../About us/index.php">&nbsp;&nbsp;About&nbsp;&nbsp;</a> </li>
            <li> <a href="#">&nbsp;&nbsp;Contact&nbsp;&nbsp;</a> </li>
          </ul>
        </nav>
    
        <div class="icons">
          &nbsp;&nbsp;
          <div id="search-btn" class="fas fa-search"></div>
          &nbsp;&nbsp;
          &nbsp;&nbsp;
          &nbsp;&nbsp;
          &nbsp;
          <div id="menu-btn" class="fas fa-bars"></div>
        </div>
      </header>
    
      <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
          <input type="search" name="" placeholder="search here.." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
      </div>




    <div class="us">
        <section class="lekha">
            <h1 class = "ello" data-text="Our dedicated doctors 
            find the best possible treatment">Our dedicated doctors find the best possible treatment</h1> -->
        </section>
            
        <section class="picture">

            <img src="photo1.jpg" class="photo1" alt="Photo 1">
            <img src="photo2.jpg" class="photo2" alt="Photo 2">
            <img src="photo3.jpg" class="photo3" alt="Photo 3">
            <img src="photo4.jpg" class="photo3" alt="Photo 4">
        </section>

        <section class="container">
            <div class="drop" style="--clr:#ff0f5b;">
                <div class="content">
                    <h2>Awards</h2>
                    <p>Our website for it's top-notch service over the year have won multiple awards.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="drop" style="--clr:#be01fe;">
                <div class="content">
                    <h2>Affiliated Hospitals</h2>
                    <p>We have over 1000 affiliated hospitals all around the country.<br>All of them providing state of the art fascilities.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="drop" style="--clr:#01b4ff;">
                <div class="content">
                    <h2>Registered Doctors</h2>
                    <p>We have currently more than 1200 Specialist doctors 24/7 on service.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </section>

        <section class="contact">
            <div class="contentt">
                <h2>Contact Us</h2>
                <p>For any kind of complaints or suggestions contact us</p>
            </div>
            <div class="containerr">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Winterfall, The Vale of Arryn<br>North</p>
                            
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Phone Number</h3>
                            <p>9901122412341<br>08801313-85884</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>peterbailish@gmail.com<br>don't_trust_peterbailish@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form>
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Nmae</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" id="emailInput" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required="required"></textarea>
                            <span>Type your message..</span>
                        </div>
                        <div class="inputBox">
                            <input type="submt" name="" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>