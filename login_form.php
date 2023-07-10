<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:index.html');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="pickup.css">

</head>
<body>
<div class="page-wrapper">	  
    <section id="header">
        <a href="#"><img src="img/LOGO.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="price.html">Price List</a></li>
                <li><a href="contact.html">Contact</a></li>
                
                <li><a href="login_form.php" class="pickup" style="color: green;"><b>Login</b></a></li>
                <li><a href="user_page.php" class="user_page" style="color: red;"><b>Logout</b></a></li>

            </ul>
        </div>
    </section>


   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
      <input type="email" name="email" required placeholder="enter your email">
      
      <input type="password" name="password" required placeholder="enter your password">
      <input  type="submit" name="submit" value="login now" class="form-btn">
      <!-- <button class="form-btn" style="type": "submit";>Login Now</button> -->
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
   </div>
</body>
</html>