<head>
   <link rel="icon" href="img/wave.png" type="image/gif" sizes="16x16">
   <title>Ocean Era</title>
</head>


<?php
// include "include/header.php";
include "connect.php";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
   * {

      margin: 0 auto;
      text-align: center;
      padding: 0;
      font-family: ;
      

   }

   .banner {
      width: 100%;
      height: 100vh;
      background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url(img/BG.jpg) ;
      background-size: cover;
      background-position: center;
      position: sticky;

   }

   .navbar {
      width: 85%;
      margin: auto;
      padding: 20px 0;
      display: flex;
      align-items: center;
      justify-content: space-between;


   }

   .navbar ul li {
      list-style: none;
      display: inline-block;
      margin: 0 20px;
      position: relative;


   }

   .navbar ul li a {
      text-decoration: none;
      color: #fff;
      text-transform: uppercaes;
   }

   .navbar ul li::after {
      content: '';
      height: 3px;
      width: 0;
      background: #009689;
      position: absolute;
      left: 0;
      bottom: -10px;
      transition: 0.5s;
   }

   .navbar ul li:hover::after {
      width: 100%;
   }

   .content1 {
      width: 100%;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      text-align: center;
      color: #fff;

   }

   .content1 h1 {
      font-size: 70px;
      margin-top: 80px;
   }

  
   .content1 p {
      margin: 20px auto;
      font-weight: 100;
      line-height: 25px;

   }

   .button {
      width: 200px;
      padding: 15px 0;
      text-align: center;
      margin: 20px 10px;
      border-radius: 30px;
      font-weight: bold;
      border: 2px solid #009688;
      background: transparent;
      color: #fff;
      cursor: pointer;
      position: relative;
      overflow: hidden;

   }

   span {
      background: #009688;
      height: 100%;
      width: 0;
      border-radius: 30px;
      position: absolute;
      left: 0;
      bottom: 0;
      z-index: -1;
      transition: 0.5s;
   }

   .button:hover span {
      width: 100%;

   }

   .button:hover span {
      border: none;

   }
   .navh1:hover{
      transform:translateY(5px);
      animation: color-change 1s infinite
   }
   .navh1:active + embed { display: block; }
   @keyframes color-change {
  0% { color: #09c7e0; }
  20% { color: #dae014; }
  30% { color:#f52b07; }
  40% { color: #09c7e0; }
  50% { color: #f507b5; }
  60% { color: #f5077e; }
  70% { color: #6f0ecf; }
  80% { color: #28c0de; }
  90% { color: #e81ee5; }
  95% { color: #47cc5d; }
  100% { color:#5335db; }
}
  
</style>

<!-- Custom  -->

<div class="banner">
   <div class="navbar navbar-expand-lg">
      <h2 style="padding-right: 659px;color:#fff;transition:transform 0.3s;cursor:pointer" class="navh1">Ocean Era</h2>
      <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="room.php">Rooms</a></li>
         <li><a href="search.php">Search Booking</a></li>
         <li><a href="contact.php">Contact Us</a></li>
         <li><a href="http://instagram.com">Follow us</a></li>

      </ul>
      <audio>
      <source src="audio.mp3"></source>
    </audio>
   </div>



   <div class="content1 reveal1">
    <h1 style="font-style: normal;" class="navh">Ocean Era</h1>
   
      <p>
         Treat yourself! Your dream resort stay is just a few clicks away.<br>Book Now to Get Upto 70% Discount
      </p>
      <div>
         <button type="button" class="button"> <span></span><a href="booking.php" style="text-decoration: none;color:#fff;font-weight:bold;">BOOK</a></button>
         <button type="button" class="button"><span></span><a href="room.php" style="text-decoration: none;color:#fff;font-weight:bold;">Rooms</a></button>
      </div>
   </div>

</div>



<div class="conatiner ">
   <div class="row">
      <div class="col reveal">
   <h2 id="h1">Explore</h2>
   <p id="p">Treat yourself! Your dream resort <br>stay is just a few clicks away.<br>
               Book Now to Get Upto 70% Discount</p>
   <button type="button" id="button"><a href="booking.php" style="color:black;text-decoration: none;">Explore</a></button>
      </div>
     
     <div class="col">
         <div class="card1 c1">
            <h5 style="color:#fff">Nature</h5>
            <p>Treat yourself! Your dream resort</p>
         </div>
         <div class="card1 c2">
            <h5 style="color:#fff">Sea Waves</h5>
            <p>Treat yourself! Your dream resort</p>
         </div>
         <div class="card1 c3">
            <h5 style="color:#fff">Explore Boating</h5>
            <p>Treat yourself! Your dream resort</p>
         </div>
         <div class="card1 c4 ">
            <h5 style="color:#fff">Explore Nature</h5>
            <p>Treat yourself! Your dream resort</p>
         </div>


         <div class="card1 c5 ">
            <h5 style="color:#fff">Forest</h5>
            <p>Treat yourself! Your dream resort</p>
         </div>
         <div class="card1 c6">
            <h5 style="color:#fff">Sunset</h5>
            <p>Treat yourself! Your dream resort</p>
         </div>
         
      </div>
   </div>
   
</div>





<!-- style -->
<style>
    embed { display: none; }
   .conatiner:nth-child(2) {
      width:100%;
      height:100vh;
      background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(img/BG2.jpg);
      background-position:center;
      background-size:cover;
   }
   .row{
      display:flex;
      height:88%;
      align-items:center;
   }
   .col{
      flex-basis:50%;
   }
  #h1{
      color:#fff;
      font-size:90px;
      font-style: normal;
   }
   #h1:hover{
      animation: color-change 1s infinite
   }
   @keyframes color-change {
  0% { color: #09c7e0; }
  20% { color: #dae014; }
  30% { color:#f52b07; }
  40% { color: #09c7e0; }
  50% { color: #f507b5; }
  60% { color: #f5077e; }
  70% { color: #6f0ecf; }
  80% { color: #28c0de; }
  90% { color: #e81ee5; }
  95% { color: #47cc5d; }
  100% { color:#5335db; }
}


   #p{
      color:#fff;
      
      font-style: normal;
   }
#button{
   width:180px;
   color:#000;
   font-size:12px;
   padding:12px 0;
   background:#fff;
   border:0;
   border-radius:20px;
   outline:none;
   margin-top:30px;
   transition:transform 0.3s;
}
.card1{
   width:200px;
   height:230px;
   display:inline-block;
   border-radius:10px;
   padding :15px 25px;
   cursor:pointer;
   margin:10px 15px;
   background-image:url(img/1.jpg);
   background-position:center;
   background-size:cover;
   transition:transform 0.5s;
}
.c1{
   
   background-image:url(img/1.jpg);
}

.c2{
   background-image:url(img/2.jpg);
}
.c3{
   background-image:url(img/3.jpg);
}
.c4{
   background-image:url(img/4.jpg);
}
.c5{
   background-image:url(img/5.jpg);
}
.c6{
   background-image:url(img/6.jpg);
}
.card1:hover{
   transform:translateY(-10px);
}
#button:hover{
   transform:translateX(10px);
}


.reveal{
  position: relative;
  transform: translateY(180px);
  opacity: 0;
  transition: .3s all ease;
}

.reveal.active{
  transform: translateY(0);
  opacity: 3;
}
</style>
<!-- ended style -->
<!-- script -->
<script>
   function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

</script>

<?php

if (isset($_POST['review'])) {
   //echo '<script type="text/javascript"> alert("review button click")</script>';

   $query = "INSERT INTO rating (star,comnt) VALUES ('" . $_POST['star'] . "','" . $_POST['Comment'] . "')";


   $query_run = mysqli_query($con, $query);

   if ($query_run) {
      echo '<script type="text/javascript"> alert("Review Submitted")</script>';
   } else {
      echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
   }
}

mysqli_close($con);

?>








<?php
// include "include/footer.php";
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
