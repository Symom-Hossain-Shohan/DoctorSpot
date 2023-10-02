<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="profilestyle.css">
    <link rel="stylesheet" href="responsive.css">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <!-- <link rel="stylesheet" href="fonts/remixicon.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
</head>


<?php
        // Retrieve the product ID from the query parameter
        session_start();

        $nid = $_SESSION['id']; 


$con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
$sqln2 = "SELECT * FROM user WHERE id = '$nid'";
$resultn2 = $con->query($sqln2);
$userrow = $resultn2->fetch_assoc();



        $nid = $_SESSION['id']; 
        $ID = $_GET['id'];
        $_SESSION['docid'] = $ID; 
        $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
        $stmt = $con->prepare("SELECT * FROM doctor where id = ?");
        $stmt->bind_param("i", $ID);
        $stmt->execute();

        $result = $stmt->get_result();

        $startTime = 9; 
        $hospital = "hello";

        $okay = 0; 

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $name = $row['name'];
            $dept = $row['department'];
            $loc = $row['location'];
            $rat = $row['rating'];
            $pic = $row['picture'];
            $email = $row['email']; 
            $add = $row['address']; 
            $phn = $row['phone'];
            $startTime = $row['starttime']; 
            $hospital = $row['pry'];
            $second = $row['secondary'];  

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

        $con1 = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
        $stmt1 = $con1->prepare("SELECT * FROM user where id = ?");
        $stmt1->bind_param("i", $nid);
        $stmt1->execute();



        $result1 = $stmt1->get_result();
        if($result1->num_rows > 0){
          $row1 = $result1->fetch_assoc();
          $nameu = $row1['fullname'];
          $emailu = $row1['email'];
        }



        $con2 = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect");

        if(isset($_POST['fdate'])) 
        {

          $date = $_POST['fdate']; 
          $contact = $_POST['ftime'];
          // $message = $_POST['fmessage']; 
          // $contact = 
          // $time = 0; 
          // echo hello; 
          // $newDate = $date->format('Y-m-d'); 

          $con3 = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
          $stmt3 = $con3->prepare("SELECT * FROM hello where id = ? AND date = ?");
          $stmt3->bind_param("is", $ID, $date);
          $stmt3->execute();

          $result3 = $stmt3->get_result();
          $npatient = $result3->num_rows; 

          $avgtime = 20;
          $tmin = 60;
          $mint = ($npatient * $avgtime) % $tmin;
          if($mint<10) $mint = 10; 
          $hour = ($startTime + ($npatient * $avgtime) / $tmin) %24;
          mysqli_query($con2, "INSERT INTO hello (id, userid, date, contact, hour, minute, doctorname, address, hospital, picture) VALUES ('$ID', '$nid', '$date', '$contact', '$hour', '$mint','$name', '$add', '$hospital' , '$pic') ") or die("Error Occurred");
          
          // 
        // header('Location: ../Dashboard2/index.php');

        date_default_timezone_set('Asia/Dhaka'); 
        $currdate= date('Y-m-d');
        if($currdate > $date){
          $okay = 0; 
        }
        else{
          $okay = 1; 
        }

        }
        else 
        {
          // header('Location: www.google.com'); 
          
        }

    ?>







<body>
    <style>
      
        /* ===== =====  Poppins Google Font  ===== =====  */
@import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");

/* ===== =====>>  Universal Selector  <<===== =====  */
* {
  padding: 0;
  margin: 0;
  font-size: 14px;
  font-family: sans-serif;
  list-style: none;
  text-decoration: none;
  font-family: "Poppins", sans-serif;
}

/* ===== =====>>  Body Font Size  <<===== =====  */
html {
  font-size: 10px;
}

/* ===== =====>> Css Variables  <<===== =====  */
:root {
  /* =====>>  Font Color  <<===== */
  --f1-color: #fff;
  --f2-color: #000;
  --f3-color: rgba(0, 0, 0, 0.8);
  --f4-color: rgba(0, 0, 0, 0.6);
  --f5-color: #0099cc;
  --f6-color: #88cee6;

  /* =====>>  Background Color  <<===== */
  --bg1-color: #fff;
  --bg2-color: #000;
  --bg3-color: #33ccff;
  --bg4-color: #33cc33;
  --bg5-color: #0099cc;
  --bg6-color: rgba(0, 0, 0, 0.4);
  --bg7-color: rgba(0, 0, 0, 0.2);
  --glass-bg: linear-gradient(
    to right bottom,
    rgba(255, 255, 255, 0.5),
    rgba(255, 255, 255, 0.3)
  );
  --C-lg-bg: linear-gradient(45deg, #ff3399, #ff9933);

  /* ===== =====>>  Font Size  <<===== =====  */
  --xxxl-fs: 2.2rem;
  --xxl-fs: 1.8rem;
  --xl-fs: 1.6rem;
  --l-fs: 1.4rem;
  --m-fs: 1.2rem;
  --s-fs: 1.1rem;
  --xs-fs: 1rem;

  /* =====>>  Margin  <<===== */
  --m-2-5: 2.5rem;
  --m-1-8: 1.8rem;
  --m-1-5: 1.5rem;
  --m-0-6: 0.6rem;
  --m-0-5: 0.5rem;
  --m-0-3: 0.3rem;

  /* =====>>  Padding  <<===== */
  --p-2-5: 2.5rem;
  --p-1-5: 1.5rem;
  --p-1-0: 1rem;
  --p-0-8: 0.8rem;
  --p-0-5: 0.5rem;
  --p-0-4: 0.4rem;
  --p-0-3: 0.3rem;
}

/* ===== =====>>  Body Css  <<===== =====  */
body {
  display: flex;
  align-items: center;
  min-height: 100vh;
  width: 108vw;
  margin-left: 50px;
  overflow: hidden;
}

/* ===== =====>>  Body Main-Background Css  <<===== =====  */
.main_bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(back-image.png);
  background-position: left;
  z-index: -1;
  filter: blur(10px);
}

/* ===== =====>>  Main-Container Css  <<===== =====  */
.container {
  position: relative;
  display: grid;
  grid-template-columns: 1.2fr 2fr;
  grid-template-areas:
    "header header"
    "userProfile userDetails"
    "work_skills timeline_about"
    "work_skills timeline_about";
  width: 88%;
  height: 85vh;
  background: var(--glass-bg);
  padding: var(--p-1-5);
  box-shadow: 0 0 5px rgba(255, 255, 255, 0.1), 0 0 25px rgba(0, 0, 0, .3);
  border-radius: 30px;
  margin-top:75px;
  margin-left:-17px;
}

/* ===== =====>>  Container Cards Grid-Area Css Start  <<===== =====  */
header {
  grid-area: header;
}

.userProfile {
  grid-area: userProfile;
}

.userDetails {
  grid-area: userDetails;
}

.work_skills {
  grid-area: work_skills;
}

.timeline_about {
  grid-area: timeline_about;
}

/* ===== =====>>  Container Cards Css  <<===== =====  */
.container .card {
  background: var(--glass-bg);
  backdrop-filter: blur(3rem);
  /* border-radius: 0.5rem; */
  box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
  padding: var(--p-1-5);
  border-radius:30px;
  margin-top:-25px;
}

/* ===== =====>>  Container Header/Navbar Css  <<===== =====  */
.container header {
  padding: 0 var(--p-2-5);
}

.container header .brandLogo {
  display: flex;
  align-items: center;
}

.container header .brandLogo figure img {
  width: 3.5rem;
  height: 3.5rem;
}

.container header .brandLogo span {
  font-size: var(--xl-fs);
  font-weight: 700;
  margin-left: var(--m-0-5);
}

/* ===== =====>>  User Main-Profile Css Start  <<===== ===== */
.container .userProfile {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0;
  background: none;
  backdrop-filter: none;
  box-shadow: none;
}

.container .userProfile .profile figure img {
  width: 500rem;
  height: 500rem;
  border-radius: 50%;
  background: url(back-image.png);
}

/* ===== =====>>  Work & Skills Css Start  <<===== ===== */
.container .work_skills {
  padding: var(--p-1-5);
}

.work_skills .work .heading,
.work_skills .skills .heading {
  position: relative;
  font-size: 1.4rem;
  color: rgba(0, 0, 0, 0.6);
  text-transform: uppercase;
  margin-bottom: var(--m-1-5);
}

.work_skills .work .heading::before,
.work_skills .skills .heading::before {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  height: 0.1rem;
  width: 88%;
  background: var(--bg6-color);
}

.work_skills .work .primary,
.work_skills .work .secondary {
  position: relative;
}

.work_skills .work .primary h1,
.work_skills .work .secondary h1 {
  font-size: 3rem;
  color: var(--f3-color);
  margin-bottom: var(--m-0-6);
}

.work_skills .work .primary span,
.work_skills .work .secondary span {
  position: absolute;
  top: 0;
  right: 3rem;
  font-weight: 700;
  font-size: 1.5rem;
  color: var(--f5-color);
  background: #e6f2ff;
  padding: var(--p-0-4) var(--p-1-0);
  border-radius: 0.4rem;
}

.work_skills .work .primary p,
.work_skills .work .secondary p {
  margin-bottom: var(--m-1-8);
  font-size: 1.7rem;
  color: rgba(0, 0, 0, 0.6);
  line-height: 1.6rem;
}

/* =====>>  Skills Bars Css  <<===== */
.work_skills .skills ul li {
  position: relative;
  font-size: var(--m-fs);
  line-height: 1.8rem;
  margin: var(--m-0-5);
  color: var(--f2-color);
  font-weight: 500;
}

.work_skills .skills ul li::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  height: 0.2rem;
  background: var(--bg3-color);
  animation: skills 8s linear infinite;
  animation-delay: calc(-2s * var(--i));
}

@keyframes skills {
  0% {
    width: 50%;
    filter: hue-rotate(180deg);
  }

  50% {
    width: 0;
  }

  100% {
    width: 50%;
    filter: hue-rotate(0);
  }
}

/* ===== =====>>  User Details Css Start  <<===== ===== */
.userDetails {
  position: relative;
  padding: var(--p-1-5) var(--p-2-5);
}

.userDetails .userName h1 {
  font-size: 2.7rem;
}

.userDetails .userName .map {
  position: absolute;
  top: 2.5rem;
  left: 20rem;
  display: flex;
  justify-content: center;
  align-items: center;
}

.userDetails .userName .map .ri {
  margin-right: var(--m-0-3);
  font-size: var(--m-fs);
}

.userDetails .userName .map span {
  font-size: var(--s-fs);
  color: var(--f3-color);
  font-weight: 700;
}

.userDetails .userName p {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--f5-color);
  margin-bottom: var(--m-1-8);
}

.userDetails .rank {
  position: relative;
  margin-bottom: var(--m-1-8);
}

.userDetails .rank .heading {
  font-size: 1.5rem;
  color: var(--f4-color);
  text-transform: uppercase;
  margin-bottom: var(--m-0-6);
}

.userDetails .rank span {
  font-size: var(--xxl-fs);
  font-weight: 700;
}

.userDetails .rank .rating {
  position: absolute;
  top: 2.7rem;
  left: 3.5rem;
}

.userDetails .rank .rating .rate {
  color: #FFFF99;
  font-size: var(--l-fs);
}

.userDetails .rank .rating .underrate {
  color: var(--f6-color);
}

.userDetails .btns ul,
.userDetails .btns ul li {
  display: flex;
  align-items: center;
}

.userDetails .btns ul li {
  margin-right: var(--m-2-5);
  border-radius: 0.5rem;
}

.userDetails .btns ul li .ri {
  margin-right: var(--m-0-5);
  font-size: var(--xl-fs);
}

.userDetails .btns ul li a {
  font-size: var(--l-fs);
  color: var(--f2-color);
  font-weight: 500;
}

.userDetails .btns ul .active {
  background: #e6f2ff;
  padding: var(--p-0-5) var(--p-1-5);
}

.userDetails .btns ul .active a,
.userDetails .btns ul .active .ri {
  color: var(--f5-color);
}

/* ===== =====>>  Timeline & About Css Start  <<===== ===== */
.timeline_about {
  padding: var(--p-2-5);
}

.timeline_about .tabs ul {
  position: relative;
  display: flex;
  align-items: center;
  margin-bottom: var(--m-2-5);
}

.timeline_about .tabs ul::before {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 1px;
  background: var(--bg7-color);
}

.timeline_about .tabs ul li {
  position: relative;
  display: flex;
  align-items: center;
  margin-right: var(--m-2-5);
  padding-bottom: var(--p-0-8);
  cursor: pointer;
}

.timeline_about .tabs ul li span {
  font-size: var(--l-fs);
  font-weight: 500;
}

.timeline_about .tabs ul li .ri {
  margin-right: var(--m-0-5);
}

.timeline_about .tabs ul .active::before {
  content: "";
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: var(--bg5-color);
}

.timeline_about .contact_info .heading,
.timeline_about .basic_info .heading {
  font-size: var(--xs-fs);
  color: var(--f4-color);
  text-transform: uppercase;
  margin-bottom: var(--m-1-5);
}

.timeline_about .contact_info ul,
.timeline_about .basic_info ul {
  margin-bottom: var(--m-1-5);
}

.timeline_about .contact_info ul li,
.timeline_about .basic_info ul li {
  display: flex;
  margin: var(--m-0-5) 0;
}

.timeline_about .contact_info ul li h1,
.timeline_about .basic_info ul li h1 {
  font-weight: 500;
  font-size: var(--m-fs);
  min-width: 12rem;
}

.timeline_about .contact_info ul li span,
.timeline_about .basic_info ul li span {
  font-size: var(--m-fs);
}

.timeline_about .contact_info ul .phone span,
.timeline_about .contact_info ul .email span,
.timeline_about .contact_info ul .site span {
  color: var(--f5-color);
}




.btn{
  display: inline-block;
  text-decoration: none;
  padding: 10px 25px;
  color: #fff;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  font-size: 18px;
  border-radius: 30px;
  border-color: transparent;
  border-top-right-radius: 0;
  transition: 0.5s;
  margin-left: 5px;
  margin-top: 25px;
  cursor: pointer;
  width: 175px;
  text-align:center;
  margin-right:40px;
  /* margin-bottom: 75px; */
}

.btn:hover{
  border-top-right-radius: 30px;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  transform: scale(1.1);

}





.search-form {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10000;
  transform: translateY(-110%);
  transition: 0.5s;
}
.search-form.active {
  transform: translateY(0%);
}

.search-form2 {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10000;
  transform: translateY(-110%);
  transition: 0.5s;
}
.search-form2.active {
  transform: translateY(0%);
}



.search-form #close-search {
  position: absolute;
  top: 2rem;
  right: 2.5rem;
  cursor: pointer;
  color: #fff;
  font-size: 6rem;
  transition: 0.5s;

}

.search-form2 #close-search2 {
  position: absolute;
  top: 2rem;
  right: 2.5rem;
  cursor: pointer;
  color: #fff;
  font-size: 6rem;
  transition: 0.5s;

}



.search-form #close-search:hover {
  color: #ff3c78;
}

.search-form2 #close-search2:hover {
  color: #ff3c78;
}

.search-form form {
  width: 70rem;
  margin: 2rem;
  padding-bottom: 2rem;
  /* border-bottom: 0.2rem solid #fff; */
  display: flex;
  align-items: center;
}

.search-form2 form {
  width: 70rem;
  margin: 2rem;
  padding-bottom: 2rem;
  /* border-bottom: 0.2rem solid #fff; */
  display: flex;
  align-items: center;
}


.search-form form input {
  width: 100%;
  font-size: 2rem;
  color: #fff;
  outline: none;
  border: transparent;
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

.sbox {

  /* height: 60rem; */
  font-family: "Poppins",sans-serif;
  width: 60rem;
  border-radius: 30px;
  background-color: rgba(0, 0, 0, 0.7);
  height: 680px;
  margin-left:80px;
}


.sbox .btn{
  display: inline-block;
  text-decoration: none;

  color: #fff;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  font-size: 20px;
  border-radius: 30px;
  border-color: transparent;
  border-top-right-radius: 0;
  transition: 0.5s;
  margin-left: 185px;
  margin-top: 40px;
  margin-bottom: 75px;
  margin-right: 0px; 
  height:30px;
}

.sbox .btn:hover{
  border-top-right-radius: 30px;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  transform: scale(1.1);

}

.sbox div {
  border-bottom: 0.2rem solid white;
  margin-left: 90px;
  margin-right: 90px;
  padding-top: 30px;
}

.sbox h1{
  font-size: 26px;
  text-align: center;
  padding-top: 75px;
  padding-bottom: 10px;
  color: #ff3c78;
}

.sbox h3 {
  font-family: "Poppins",sans-serif;
  color: #ff3c78;
  font-size: large;
  padding-bottom: 5px;
}

input::-webkit-calendar-picker-indicator {
  filter: invert(1);
  cursor: pointer;
}

.submit-btn{
  /* background: #ff3c78; */
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  columns: #fff;
  border: none;
  outline: none;
  color: #fff;
  padding: 12px 45px;
  border-radius: 30px;
  border-top-right-radius: 0;
  font-size: 0.85em;
  font-weight: 500;
  /* margin-top: 5px; */
  cursor: pointer;
  text-align: center;
  margin-left: 100px;
  font-size: 18px;
}







.submit-btn:hover {
  border-top-right-radius: 30px;
  background-image: linear-gradient(45deg, #df4881, #c430d7);
}




button {
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  padding: 14px 22px;
  border: none;
  background: #4070f4;
  border-radius: 6px;
  cursor: pointer;
}
button:hover {
  background-color: #265df2;
} 

.modal-box{
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  /* margin-bottom: -50px; */
}

.da {
  width:0px;
  height:0px;
  /* display:none; */
  /* opacity: 0; */
}



.da.active .show-modal {
  display: none;
}
.overlay {
  /* position: fixed; */
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.3);
  opacity: 0;
  pointer-events: none;
}

.da.active .overlay {
  opacity: 1;
  pointer-events: auto;
}

.modal-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 330px;
  height: 280px;
  padding: 30px 20px;
  border-radius: 30px;
  background-color: #fff;
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease;
  transform: translate(-132%, 0%) scale(1.2);
}

.da.active .modal-box {
  opacity: 1;
  pointer-events: auto;
  transform: translate(-132%, -58%) scale(1);
  
}
.modal-box i {
  font-size: 70px;
  color: #4070f4;
}
.modal-box h2 {
  margin-top: 20px;
  font-size: 25px;
  font-weight: 500;
  color: #333;
}
.modal-box h3 {
  font-size: 16px;
  font-weight: 400;
  color: #333;
  text-align: center;
}
.modal-box .buttons {
  margin-top: 25px;
}
.modal-box button {
  font-size: 14px;
  padding: 6px 12px;
  margin: 0 10px;
}


#sajid  {
  /* background: #ff3c78; */
  background-image: linear-gradient(45deg, #df4881, #c430d7);
  columns: #fff;
  border: none;
  outline: none;
  color: #fff;
  width: 180px;
  height: 55px;
  border-radius: 30px;
  border-top-right-radius: 0;
  font-size: 0.85em;
  font-weight: 500;
  /* margin-top: 10px; */
  cursor: pointer;
  text-align: center;
  margin-left: 35px;
  /* margin-bottom: -200px */
  font-size: 18px;
}




.sheader {
  position:absolute;
  top: 0;
  left: 0;
  right: 0;
  padding: 2rem 9%;
  z-index: 1000;
  display: flex;
  align-items: center;
  height: 40px;

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

  margin-right: 13px;

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
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 100000;
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
  /* border-bottom: 0.2rem solid #fff; */
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





.search-form {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.8);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 10000;
  transform: translateY(-110%);
  transition: 0.5s;
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
  transition: 0.5s;

}


.search-form #close-search:hover {
  color: #ff3c78;
}

.search-form form {
  width: 70rem;
  margin: 2rem;
  padding-bottom: 2rem;
  /* border-bottom: 0.2rem solid #fff; */
  display: flex;
  align-items: center;
}
.search-form form input {
  width: 100%;
  font-size: 2rem;
  color: #fff;
  outline: none;
  border: transparent;
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

html {
  font-size:62.5%;
}


.sub-menu-wrap {
  position: absolute;
  top: 80%;
  right: 8%; 
  width: 320px;
  max-height: 0px;
  overflow: hidden;
  transition: max-height 0.5s;
  /* font-size:62.5%; */
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
  padding-top: 20px;
  cursor: pointer;
}

.user-info img{
  width: 60px;
  border-radius: 50%;
  margin-right: 15px;
  cursor: pointer;
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
        <span style="font-size: 28px; font-weight: 500; padding-right: 80px;">&nbsp;doctorSP<i class="fa-solid fa-location-dot" style="padding-left: 2px; padding-right: 2px; color: #c430d7; font-size: 29px"></i>T</span>
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
      <div id="search-btn2" class="fas fa-search"></div>
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

      
    
      <!-- <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
          <input type="search" name="" placeholder="search here.." id="search-box">
          <label for="search-box" class="fas fa-search"></label>
        </form>
      </div> -->
  
      <script src="script3.js"></script>
   




    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg"></span>



    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">

        <!-- ===== ===== Header/Navbar ===== ===== -->
        <!-- <header>
            <div class="brandLogo">
                <span>DoctorSpot.</span>
            </div>
        </header> -->


        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="<?php echo $pic; ?>.png" alt="profile" style = "width:350px; height:350px;"></figure>
            </div>
        </section>


        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <section class="work_skills card">

            <!-- ===== ===== Work Contaienr ===== ===== -->
            <div class="work">
                <h1 class="heading">work</h1>
                <div class="primary">
                    <h1><?php echo $hospital; ?></h1>
                    <span>Primary</span>
                    <p>West Panthapath, Dhaka 1205; <br> 18F, Bir Uttam Qazi Nuruzzaman Sarak</p>
                </div>

                <div class="secondary">
                    <h1><?php echo $second; ?></h1>
                    <span>Secondary</span>
                    <p>Road No. 3, House No. 32 <br> Shyamoli, Dhaka-1207</p>
                </div>
            </div>

            <!-- ===== ===== Skills Contaienr ===== ===== -->
            <div class="skills">
                <h1 class="heading">Skills</h1>
                <ul>
                    <li style="--i:0">Experience</li>
                    <li style="--i:1">User staisfaction</li>
                    <li style="--i:2">Orthopedic</li>
                </ul>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <?php if(isset($name)) : ?>
                <h1 class="name"><?php echo $name; ?></h1>
                <?php endif; ?>
                <div class="map">
                    <!-- <i class="fas fa-map-marker-alt ri"></i> -->
                    <!-- <?php if(isset($loc)) : ?>
                    <span><?php echo $loc; ?>, Bangladesh</span>
                    <?php endif; ?> -->
                </div>
                <?php if(isset($dept)) : ?>
                <p><?php echo $dept; ?> Specialist</p>
                <?php endif; ?>
            </div>

            <div class="rank">
                <h1 class="heading">Ratings</h1>
                <!-- <span>8.6</span> -->
                <span><?php echo $rat; ?></span>
                <div class="rating">
                    <!-- <i class="fa fa-star rate"></i>
                    <i class="fa fa-star rate"></i>
                    <i class="fa fa-star rate"></i>
                    <i class="fa fa-star rate"></i>
                    <i class="fa fa-star rate underrate"></i> -->
                    <?php echo printStars($rat); ?>
                </div>
            </div>

            <div class="btns">
                <ul>
                    <h2 style = "font-size: 20px">Fees: <?php echo $row['fees']; ?> BDT<h2>
                </ul>
            </div>

            <a class="btn anim" id="search-btn">Make Appointment</a>  
            
            <a class="btn anim" id="search-btn2" href="../review/index.php?id=<?php echo $ID; ?>" >Give a Review</a>  

        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="fas fa-flag ri"></i>
                        <span>About</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Contact Information</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Phone:</h1>
                        <span class="info"><?php echo $phn; ?></span>
                    </li>

                    <li class="address">
                        <h1 class="label">Address:</h1>
                        <span class="info">247/E <br> <?php echo $add; ?></span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info"><?php echo $email; ?></span>
                    </li>

                    <li class="site">
                        <h1 class="label">Site:</h1>
                        <span class="info">www.ramsey.com</span>
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Birthday:</h1>
                        <span class="info">April 08, 2000</span>
                    </li>

                    <li class="sex">
                        <h1 class="label">Gender:</h1>
                        <span class="info">Male</span>
                    </li>
                </ul>
            </div>
        </section>
        
    </div>

    <!-- <div class="icons">
        <div id="search-btn" class="fas fa-search"></div>
    </div> -->
  




    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="" method = "post">
          <!-- <input type="search" name="" placeholder="search here.." id="search-box">
          <label for="search-box" class="fas fa-search"></label> -->

            <div class="sbox" id="king">
                <h1>Appointment Form</h1>
                <div>
                    <h3>Name :</h3>
                    <input type="text" name="fname" value="<?php echo $nameu; ?>" id="fname">
                </div>

                <div>
                    <h3>Email :</h3>
                    <input type="email" name="femail" value="<?php echo $emailu; ?>" id="femail">
                </div>

                <div>
                    <h3>Select Date :</h3>
                    <input type="date" name="fdate" id="fdate" value="2023-08-07">

                    
                </div>

                <div>
                    <h3>Contact :</h3>
                    <input type="text" name="ftime" id="ftime">
                    <script>
                      // Get the date input element
                      const datePicker = document.getElementById('fdate');

                      // Get today's date
                      const today = new Date().toISOString().split('T')[0];

                      // Set the minimum date for the date input to today
                      datePicker.min = today;
                    </script>
                </div>

                <!-- <div style="border-bottom: 0px;">
                    <h3 style="padding-bottom: 8px;">Message :</h3>
                    <input placeholder="Message (optional)" id="fmessage" name="fmessage" cols="57.5" rows="2" style="border-radius: 10px; background-color: rgba(255, 255, 255, 0.2); color: white;">
                </div> -->
          
                <a class="btn anim show-modal" onclick="toggleDiv()">Submit</a> 



                <!-- <input class="btn anim" type ="submit" >Submit</a>   -->
                

                
            </div>

            <div class="da" >
                  <!-- <button class="btn anim show-modal">Show Modal</button> -->

                  <!-- <span class="overlay"></span> -->

                  <div class="modal-box">
                    <i class="fa-regular fa-circle-check" style="color: #ff3c78;"></i>
                    <h2>Submitted</h2>
                    <h3 id = "mostak">You have sucessfully made an appointment</h3>
                    <input id="sajid" class="btn anim close-btn" name="sub" type="submit" value="Dismiss"> 
                    <!-- <a href="dummy.php" class="btn anim" id = "khela" onclick = "pst()" type ="submit">Apply</a> -->


                    <!-- <div class="buttons">

                    </div> -->
                  </div>
                </div>


        </form>
      </div>

    <script src="profilescript.js"></script>

<!-- 
    <script>
      const section = document.querySelector(".da"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

        const div = document.getElementById('king');

        

      showBtn.addEventListener("click", () => 
          section.classList.add("active"),
          div.style.opacity = '0'
      );
      
      overlay.addEventListener("click", () =>
        section.classList.remove("active")
      );

      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")

      );
    </script> -->

    <script>
        function toggleDiv() {
            const div = document.getElementById('king');
            const section = document.querySelector(".da"),
            overlay = document.querySelector(".overlay"),
            showBtn = document.querySelector(".show-modal"),
            closeBtn = document.querySelector(".close-btn");

              section.classList.add("active");
              div.style.opacity = '0';
        }
    </script>

            
</body>

</html>


