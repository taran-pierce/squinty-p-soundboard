<?php
  # Page Vars
  $active_link = '/';
?>
<?php include 'templates/top.php' ?>
<section>
  <div class="container">
    <h1>Squinty P's Soundboard</h1>
    <p class="lead">Forked from Montageparodies MLG 420</p>
    <div class="alert alert-info">
      <span class="glyphicon glyphicon-hand-right"></span> <strong>Protip:</strong> You can use your keyboard to activate the sounds: starting with 0, 1, ..., y and z.
      <p>Do you want to hide the hot keys? Press <button type="button" class="btn btn-success" id="togglehotkeys">Hide Hotkeys</button></p>
    </div>
    <div class="alert alert-info" style="font-size: 1.2em">
      <span style="font-size: 1.6em" class="glyphicon glyphicon-hand-right"></span> <strong>Protip 2:</strong> You can stop all sounds pressing <kbd>esc</kbd> or <kbd>enter</kbd>
    </div>
    <h2>Controls</h2>
    <p><strong>Gain</strong> (<span id="gainValue">1</span>)
      <input type="range" id="gain" name="gain" min="0" max="100" value="1">
    </p>
    <p>
      <strong>Drive</strong> (<span id="driveValue">0</span>)
      <input type="range" id="drive" name="drive" min="0" max="10" value="0">
    </p>
    <input type="checkbox" id="stop" name="stop-on-change" checked="true"> Stop playback on value change?
    <input type="checkbox" id="overlap" name="allow-overlap"> Allow sound to overlap? (killstreak confirmed)

    <h2>Dank Memes</h2>
    <div id="buttons" class="row">
      <div class="row" id="loading"><div class="col-sm-2 col-sm-offset-5"><img src="loading.gif" /></div>
    </div>
  </div>
</section>
<?php include 'templates/bottom.php' ?>
