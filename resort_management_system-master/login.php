<?php
include "include/header.php";
include "connect.php";
?>

<link rel="stylesheet" href="css/style.css">

<div id="loginbox">
   <form id="loginpage" action="login.php" method="post">
      <h1 style="font-style: normal;">Login</h1>

         <input name="email" type="text" class="input"  placeholder="Email" required/>
         <br>
         <input name="password" type="password" class="input"  placeholder="Password" required/>
         <br>
         <input name="login" type="submit" class="loginbutton" value="SIGN IN" />

   </form>
   <?php

      if(isset($_POST['login'])){
         //echo '<script type="text/javascript"> alert("Logged in xD !!")</script>';
         $email=$_POST['email'];
         $password=$_POST['password'];

         $query = "SELECT * FROM login WHERE email = '$email' AND password = md5('$password')";

         $query_run = mysqli_query($con,$query);

         if (mysqli_num_rows ($query_run) > 0) {
            //vaild
            $_SESSION['email']=$email;
            header('location:managerview.php');
         }
         else {
            //Invaild
            echo '<script type="text/javascript"> alert("Invaild User")</script>';
         }


      }

mysqli_close($con);

    ?>


   
</div>
<style>
 body {
      width: 100%;
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(img/BG.jpg) ;
      background-size: cover;
      background-position: center;
      position: sticky;

   }
</style>