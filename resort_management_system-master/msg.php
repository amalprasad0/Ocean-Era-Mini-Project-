<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
   <title>ADMIN</title>
</head>
<body>
   <header>
      <div class="navbar">
         <nav>
            <ul>
               <li id="title"><a href="Login.php">Logout</a></li>
               <li><a href="index.php"> Home </a></li>
               <li><a href="mreview.php"> Review </a></li>
               <li><a href="msg.php"> Messages </a></li>
               <li><a href="mroomview.php"> Rooms </a></li>
               <li><a href="managerview.php">Requested Rooms</a></li>
               <li><a href="assignroom.php"> Assign Room </a></li>
            </ul>
         </nav>

      </div>
   </header>


<?php
   include_once "connect.php";

   if(!mysqli_connect_errno())
   {
     $reviews = mysqli_query($con, "SELECT * FROM message");
     mysqli_close($con);
   }
  ?>

    <center><h1>Messages</h1></center>

    <table>
      <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Messages</th>

      </thead>

      <tbody>
         <?php

          foreach($reviews as $review)
          { ?>
            <tr>
              <td> <?php echo $review['coid'];?></td>
              <td> <?php echo $review['name'];?></td>
              <td> <?php echo $review['email'];?></td>
              <td> <?php echo $review['message'];?></td>
            </tr>
            <?php

          };

         ?>
