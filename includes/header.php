<?php
$tabs = array(
  "index" => "Home",
  "skills" => "Skills",
  "my_work" => "My Work",
  "contact" => "Contact"
);
?>

<div class="header">
  <div class="inline-table">
  <div class="menu">
    <ul>
      <?php
      foreach($tabs as $tab_id => $tab_name) {
        if ($tab_id == $current_tab_id) {
          $css_id = "id='current_tab'";
        } else {
          $css_id = "";
        }
        echo "<li><a " . $css_id . " href='" . $tab_id. ".php'>$tab_name</a></li>";
      }
      ?>
    </ul>
  </div>
  </div>
</div>
