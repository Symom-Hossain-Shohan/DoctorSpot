<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
  <script src="https://kit.fontawesome.com/b4cd265a5a.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <script src="scriptcb.js" defer></script>
    <title>Responsive Dashboard Design #2 | AsmrProg</title>
</head>

<body>


<?php
  session_start();
  $ID = $_SESSION['id']; 
  $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");


  $query = "SELECT * FROM user WHERE id = ?";
  $statement = $con->prepare($query);
  $statement->bind_param('i', $ID);
  $statement->execute();
  $result = $statement->get_result();

  $row = $result->fetch_assoc();

  $con1 = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");
  $sql1 = "SELECT * FROM hello WHERE userid = '$ID' ORDER BY date and hour";
  $all_docs = $con1->query($sql1);


?>

    <!-- Sidebar -->
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
          <h3><?php echo $row['fullname']; ?></h3>
        </div>
        <hr>

        <a href="../Dashboard2/index.php" class="sub-menu-link">
          <img src="images/profile.png" alt="">
          <p>Dashboard</p>
          <span>></span>
        </a>

       

        <a href="../FAQ/index.php" class="sub-menu-link">
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

<!-- 
  <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
          <input type="search" name="" placeholder="search here.." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
      </div>
   -->
      <script src="script.js"></script>

    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <!-- End of Navbar -->

        <main>
            <div class="header">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">
                                <!-- Analytics -->
                            </a></li>
                        
                        <li><a href="#" class="active"> <?php echo $row['fullname'];  ?>  </a></li>
                    </ul>
                </div>
                <!-- <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a> -->
            </div>

            <!-- Insights -->
            <ul class="insights">
    
                <li style="box-shadow: 0 5px 20px rgba(0, 0, 0, .3);">
                    <i class='bx bx-calendar-check'></i>
                    <span class="info">
                        <h4>
                        Syncing with time,<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your path to success
                        </h4>
                        <!-- <p>Paid Order</p> -->
                    </span>
                </li>
                <li style="box-shadow: 0 5px 20px rgba(0, 0, 0, .3);"><i class='bx bx-show-alt'></i>
                    <span class="info">
                        <h4>
                        Eye care today, <br>&nbsp;&nbsp;&nbsp;&nbsp;Clear vision tomorrow
                        </h4>
                        <!-- <p>Site Visit</p> -->
                    </span>
                </li>
                <li style="box-shadow: 0 5px 20px rgba(0, 0, 0, .3);"><i class='bx bx-line-chart'></i>
                    <span class="info">
                        <h4>
                          Strive for progress, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not for perfection
                        </h4>
                        <!-- <p>Searches</p> -->
                    </span>
                </li>
                <li style="box-shadow: 0 5px 20px rgba(0, 0, 0, .3);"><i class='bx bx-dollar-circle'></i>
                    <span class="info">
                        <h4>
                        Wealth and health, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A harmonious balance
                        </h4>
                        <!-- <p>Total Sales</p> -->
                    </span>
                </li>
            </ul>
            <!-- End of Insights -->
            

            <div class="bottom-data">
            <div class="reminders">
                    <div class="header">
                        <i class='bx bx-note'></i>
                        <h3>Remiders</h3>
                        <!-- <i class='bx bx-filter'></i> -->
                        <!-- <i class='bx bx-plus'></i> -->
                    </div>
                    <ul class="task-list">
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Take your pills</p>
                            </div>
                            <!-- <i class='bx bx-dots-vertical-rounded'></i> -->
                        </li>
                        <li class="completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Drink water</p>
                            </div>
                            <!-- <i class='bx bx-dots-vertical-rounded'></i> -->
                        </li>
                        <li class="not-completed">
                            <div class="task-title">
                                <i class='bx bx-check-circle'></i>
                                <p>Do exersice</p>
                            </div>
                            <!-- <i class='bx bx-dots-vertical-rounded'></i> -->
                        </li>
                    </ul>
                </div>

                <script>
                    // Get all the task list items
                    const taskItems = document.querySelectorAll('.task-list li');
                  
                    // Add click event listener to each task item
                    taskItems.forEach(item => {
                      item.addEventListener('click', () => {
                        // Toggle the 'completed' class to 'not-completed' and vice versa
                        if (item.classList.contains('completed')) {
                          item.classList.remove('completed');
                          item.classList.add('not-completed');
                        //   item.classList.add()
                        } else if (item.classList.contains('not-completed')) {
                          item.classList.remove('not-completed');
                          item.classList.add('completed');
                        }
                      });
                    });
                  </script>

                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Appointment</h3>
                        <!-- <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i> -->
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Hospital </th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($rw = $all_docs->fetch_assoc()) { ?>
                            <tr>
                                <td>
                                    <img src="<?php echo ($rw['picture']) ; ?>.png">
                                    <p><?php echo $rw['doctorname']; ?></p>
                                </td>
                                <td><?php echo $rw['date']; ?></td>
                                <td><?php echo $rw['hour']; ?> : <?php echo $rw['minute']; ?></td>
                                <td><?php echo $rw['hospital']; ?></td>
                                <td><?php echo $rw['address']; ?></td>

                                <!-- <td><span class="status completed">Completed</span></td> -->
                            </tr>
                        <?php }?>
                            <!-- <tr>
                                <td>
                                    <img src="images/profile-1.jpg">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="images/profile-1.jpg">
                                    <p>John Doe</p>
                                </td>
                                <td>14-08-2023</td>
                                <td><span class="status process">Processing</span></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <!-- Reminders -->
                

                <!-- End of Reminders-->

            </div>



                       
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



        </main>

        

    </div>

    

    <script src="index.js"></script>


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