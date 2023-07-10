<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:user_page.php');
   

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span>
         <?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="index.php" class="btn">Go To Website</a>
      <a href="pickup.html" class="btn">Request For Pickup</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>