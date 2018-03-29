<?php $current_tab_id = "skills"; ?>
<?php if ( isset($_REQUEST["skills"]) ) {
  $in_stock = htmlspecialchars($_REQUEST["skills"]);
  $in_stock = strtolower( $in_stock );
}

$cs_stock = array("python", "php", "javascript", "html5", "css", "css3", "java", "swift", "html" );
// image citations: java:https://cdn.vox-cdn.com/thumbor/FDD76YJZJFPyNUfT3ZBHcnMA0Ec=/43x0:593x367/1200x800/filters:focal(43x0:593x367)/cdn.vox-cdn.com/uploads/chorus_image/image/48667835/dbgxt2rvpd26udoyzcqn.0.0.jpg, https://www.google.com/search?client=firefox-b-1-ab&biw=1423&bih=716&tbm=isch&sa=1&ei=HwSTWpfcMaGt_Qbtho64Ag&q=java&oq=java&gs_l=psy-ab.3..0i67k1l8j0j0i67k1.172333.173221.0.173348.4.4.0.0.0.0.123.288.3j1.4.0....0...1c..64.psy-ab..0.4.285....0.mv8lDpUBH6A
                 // python:https://files.realpython.com/media/pythonlogo.0658b34b4498.jpg, https://www.google.com/search?q=python+image&client=firefox-b-1-ab&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiuqaLM3MHZAhVip1kKHb3gAvEQ_AUICigB&biw=1423&bih=716
                    // swift:https://www.theinquirer.net/w-images/4aac0508-77fc-41eb-aab5-4a55bd1e07a8/0/swiftlogo-580x358.jpeg, https://www.google.com/search?client=firefox-b-1-ab&biw=1423&bih=716&tbm=isch&sa=1&ei=zQeTWvGCNK6HggfooL-wAw&q=swift+coding+logo&oq=swift+coding+logo&gs_l=psy-ab.3...1173.2355.0.2538.5.5.0.0.0.0.65.289.5.5.0....0...1c..64.psy-ab..0.2.113...0j0i30k1j0i24k1.0.nkOdBim3A8I
                    // php: https://pbs.twimg.com/profile_images/68979870/php_400x400.png, https://www.google.com/search?client=firefox-b-1-ab&biw=1423&bih=716&tbm=isch&sa=1&ei=zQSTWvzVOIrk_Abe1ZygCA&q=php&oq=php&gs_l=psy-ab.3..0i67k1l2j0l5j0i67k1l2j0.17025.17552.0.17825.3.3.0.0.0.0.58.169.3.3.0....0...1c..64.psy-ab..0.3.168...0i10i67k1.0.HYkZIP2Xoyw
                    // html:https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/HTML.svg/1200px-HTML.svg.png, https://www.google.com/search?client=firefox-b-1-ab&biw=1423&bih=716&tbm=isch&sa=1&ei=4ASTWp7sI8ni_AaCvp3oBA&q=html&oq=html&gs_l=psy-ab.3..0i67k1l4j0l2j0i67k1j0j0i67k1j0.21985.22393.0.22550.4.3.0.1.1.0.61.164.3.3.0....0...1c..64.psy-ab..0.4.170....0.hD5pbly9ZPc



function check_in_stock($cs_stock, $stock) {
  foreach($cs_stock as $a) {
    if ($a == $stock) {
      return TRUE;
    }
  }
  return FALSE;
}
?>

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

<body id="cs_back">
 <?php include "includes/header.php"; ?>
 <div id="skill-container">
   <div id="self_introduction">
     <p>I am still studying many new skills while I have learned several CS languages and design skills</p>
     <p>To check if I know any skills you may need, please type the skill to see if I have it in stock.</p>
   </div>
   <div>
     <?php
      if ( isset($in_stock) ) {
        if (check_in_stock($cs_stock, $in_stock)) {
          echo "<p><img class=\"size\" src=\"images/" . $in_stock . ".jpg\"/></p>";
          echo "<p>"."<strong>I do know " . $in_stock ."</strong></p>";
        } else {
          echo "<p>" . $in_stock . " has <strong>not</strong> been learned.</p>";
        }
          echo "<hr/>";
      }
      ?>
     <form id="skills-check" action="skills.php" method="get">
       <div>
         <label for="skills">Skills:</label>
         <input type="text" name="skills" required/>
       </div>
       <button type="submit">Check</button>
    </form>
    </div>
  </div>


</body>
</html>
