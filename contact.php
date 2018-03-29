<?php $current_tab_id = "contact"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <title>Contact</title>
</head>

<body id="contact-body">
 <?php include "includes/header.php"; ?>
 <div class="body_container">
   <div id="contact">
   <div class="container">
     <h3>Feel free to contact me</h3>
     <div class="contact-main">
       <div class="contact-left">
           <div>
             <h4 id="special_h4">Mail me</h4>
           </div>
           <div class="contact-text">
             <a href="mailto:jq77@cornell.edu">jq77@cornell.edu</a>
           </div>
          <div class="contact-grid">
           <div class="contact-name">
             <h4>Phone</h4>
           </div>
           <div class="contact-text">
             <p>+434-218-9536</p>
           </div>
         </div>
         <div class="contact-grid">
           <div class="contact-name">
             <h4>Address</h4>
           </div>
           <div class="contact-text">
             <p>F1A2 Townhouse Community, Cornell University<br> Ithaca, NY 14853<br> USA.
             </p>
           </div>
         </div>
       </div>

       <div class="contact-main">
         <div class="bottom">
           <form action="submit.php" method="post" class="contact_form">
             <label class="header">Name</label>
             <div>
               <input class="form-form" placeholder="Name" name="name" type="text" required>
             </div>
             <div>
               <label class="header">Email</label>
               <input class="form-form" placeholder="info@example.com" name="Email" type="email" required>
             </div>
             <label id="special-label" class="header">Your Message</label>
             <textarea placeholder="Thank you for your message...."required/></textarea>
             <input class="form-form" name="submit" type="submit" value="SEND">
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

 </div>


</body>
</html>
