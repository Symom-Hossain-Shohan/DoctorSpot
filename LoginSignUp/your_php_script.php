<?php
    $con = mysqli_connect("localhost", "root", "", "ipproject") or die("Couldn't connect"); 
    
    $emali = $_POST['emailIn']; 
    $fullname = $_POST['fullname']; 
    $password = $_POST['password']; 

    print .$emali;

    mysqli_query($con, "INSERT INTO user(email, fullname, password) VALUES ('$emali', '$fullname', '$password')"); 

?>