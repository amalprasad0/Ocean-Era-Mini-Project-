<!-- <link rel="stylesheet" href="css/review.css"> -->
<?php
 include "include/header.php";
 include_once "connect.php";

 if(!mysqli_connect_errno())
 {
   $reviews = mysqli_query($con, "SELECT * FROM bestrating");
   mysqli_close($con);
 }
?>

  <center><h1 style="font-style: normal;">Reviews</h1></center>

  <!-- <table>
    <thead>
      <th>Stars</th>
      <th>Comments</th>
    </thead>

    <tbody>
      <?php

        foreach($reviews as $review)
        { ?>
          <tr>
            <td> <?php echo $review['star'];?></td>
            <td> <?php echo $review['comnt'];?></td>
          </tr>
          <?php

        };



       ?> -->




<!-- custom -->
<table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col">Stars</th>
      <th scope="col">Reviews</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($reviews as $review)
  { ?>
    <tr>
      <th ><?php echo $review['star'];?></th>
      <td><?php echo $review['comnt'];?></td>
      
    
    </tr>
    <?php

        };



       ?>
  </tbody>
</table>