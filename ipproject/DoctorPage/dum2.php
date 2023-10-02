<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product carad</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <script src="scriptcb.js" defer></script>

</head>



<?php
  session_start();
  $nam = 1; 
    $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");
    $sql1 = "SELECT * FROM doctor WHERE '$nam'";
    $all_docs = $con->query($sql1);

  if(isSet($_GET['id']))
  {
    $idno = $_GET['id'];
    $strings = array("b", "Medicine", "Medicine", "Dentistry", "Orthopedic", "Gynocology", "Gynocology", "Neorology", "Neorology", "Orthopedic", "Neorology", "Medicine", "Allergy", "Gynocology", "Neorology", "Orthopedic", "Cardiology", "Allergy", "Dermatology");
    $deptt = $strings[$idno];
    $con4 = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");
    $sql4 = "SELECT * FROM doctor WHERE department =  '$deptt'";
    $all_docs = $con4->query($sql4);
  }
  else 
  {
    $nid = $_SESSION['id']; 
    // var params = "var1=" + encodeURIComponent(stringVar) + "&var2=" + encodeURIComponent(stringVar1) + "&var3=" + encodeURIComponent(doctor.value);
    $nam = 1; 
    $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");
    $sql1 = "SELECT * FROM doctor WHERE '$nam'";
    $all_docs = $con->query($sql1);
    $bool = 0; 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $dept = $_POST['var1'];
      $loc = $_POST['var2'];
      $name = $_POST['var3'];
      //  $sql2 = "SELECT * FROM doctor WHERE name = '$name'";
      //  $all_docs1 = $con->query($sql2);
      //  $_SESSION['query'] = $all_docs1; 
      $_SESSION['dept'] = $dept; 
      $_SESSION['loc'] = $loc; 
      $_SESSION['name'] = $name; 
    }




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
        <li> <a href="../LoginSignUp/homepage.php">&nbsp;&nbsp;Home&nbsp;&nbsp;</a> </li>
        <li> <a href="../DoctorPage/index.php">&nbsp;&nbsp;Find a doctor&nbsp;&nbsp;</a> </li>
        <li> <a href="../HospitalPage/index.php">&nbsp;&nbsp;Find a hospital&nbsp;&nbsp;</a> </li>
        <li> <a href="../HealthAtoZ/index.php">&nbsp;&nbsp;Health A to Z&nbsp;&nbsp;</a> </li>
        <li> <a href="#">&nbsp;&nbsp;Services&nbsp;&nbsp;</a> </li>
        <li> <a href="../About/index.php">&nbsp;&nbsp;About&nbsp;&nbsp;</a> </li>
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
    <!-- <p><?php echo $var1 ;?></p> -->
      <div class="sd">
        <div id="select">
            <p id="selectText" >All Locations</p>
            <img src="arrow.png" alt="" style="height: 40px;">
            <ul id="list">
                <li class="options" data-value = "All Locations">All Locations</li>
                <li class="options" data-value = "Dhaka">Dhaka</li>
                <li class="options" data-value = "Chittagong">Chittagong</li>
                <li class="options" data-value = "Khulna">Khulna</li>
                <li class="options" data-value = "Rajshahi">Rajshahi</li>
                <li class="options" data-value = "Barishal">Barishal</li>
                <li class="options" data-value = "Sylhet">Sylhet</li>
                <!-- <li class="options">Rangpur</li> -->
                <!-- <li class="options">Mymensingh</li> -->
            </ul>
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
                  // console.log(option);

                  stringVar1 = this.innerHTML; 
                  console.log(stringVar1); 
                  // inputfield.placeholder = "Search Your Doctor In " + selectText.innerHTML; 
              }
          }

          // console.log(stringVar); 


      </script>

        <div class="search-bar">
        <input id="inputfield" type="text" placeholder="Search Your Doctor">
        </div>

        <div id="select1">
          <p id="selectText1">All Departments</p>
          <img src="arrow.png" alt="" style="height: 40px;">
          <ul id="list1">
              <li class="options1" data-value = "All Departments">All Departments</li>
              <li class="options1" data-value = "Medicine">Medicine</li>
              <li class="options1" data-value = "Dentistry">Dentistry</li>
              <li class="options1" data-value = "Orthopedic">Orthopedic</li>
              <li class="options1" data-value = "Gynecology">Gynecology</li>
              <li class="options1" data-value = "Cardiology">Cardiology</li>
              <li class="options1" data-value = "Neurology">Neurology</li>
              <!-- <li class="options">Rangpur</li> -->
              <!-- <li class="options">Mymensingh</li> -->
          </ul>
      </div>

      
      <script>

        let toggle1; 
        let select1 = document.getElementById("select1"); 
        let list1 = document.getElementById("list1"); 
        let selectText1 = document.getElementById("selectText1"); 
        let options1 = document.getElementsByClassName("options1"); 
        var stringVar = ""; 
        
        select1.onclick = function(){
            list1.classList.toggle("open");
        }
        for(option of options1)
        {
            option.onclick = function(){
                selectText1.innerHTML = this.innerHTML; 
                stringVar = this.innerHTML;
                // console.log(stringVar); 
                // console.log(stringVar1); 

                
                // console.log(this); 
                //inputfield.placeholder = "Search Your Doctor In " + selectText.innerHTML; 
            }
        }



        // console.log(toggle1.value); 

      </script>

      

      </div>

      <div class="pd">
        <!-- <a href="#" class="btn anim" id = "khela" onclick = "test()">Apply</a>   -->
        
        <!-- <a ref = "dummy.php" id = "khela" onclick = "pst()" type ="submit">Apply</button> -->
      
        <a href="dummy.php" class="btn anim" id = "khela" onclick = "pst()" type ="submit">Apply</a>
        
      </div>
    
</div>









<div class="container">

    <div class="header">
      <h1>Doctors</h1>
    </div>

    <div class="products">
      <?php
      while($row = mysqli_fetch_assoc($all_docs)){
      $docNo = $row['ID']; 
      ?>
      <div class="product">
        <div class="image">
          <!-- <img src="images/1.png" alt="">
         -->
         <img src="<?php echo $row['picture']; ?>.png" alt="">

        </div>

        <div class="tranding-slide-content">
          <div class="tranding-slide-content-bottom" style="color: black;">
            <div class="hello">
              <div class="world">
                <h2>
                  <?php echo $row['name']; ?>
                </h2>
                <h4>
                  <?php echo $row['department'];?>
                </h4>
                <div>
                  <i class="fa-solid fa-laptop-medical" style="width: 20px; height: 15px;"></i>
                  &nbsp;Offers Telehealth
                </div>
                <div>
                  <i class="fa-regular fa-calendar-plus" style="width: 20px; height: 15px;"></i>
                  &nbsp;Easy scheduling
                </div>
                <div>
                  <i class="fa-regular fa-heart" style="width: 20px; height: 15px;"></i>
                  &nbsp;Employs friendly staff
                </div>

                <h3 class="food-rating">
                  <div class="rating">
                  <div class="hehe">
                    <span class="spa"><?php echo $row['rating'];?></span>
                    <!-- <i class="fa-solid fa-star" style="color: darkorange"></i>
                    <i class="fa-solid fa-star" style="color: darkorange"></i>
                    <i class="fa-solid fa-star" style="color: darkorange"></i>
                    <i class="fa-solid fa-star" style="color: darkorange"></i>
                    <i class="fa-regular fa-star" style="color: darkorange"></i>
                    <a href="#" class="btn anim">View Profile</a> -->
                    <?php echo printStars($row['rating']); ?>
                    </div>
                    <a href="../DoctorProfile/profile.php?id=<?php echo $docNo; ?>" class="btn anim">View Profile</a>  
  
                  </div>
                </h3>
              </div>
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
                         <p>Bangabandhu Hall, CUET, <br>Chattogram, Bangladesh</p>
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


  <script>
     var doctor = document.getElementById("inputfield"); 

     function pst(){
        console.log(stringVar1);
        console.log(stringVar); 
        console.log(doctor.value); 

      
      var xhr = new XMLHttpRequest(); 
      var url = ""; 
      xhr.open("POST", url, true); 
      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); // Response from the PHP script
            }
        };

        var params = "var1=" + encodeURIComponent(stringVar) + "&var2=" + encodeURIComponent(stringVar1) + "&var3=" + encodeURIComponent(doctor.value);

        xhr.send(params);


     }


     
  </script>
    

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




  <!-- <script src="js/all.min.js"></script> -->
  <script src="js/main.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->

  


</body>

</html>
