<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tea Timers - The Societea</title>
    <base href="/tea-timer/" target="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tea Timers">
    <meta name="author" content="Aaron L. Krauss">
    <link rel="stylesheet" href="styles/cyborg_bootstrap.css">
    <style>
      body { padding-top: 60px; }
    </style>
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>
    <div class="form-horizontal custom_body">
      <a class="pull-left btn btn-small btn-primary" href="http://labs.thecodeboss.dev/tea-chart">Tea Chart</a>
    </div>
    <br />
    <header class="jumbotron">
      <h1 style="text-align: center; text-style: italic">Tea Timers</h1>
      <h3 style="text-align: center; text-style: italic">-Western Style-</h3>
      <span class="" style="text-align: center;">
        <address>
        <a href="http://thesocietea.org" target="_blank">thesocietea.org</a><br />
        </address>
      </span>
    </header>
    <?php
      // Always use tetradic color pairing
      $hsl = rand(0, 360);
      for($x = 1; $x < 5; $x++){
        display_divs($x, $hsl);
        $hsl += 60;
        if($x % 2 == 0)
          $hsl += 60;
        if($hsl > 360)
          $hsl -= 360;
      }
    ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/sprintf/0.0.7/sprintf.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/howler/1.1.17/howler.min.js" type="text/javascript"></script>
    <script src="scripts/jquery.timer_methods.js" type="text/javascript"></script>
    <?php include '../analytics.php'; ?>
  </body>
</html>

<?php

// Dish out the HTML for our 4 timers
function display_divs($num, $color){
  echo '
    <div id="main' . $num . '" class="custom_body_timer' . $num . '" style="border-color:hsla(' . $color . ',100%,60%,1);">
      <form>
        <div class="controls controls-row">
          <select id="tea' . $num . '">
            <option value="tea">Tea</option>
            <optgroup label="Teas">
              <option value="white">White</option>
              <option value="green">Green</option>
              <option value="yellow">Yellow</option>
              <option value="oolong">Oolong</option>
              <option value="black">Black</option>
              <option value="puerh">Pu-erh</option>
            </optgroup>
            <optgroup label="Tisanes">
              <option value="rooibos">Rooibos</option>
              <option value="mate">Mate</option>
              <option value="herbal">Herbal</option>
            </optgroup>
          </select>
          <select id="steeping' . $num . '">
            <option value="steeping">Steeping</option>
            <option value="one">First</option>
            <option value="two">Second</option>
            <option value="three">Third</option>
          </select>
        </div>
        <button type="button" id="start' . $num . '"class=" btn btn-warning">Start</button>
        <button type="button" id="clear' . $num . '"class=" btn btn-warning">Clear</button>
        <span id="spnX' . $num . '" style="color:hsla(' . $color . ',100%,60%,1);"></span>
      </form>
      <div id="time' . $num . '" class="timer_class">0 : 00</div>
      <div style="color:hsla(' . $color . ',100%,60%,1);">
        Preferred Water Temp: <span id="temp' . $num . '"></span>
      </div>
    </div>';
}
?>
