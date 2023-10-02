<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product carad</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <script src="scriptcb.js" defer></script>

</head>

<?php
  session_start();
  $nam = 1; 
  $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");
  $sql1 = "SELECT * FROM hospital WHERE '$nam'";
  $all_docs = $con->query($sql1);
  // $_SESSION['city'] = "Dhaka";
  $_SESSION['hosname'] = "1"; 
  $_SESSION['city'] = "ALL LOCATION" ;
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $city = $_POST['var1'];
    $hosname = $_POST['var2'];
    // $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");
    // $sql1 = "SELECT * FROM hospital WHERE location = '$city'";
    // $all_docs = $con->query($sql1);

    $_SESSION['city'] = $city; 
    $_SESSION['hosname'] = $hosname;
  }




  
function printStars($rating) {
  $stars = '';
  for ($i = 1.0; $i <= 5; $i++) {
      if ($i <= $rating) {
          $stars .= '<i class="fa-solid fa-star" style="color: darkorange"></i>';
      } else {
          if($i-1.0<$rating)
          {
            $stars .= '<i class="fa-solid fa-star-half" style="color: darkorange;"></i>';
          }
          // else 
          // {
          //   $stars .= '<i class="fa-solid fa-star"  style="color: rgba(255, 0, 0, 0.5);"></i>';
          // }
          
      }
  }
  return $stars;
}




// session_start();


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
  
      <script src="script3.js"></script>

  <!-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DoctorSpot</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Find a Doctor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Health A to Z</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">About us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 -->




  <div class="Hcontainer">
    <div class="search-bar">
        <div id="select">
            <p id="selectText">All Location</p>
            <img src="arrow.png" alt="" style="height: 40px;">
            <ul id="list">
                <li class="options">All Location</li>
                <li class="options">Dhaka</li>
                <li class="options">Chittagong</li>
                <li class="options">Khulna</li>
                <li class="options">Rajshahi</li>
                <li class="options">Barishal</li>
                <li class="options">Sylhet</li>
                <!-- <li class="options">Rangpur</li> -->
                <!-- <li class="options">Mymensingh</li> -->
            </ul>
        </div>
        <input id="inputfield" type = "text" placeholder ="Search Your Hospital">
    </div>

    <div class="pd">
        <!-- <a href="#" class="btn anim" id = "khela" onclick = "test()">Apply</a>   -->
        
        <!-- <a ref = "dummy.php" id = "khela" onclick = "pst()" type ="submit">Apply</button> -->
        <a href="dummy.php" class="btn anim" id = "khela" onclick = "pst()" type ="submit">Apply</a>
      
        
    </div>
</div>


<script>
    let select = document.getElementById("select"); 
    let list = document.getElementById("list"); 
    let selectText = document.getElementById("selectText"); 
    let options = document.getElementsByClassName("options"); 
    var stringVar1 = ""; 

    select.onclick = function(){
        list.classList.toggle("open");
    }

    for(option of options)
    {
        option.onclick = function(){
            selectText.innerHTML = this.innerHTML; 
            stringVar1 = this.innerHTML; 
            inputfield.value = "Search Your Doctor In " + stringVar1;
        }
    }

</script>

<script>
    var inString = document.getElementById("inputfield");
    console.log(stringVar1);
    console.log(inString.value);
     function pst(){
      var xhr = new XMLHttpRequest(); 
      var url = ""; 
      xhr.open("POST", url, true); 
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Response from the PHP script
            }
        };

        var params = "var1=" + encodeURIComponent(stringVar1) + "&var2=" + encodeURIComponent(inString.value);

        xhr.send(params);
     }



     
  </script>


  <div class="container">

    <div class="header">
      <h1>Hospitals</h1>
    </div>

    <div class="products">
    <?php
      
      while($row = mysqli_fetch_assoc($all_docs)){
      // $docNo = $row['ID']; 
      ?>
      
      <div class="spro">
        <div class="simg">
          <img src="images/h5.jpeg" alt="">
        </div>

        <div class="sinfo">
          <div class="sname">
            <h1><?php echo $row['name']; ?></h1>
            <h3>Address: &nbsp;&nbsp;<?php echo $row['address']; ?></h3>
            <h3>Website: &nbsp;&nbsp;<a href="<?php echo $row['website']; ?>"><?php echo $row['website'];?></a></h3>
            <h3>Contact: &nbsp;&nbsp;<?php echo $row['contact']; ?></h3>
            <div class="rating" style="display: flex;">
              <h3>Rating:&nbsp;&nbsp; <?php echo $row['rating'];  ?></h3>
              <div style="margin-top: 2px;">
              <!-- <i class="fa-solid fa-star" style="color: darkorange"></i>
              <i class="fa-solid fa-star" style="color: darkorange"></i>
              <i class="fa-solid fa-star" style="color: darkorange"></i>
              <i class="fa-solid fa-star" style="color: darkorange"></i>
              <i class="fa-regular fa-star" style="color: darkorange"></i> -->

              <?php echo printStars($row['rating']); ?>
              </div>
              <!-- <a href="#" class="btn anim">View Profile</a> -->
              <!-- <a href="../DoctorProfile/index.html" class="btn anim">View Profile</a>   -->
              <a href="../Doctorpage/index.php" class="btn anim">See Doctors</a>  
            </div>
           
          
          </div>
        </div>

      </div>
      <?php
      }
      ?>
      

    </div>


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


  </div>

  <!-- <script src="js/all.min.js"></script> -->
  <script src="js/main.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->



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