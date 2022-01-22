<link rel="stylesheet" href="css/search.css">
<?php
include "include/header.php";
include "connect.php";
?>


<div id="searchbox">
   <form id="spage" action="search.php" method="post">
      <h1 style="font-style:normal" class="ml-4">Search</h1>

         <input name="name" type="text" class="searchinput m-4" autocomplete="off" placeholder="Name"/>
         <br>
         <input name="phone" type="text" class="searchinput m-4" autocomplete="off" placeholder="Phone Number"/>
         <br>
         <input name="search" type="submit" class="searchbutton ml-5" value="Search" />
         <input type="submit" name="delete" class="deletebutton" value="Delete">

</div>
   <?php

      if(isset($_POST['search'])){
         //echo '<script type="text/javascript"> alert("Searched !!")</script>';
         $name = $_POST['name'];
         $phone = $_POST['phone'];
         $querys ="SELECT * FROM `request_room`WHERE name like'%$name%' AND phone = '$phone' ";

$query_run = mysqli_query($con,$querys);

if (mysqli_num_rows ($query_run)> 0) {
   echo "<br/> Result found <br/>";
   while ($result = $query_run -> fetch_assoc()) {
      $name = $result['name'];
      $email = $result['email'];
      $phone = $result['phone'];
      $a_date = $result['a_date'];
      $d_date = $result['d_date'];
      $people = $result['people'];
      $room_type = $result['room_type'];
      echo "<br/> Name: $name <br/> Email : $email <br/> Phone Number: $phone <br/>
      Arrive date: $a_date<br/> Depart date: $d_date<br/> People: $people <br/> Room : $room_type <br/> ";
   }

}else {
   echo "No resutls";
}
   }

    ?>


</form>

<?php

   if(isset($_POST['delete'])){
      //echo '<script type="text/javascript"> alert("Searched !!")</script>';
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $dquery ="DELETE FROM request_room
WHERE request_room.name like'$name' AND request_room.phone = '$phone'";
      $dquery_run = mysqli_query($con,$dquery);
      if ($dquery_run) {
         echo '<script type="text/javascript"> alert("Booking deleted Successfully !!")</script>';
      }
      else {
         echo '<script type="text/javascript"> alert("Unsuccessful !!")</script>';
}
}
mysqli_close($con);
?>

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