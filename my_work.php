<?php $current_tab_id = "my_work"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <title>My Work</title>
</head>

<body id="my_word_back">
 <?php include "includes/header.php"; ?>
 <div class="body_container" id="work_div">


   <ul class="gallery">
   <!-- <h3 class="work">Photography</h3> -->
   <!-- This gallery incorporates tutorials of both modals and lightbox -->
   <?php
     $captions = array(
        "Grilled Lobster, Manhattan",
        "Homemade Katsu, Taiyuan",
        "Passionfruit Icecream, Manhattan",
        "Cheddar Cheese with Baked Apple, Manhattan",
        "Blood Sausage Appetizer, Manhattan",
        "California #1, California",
        "Micro-World, Charlottesville",
        "Cheesecake, Manhattan",
        "Caviar, Manhattan",
        "Seared Foie Gras with Beets, Manhattan",
        "Roasted Duck, Manhattan",
        "Butter Poached Lobster with Potato Cake, Manhattan",
        "Roasted Squash, Manhattan",
        "Same Squash As Previous One",
        "Sweet Potato Dessert, Manhattan",
        "Cranberry, Manhattan"
     );
     for($n = 1; $n <= count($captions); $n++):
   ?>
   <!-- some pictures are taken by Kate Wang -->
   <li>
     <a href="#img<?php echo $n; ?>"><img src="images/<?php echo $n; ?>.jpg" alt="<?php echo $captions[$n-1]; ?> Thumb"></a>
     <article id="img<?php echo $n; ?>">
       <figure>
         <a href="#img<?php if($n == count($captions)) { echo 1; } else { echo $n+1; } ?>"><img src="images/<?php echo $n; ?>.jpg" alt="<?php echo $captions[$n-1]; ?>"></a>
           <figcaption><?php echo $captions[$n-1]; ?></figcaption>
       </figure>
       <nav>
         <a class="close" href="#close">Close</a>
         <a class="arrow prev" href="#img<?php if($n == 1) { echo count($captions); } else { echo $n-1; } ?>">Previous</a>
         <a class="arrow next" href="#img<?php if($n == count($captions)) { echo 1; } else { echo $n+1; } ?>">Next</a>
       </nav>
     </article>
   </li>
   <?php endfor; ?>

   </ul>

</div>
</div>

<footer class="footer">
  <p>© 2018 All rights reserved | Design by Junan Qu.</a></p>
</footer>

</body>
</html>
