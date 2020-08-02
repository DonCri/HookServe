<!DOCTYPE html>

<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Test eigene Visualisierung</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

<script> $(document).ready(function(){
   $('.collapsible').collapsible();
   $('.modal').modal();
   $('.tabs').tabs();
 });</script>

</head>

<body>

<?
    include('ws/websocket.html');
?>

<ul class="collapsible">
    <li>
      <div class="collapsible-header"><p id="navTitel">My House</p></div>
      <div class="collapsible-body"><span> <? include('include/kategorie.php'); ?> </span></div>
    </li>
    <li>
      <div class="collapsible-header"><p id="navTitel">Websocket</p></div>
      <div class="collapsible-body"><span><p id="output"></p></span></div>
    </li>
    <li>
      <div class="collapsible-header"><p id="navTitel">Modul Update</p></div>
      <div class="collapsible-body"><span><a href="module_update.php">Module Updaten</a></span></div>
    </li>
  </ul>



<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
