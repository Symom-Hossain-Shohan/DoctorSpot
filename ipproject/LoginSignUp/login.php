
<?php

include("php/config.php");
  if(isset($_POST['sub'])){
    $email = $_POST['signUpmail']; 
    $fullname = $_POST['fullname']; 
    $password = $_POST['signUppass'];
    
    
    //verifying the unique email

    $verify_query = mysqli_query($con, "select email from user where email = '$email'"); 

    if(mysqli_num_rows($verify_query)!=0)
    {
      echo "<div class = 'message'>
                <p> This email is used, Try another one Please! </p>
            </div> <br>";
      // echo "<a href = 'javascript:self.history.back()'> <button class = 'btn'> Go Back </button>"; 
    }
    else 
    {
      mysqli_query($con,"INSERT INTO user(email,fullname,password) VALUES('$email','$fullname','$password')") or die("Erroe Occured");

      echo "<div class='message'>
              <p>Registration successfully!</p>
             </div> <br>";
      echo "<a href='index.php'><button class='btn'>Login Now</button>";
    }

  }

?>
