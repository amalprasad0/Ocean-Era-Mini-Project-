<?php

include "include/header.php";
include "connect.php";
 ?>

   <link rel="stylesheet" href="css/style.css">
<div id="regbox" class="mb-5">

   <form id="registrationpage" action="registartion.php" method="post">
      <h1 style="font-style:normal">Registration</h1>

         <input type="text" name="fname" class="input ml-5" placeholder="First Name" />
         <br>
         <input type="text" name="lname" class="input ml-5" placeholder="Last Name" required/>
         <br>
         <input type="text" name="email" class="input ml-5" placeholder="Email" required/>
         <br>
         <input type="password" name="password" class="input ml-5" placeholder="Password" required/>
         <br>
         <input type="password" name="cpassword" class="input ml-5" placeholder="Re-enter Password" required/>
         <br>
         <input type="submit" name="signup" class="Registrationbutton ml-4" value="Submit" />

   </form>

   <?php

   if (isset($_POST['signup'])) {
      //echo '<script type="text/javascript"> alert("Register button click")</script>';

      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];

      if ($password == $cpassword) {
         $query = "SELECT * FROM manager WHERE email = '$email' ";

         $query_run = mysqli_query ($con,$query);

         if (mysqli_num_rows($query_run)>0) {
            //all ready a user
            echo '<script type="text/javascript"> alert("User Exists !!")</script>';
         }
         else {
            $query1 = "INSERT INTO manager (First_name,Last_name,email,password)
                     VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".md5($_POST['password'])."')";
            $query2 =  "INSERT INTO login (email,password) VALUES ('".$_POST['email']."','".md5($_POST['password'])."')";

            $query_run = mysqli_query ($con,$query1) && mysqli_query ($con,$query2);
            if ($query_run) {
               echo '<script type="text/javascript"> alert("Member Add Successfully !!")</script>';
            }
            else {
               echo '<script type="text/javascript"> alert("!! Error !!")</script>';
            }


         }

      }
      else {
         echo '<script type="text/javascript"> alert("Please Enter Values !!")</script>';
      }
   }

mysqli_close($con);




if (isset($_POST['signup']))
    {   
    ?>
<script type="text/javascript">
window.location = "login.php";
</script>      
    <?php
    }

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

</body>
</html>

