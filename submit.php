<?php
  $name = $_REQUEST[htmlspecialchars("name")];
  $email = $_REQUEST[htmlspecialchars("Email")];
?>
<?php $current_tab_id = "submit"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <title>Home</title>
</head>

<body id="body_container">
 <?php include "includes/header.php"; ?>
 <div>
   <div class="banner">
   <div class="container">
     <p id="feedback">Thank you <?php
     if (filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING)) {
          echo($name);
        }?>
      for submitting your message!
     </p>
   </div>
 </div>
 </div>

 <footer class="footer">
   <p>© 2018 All rights reserved | Design by Junan.</a></p>
 </footer>

</body>
</html>
