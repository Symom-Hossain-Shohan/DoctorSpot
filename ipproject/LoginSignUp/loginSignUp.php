
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style/loginstyle.css">
  <!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>

<?php

  
  include("php/config.php");
  if(isset($_POST['signUpmail'])){
    $email = $_POST['signUpmail']; 
    $fullname = $_POST['fullnam']; 
    $password = $_POST['signUpPass'];

    // Verify if the email already exists in the database
    $verify_query = mysqli_query($con, "SELECT email FROM user WHERE email = '$email'"); 

    if(mysqli_num_rows($verify_query) != 0) {
      //echo "<script>document.getElementById('passwordError').textContent = 'This ';</script>";
      //"<script> event.preventDefault() </script>"; 
      // echo $jsCode; 
      header("Location: ../LoginSignUp/alreadyexists.php");
      
    } else {
      mysqli_query($con, "INSERT INTO user (email, fullname, password) VALUES ('$email', '$fullname', '$password')") or die("Error Occurred");

      //echo "<script>document.getElementById('passwordError').textContent = 'Registration successful!';</script>";

    }
  }

  


  // include("php/config.php");
  // $eemail = $_POST['mail'];
  // $ppassword = $_POST['pas'];

  // $query = "SELECT * FROM users WHERE email = ? AND password = ?";
  // $statement = $mysqli->prepare($query);
  // $statement->bind_param('ss', $eemail, $ppassword);
  // $statement->execute();
  
  // $result = $statement->get_result();
  // if($result->num_rows === 1){
  //   echo "Password and email match!";
  //   header("Location: hhh.html");
  // }else{
  //   echo "Invalid email or password.";
  // }

  // $statement->close();
  // $mysqli->close();
?>


<?php
  include("php/config.php");

session_start();


if (isset($_POST['mail'])) {
    $eemail = $_POST['mail'];
    $ppassword = $_POST['pas'];
    
  
    $query = "SELECT * FROM user WHERE email = ? AND password = ?";
    $statement = $con->prepare($query);
    $statement->bind_param('ss', $eemail, $ppassword);
    $statement->execute();
    $result = $statement->get_result();
  
    if ($result->num_rows === 1) {
      echo "Password and email match!";
      $row = $result->fetch_assoc();
      $id = $row['id'];
      $_SESSION['logged_in'] = true; 
      $_SESSION['id'] = $id; 
      // $id = 8; 
      // header("Location: homepage.php?id=" .$id);
      header("Location: homepage.php");

      die;
    } else {
      // echo "<script>document.getElementById('passwrdError').textContent = 'Incorrect'; </script>";
      // echo "<script>alert('Alert message');</script>";
      // echo "Invalid email or password.";
      header("Location: ../LoginSignUp/forget.php");
    }
  }

?>



<div class="form-container sign-in-form">
  <div class="form-box sign-in-box">
    <h2>Login</h2>
    <form action="" method="post">
      <div class="field">
        <i class="uil uil-at"></i>
        <input type="email" name ="mail" placeholder="Email Id" required id="mail" oninput="check()">
      </div>
      <div>
        <p id="passwrdError" class="error-message" style="color: red;"></p>
      </div>
      <div class="field">
        <i class="uli uil-lock-alt"></i>
        <input class="password-input" name = "pas" type="password" placeholder="Password" required minlength="8" maxlength="16">
        <div class="eye-btn">
          <i class="uli uil-eye-slash"></i>
        </div>
      </div>
      <div class="forgot-link field">
        <!-- <a href="forget.php">Forgot Password?</a> -->
      </div>
      <input class="submit-btn" type="submit" value="Login">
    </form>
    <div class="login-options">
      <p class="text">Or, login with...</p>
      <div class="other-logins">
        <a href=""><img src="images/google.png" alt=""></a>
        <a href=""><img src="images/facebook.png" alt=""></a>
        <a href=""><img src="images/apple.png" alt=""></a>
      </div>
    </div>
  </div>
  <div class="imgBox sign-in-imgBox">
    <div class="sliding-link">
      <p>Don't have an account?</p>
      <span class="sign-up-btn">Sign up</span>
    </div>
    <img src="images/signin-img.png" alt="">
  </div>
</div>

<div class="form-container sign-up-form">
  <div class="imgBox sign-up-imgBox">
    <div class="sliding-link">
      <p>Already a member?</p>
      <span class="sign-in-btn">Sign in</span>
    </div>
    <img src="images/signup-img.png" alt="">
  </div>
  <div class="form-box sign-up-box">
    <div class="ad">
      <h2>Sign up</h2>
      <div class="login-options">
        <div class="other-logins">
          <a href=""><img src="images/google.png" alt=""></a>
          <a href=""><img src="images/facebook.png" alt=""></a>
          <a href=""><img src="images/apple.png" alt=""></a>
        </div>
        <p class="text">Or, sign up with email...</p>
      </div>
      <form action="loginSignUp.php" onsubmit="validateSignUpForm(event)" method="post">
        <div class="field">
          <i class="uil uil-at"></i>
          <input type="email" name="signUpmail" id="email" placeholder="Email Id" required>
        </div>
        <div>
          <p id="passwordError" class="error-message" style="color: red;"></p>
        </div>
        <div class="field">
          <i class="uil uil-user"></i>
          <input type="text" name="fullnam" id="fullName" placeholder="Full name" required>
        </div>
        <div class="field">
          <i class="uli uil-lock-alt"></i>
          <input id="password" name="signUpPass" type="password" placeholder="Password" required>
        </div>
        <div class="field">
          <i class="uli uil-lock-access"></i>
          <input id="confirmPassword" type="password" placeholder="Confirm password" required>
        </div>
        <p id="passwordMatchError" class="error-message" style="color: red;"></p>
        <input class="submit-btn BTN" name="sub" type="submit" value="Sign up">
      </form>
    </div>
  </div>
</div>

<script>
  // Rest of your JavaScript code
  const textInputs = document.querySelectorAll("input");

    textInputs.forEach(textInputs => {
      textInputs.addEventListener("focus", () => {
        let parent = textInputs.parentNode;
        parent.classList.add("active");
      });

      textInputs.addEventListener("blur", () => {
        let parent = textInputs.parentNode;
        parent.classList.remove("active");
      });

    });

    //password show/hide btn

    const passwordInput = document.querySelector(".password-input");
    const eyeBtn = document.querySelector(".eye-btn");

    eyeBtn.addEventListener("click", () => {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeBtn.innerHTML = "<i class='uli uil-eye'></i>"
      }
      else {
        passwordInput.type = "password";
        eyeBtn.innerHTML = "<i class='uli uil-eye-slash'></i>"
      }
    });

    //switching between sign-in form and sign-up form

    const signUpBtn = document.querySelector(".sign-up-btn"); 
    const signInBtn = document.querySelector(".sign-in-btn"); 
    const signUpForm = document.querySelector(".sign-up-form"); 
    const signInForm = document.querySelector(".sign-in-form"); 
    // const signBtn = document.querySelector(".signUp");
    
    signUpBtn.addEventListener("click", () => {
      signInForm.classList.add("hide"); 
      signUpForm.classList.add("show"); 
      signInForm.classList.remove("show"); 
      // signBtn.classList.add()
    });

    signInBtn.addEventListener("click", () => {
      signInForm.classList.remove("hide"); 
      signUpForm.classList.remove("show"); 
      signInForm.classList.add("show"); 
    });

    function check(){
      //event.preventDefault();
      const emailInput = document.getElementById("mail");
      const passwordError = document.getElementById("passwrdError");

      console.log(emailInput.value);  
      var ok = false; 
      passwordError.textContent = "";

      if (emailInput.value.includes(".com")) {

      }
      else {
        //alert("Invalid Mail"); 
        passwordError.textContent = "Invalid Mail";
        //return;
        ok = true; 
      }
      //if(ok) return; 

      //document.querySelector(".sign-up-form form").submit();

    }


    function validateSignUpForm(event) {
      event.preventDefault();

      const emailInput = document.getElementById("email");
      const fullNameInput = document.getElementById("fullName");
      const passwordInput = document.getElementById("password");
      const confirmPasswordInput = document.getElementById("confirmPassword");
      const passwordMatchError = document.getElementById("passwordMatchError");
      const passwordError = document.getElementById("passwordError");

      passwordError.textContent = "";
      passwordMatchError.textContent = "";



      var ok = false; 
      if (emailInput.value.includes(".com")) {

      }
      else {
        //alert("Invalid Mail"); 
        passwordError.textContent = "Invalid Mail";
        //return;
        ok = true; 
      }

      if (passwordInput.value == "" || passwordInput.value == null) {
        passwordMatchError.textContent = "Enter password";
        //return;
        ok = true; 
      }
      else if (passwordInput.value !== confirmPasswordInput.value) {
        passwordMatchError.textContent = "Passwords do not match.";
        //return;
        ok = true; 
      }




      if(ok) return; 


      // If the passwords match, you can submit the form programmatically
      document.querySelector(".sign-up-form form").submit();
    }

</script>

</body>
</html>
