<?php
  # Page Vars
  $active_link = '/';
?>
<?php include 'templates/top.php' ?>
<section>
  <div class="container">
    <div class="hidden-xs hidden-sm">
      <p><strong>Gain</strong> (<span id="gainValue">1</span>)
        <input type="range" id="gain" name="gain" min="0" max="100" value="1">
      </p>
      <p>
        <strong>Drive</strong> (<span id="driveValue">0</span>)
        <input type="range" id="drive" name="drive" min="0" max="10" value="0">
      </p>
      <input type="checkbox" id="stop" name="stop-on-change" checked="true"> Stop playback on value change?
      <br>
      <input type="checkbox" id="overlap" name="allow-overlap"> Allow sound to overlap? (killstreak confirmed)
    </div>
    <div id="buttons" class="row">
      <div class="row" id="loading">
    </div>
  </div>
</section>
<?php include 'templates/bottom.php' ?>
